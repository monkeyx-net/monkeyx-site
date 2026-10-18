<?php
$secret = getenv('DEPLOY_SECRET');
if (!$secret) {
    http_response_code(500);
    exit;
}
$sig    = 'sha256=' . hash_hmac('sha256', file_get_contents('php://input'), $secret);
if (!hash_equals($sig, $_SERVER['HTTP_X_HUB_SIGNATURE_256'] ?? '')) {
    http_response_code(403);
    exit;
}
$output = shell_exec('git -C /var/www/monkeyx.net pull 2>&1');
echo $output;
