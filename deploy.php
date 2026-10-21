<?php
$secret = getenv('DEPLOY_SECRET');
if (!$secret) {
    http_response_code(500);
    exit('Server misconfiguration');
}
$payload = file_get_contents('php://input');
if ($payload === false) {
    http_response_code(400);
    exit('Bad request');
}
$sig = 'sha256=' . hash_hmac('sha256', $payload, $secret);
$provided_sig = $_SERVER['HTTP_X_HUB_SIGNATURE_256'] ?? '';
if (!hash_equals($sig, $provided_sig)) {
    http_response_code(403);
    exit('Forbidden');
}
// Use proc_open for safer execution with timeout
$descriptorspec = [
    0 => ['pipe', 'r'],
    1 => ['pipe', 'w'],
    2 => ['pipe', 'w'],
];
$process = proc_open('git -C /var/www/monkeyx.net pull --ff-only 2>&1', $descriptorspec, $pipes);
if (is_resource($process)) {
    fclose($pipes[0]);
    $output = stream_get_contents($pipes[1]);
    fclose($pipes[1]);
    fclose($pipes[2]);
    $return_value = proc_close($process);
    http_response_code($return_value === 0 ? 200 : 500);
    // Don't leak full output in production; log if needed
    echo 'OK';
} else {
    http_response_code(500);
    exit('Deploy failed');
}
