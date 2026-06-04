<?php
// Load all post metadata
$posts = [];
foreach (glob(__DIR__ . '/posts/*.php') as $file) {
    ob_start();
    require $file;
    ob_end_clean();
    if (isset($post_meta)) {
        $posts[] = $post_meta;
        unset($post_meta);
    }
}

// Sort newest first
usort($posts, fn($a, $b) => strcmp($b['date'], $a['date']));

// Collect unique tags
$all_tags = [];
foreach ($posts as $p) {
    foreach ($p['tags'] as $tag) {
        $all_tags[$tag] = true;
    }
}
ksort($all_tags);

$page_title   = "Blog";
$current_page = "blog";
require "includes/head.php";
?>

<h1>// RETRO GAMES TERMINAL :: BLOG</h1>
<p style="margin-bottom:0.5rem;">
    <span class="prompt">$ ls /blog/ --sort=date</span> &nbsp;|&nbsp; <span id="blog-count">...</span>
</p>

<div class="filter-bar">
    <span class="filter-label">TAG://</span>
    <div class="filter-select-wrap blog-filter-wrap">
        <select class="filter-select" id="blogFilterSelect">
            <option value="all" selected>[ALL]</option>
            <?php foreach ($all_tags as $tag => $_): ?>
            <option value="<?= htmlspecialchars($tag) ?>">[<?= htmlspecialchars(strtoupper($tag)) ?>]</option>
            <?php endforeach; ?>
        </select>
        <span class="filter-select-label" aria-hidden="true">[ALL] <span class="filter-arrow">▾</span></span>
    </div>
</div>

<div class="grid-blog">
<?php foreach ($posts as $p):
    $tags_attr = implode(' ', array_map('htmlspecialchars', $p['tags']));
?>
    <div class="blog-card" data-tags="<?= $tags_attr ?>">
        <?php if (!empty($p['image'])): ?>
        <img src="/<?= htmlspecialchars($p['image']) ?>" alt="<?= htmlspecialchars($p['title']) ?>" class="blog-card-image">
        <?php endif; ?>
        <div class="blog-card-body">
            <div class="blog-card-title"><?= htmlspecialchars($p['title']) ?></div>
            <div>
                <?php foreach ($p['tags'] as $tag): ?>
                <span class="blog-tag"><?= htmlspecialchars(strtoupper($tag)) ?></span>
                <?php endforeach; ?>
            </div>
            <div class="blog-card-summary"><?= htmlspecialchars($p['summary']) ?></div>
            <div class="blog-card-meta"><?= htmlspecialchars($p['date']) ?></div>
            <a href="/blog/<?= htmlspecialchars($p['slug']) ?>" class="blog-card-read">[READ]</a>
        </div>
    </div>
<?php endforeach; ?>
</div>

<div class="command-line">
    <span class="prompt">$ </span><a href="/feed" style="border:none;">subscribe via RSS</a> &nbsp;|&nbsp; feed: <code>/feed</code>
</div>

<script src="/js/blog-filters.js"></script>
<?php require "includes/footer.php"; ?>
