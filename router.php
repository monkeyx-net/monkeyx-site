<?php
// router.php – for local testing: php -S localhost:8000 router.php
// Mirrors the rewrites in .htaccess, which the built-in server ignores.

// Get the requested URI path
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// If the path is empty, serve index.php
if ($path === '/' || $path === '') {
    $path = '/index.php';
}

function not_found($path)
{
    http_response_code(404);
    echo "404 Not Found: " . htmlspecialchars($path);
    exit;
}

// Refuse any path segment starting with a dot: blocks ../ traversal and dotfiles (.git, .htaccess)
if (preg_match('#(^|/)\.#', $path)) {
    not_found($path);
}

// Resolve to a real file and make sure it is inside the site root (catches symlinks pointing out)
$root = realpath(__DIR__);
function in_root($file, $root)
{
    $real = realpath($file);
    return $real !== false && is_file($real) && strpos($real, $root . DIRECTORY_SEPARATOR) === 0;
}

$scriptPath = __DIR__ . $path;

// Existing non-PHP files (CSS, JS, images, PDFs): let the built-in server send them as-is
if (in_root($scriptPath, $root) && pathinfo($scriptPath, PATHINFO_EXTENSION) !== 'php') {
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

// Serve the PHP file if it is inside the site root and is not this router
if (in_root($scriptPath, $root)
    && pathinfo($scriptPath, PATHINFO_EXTENSION) === 'php'
    && realpath($scriptPath) !== realpath(__FILE__)) {
    $_SERVER['PHP_SELF'] = '/' . basename($scriptPath);
    include $scriptPath;
} else {
    not_found($path);
}
