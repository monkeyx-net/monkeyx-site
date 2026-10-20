<?php
// router.php – for local testing: php -S localhost:8000 router.php
// Mirrors the rewrites in .htaccess, which the built-in server ignores.

// Get the requested URI path
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// If the path is empty, serve index.php
if ($path === '/' || $path === '') {
    $path = '/index.php';
}

$scriptPath = __DIR__ . $path;

// Existing non-PHP files (CSS, JS, images, PDFs): let the built-in server send them as-is
if (is_file($scriptPath) && pathinfo($scriptPath, PATHINFO_EXTENSION) !== 'php') {
    return false;
}

// Blog post URLs: /blog/{slug} → post.php?slug={slug}
if (preg_match('#^/blog/([a-z0-9-]+)$#i', $path, $m)) {
    $_GET['slug'] = $m[1];
    $scriptPath = __DIR__ . '/post.php';
}
// RSS feed URL: /feed → feed.php
elseif ($path === '/feed') {
    $scriptPath = __DIR__ . '/feed.php';
}
// Extensionless URLs: /games → games.php
elseif (!is_file($scriptPath) && is_file($scriptPath . '.php')) {
    $scriptPath .= '.php';
}

// Check if the file exists and is a .php file
if (is_file($scriptPath) && pathinfo($scriptPath, PATHINFO_EXTENSION) === 'php') {
    $_SERVER['PHP_SELF'] = '/' . basename($scriptPath);
    include $scriptPath;
} else {
    // Return 404 if file not found
    http_response_code(404);
    echo "404 Not Found: " . htmlspecialchars($path);
}
