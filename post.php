<?php
$slug = preg_replace('/[^a-z0-9-]/', '', $_GET['slug'] ?? '');
$post_file = __DIR__ . '/posts/' . $slug . '.php';

if (!$slug || !file_exists($post_file)) {
    http_response_code(404);
    $page_title   = "Post Not Found";
    $current_page = "blog";
    require "includes/head.php";
    echo '<h1>// 404 :: POST NOT FOUND</h1>';
    echo '<p><a href="/blog">&lt; back to blog</a></p>';
    require "includes/footer.php";
    exit;
}

ob_start();
require $post_file;
$post_content = ob_get_clean();

$page_title   = $post_meta['title'];
$current_page = "blog";
require "includes/head.php";
?>

<a href="/blog" class="blog-back">&lt; back to blog</a>

<div class="blog-post-header">
    <h1><?= htmlspecialchars($post_meta['title']) ?></h1>
    <div class="blog-post-meta">
        <span><?= htmlspecialchars($post_meta['date']) ?></span>
        <span>
            <?php foreach ($post_meta['tags'] as $tag): ?>
            <span class="blog-tag"><?= htmlspecialchars(strtoupper($tag)) ?></span>
            <?php endforeach; ?>
        </span>
    </div>
    <?php if (!empty($post_meta['image'])): ?>
    <img src="/<?= htmlspecialchars($post_meta['image']) ?>"
         alt="<?= htmlspecialchars($post_meta['title']) ?>"
         class="blog-post-cover">
    <?php endif; ?>
</div>

<div class="blog-post-body">
    <?= $post_content ?>
</div>

<div class="command-line" style="margin-top:2rem;">
    <span class="prompt">$ </span><a href="/blog" style="border:none;">&lt; back to blog</a>
    &nbsp;|&nbsp;
    <a href="/feed" style="border:none;">RSS feed</a>
    <span class="cursor-blink"></span>
</div>

<?php require "includes/footer.php"; ?>
