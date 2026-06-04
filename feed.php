<?php
// Load all post metadata, sorted newest first, max 20
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
usort($posts, fn($a, $b) => strcmp($b['date'], $a['date']));
$posts = array_slice($posts, 0, 20);

$scheme   = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$base_url = $scheme . '://' . $_SERVER['HTTP_HOST'];

header('Content-Type: application/rss+xml; charset=utf-8');

function rss_date(string $ymd): string {
    return date(DATE_RSS, strtotime($ymd));
}

function image_mime(string $path): string {
    $ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));
    return match($ext) {
        'jpg', 'jpeg' => 'image/jpeg',
        'png'         => 'image/png',
        'gif'         => 'image/gif',
        default       => 'image/webp',
    };
}

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
<channel>
    <title>Retro Games Terminal Blog</title>
    <link><?= htmlspecialchars($base_url) ?></link>
    <description>Devlogs, tutorials, and deep-dives into retro game development with SDL2, Godot, LÖVE2D, and more.</description>
    <language>en-gb</language>
    <atom:link href="<?= htmlspecialchars($base_url . '/feed') ?>" rel="self" type="application/rss+xml"/>
<?php foreach ($posts as $p):
    $post_url = $base_url . '/blog/' . htmlspecialchars($p['slug']);
?>
    <item>
        <title><?= htmlspecialchars($p['title']) ?></title>
        <link><?= $post_url ?></link>
        <guid isPermaLink="true"><?= $post_url ?></guid>
        <pubDate><?= rss_date($p['date']) ?></pubDate>
        <description><?= htmlspecialchars($p['summary']) ?></description>
        <?php if (!empty($p['image'])):
            $img_path = __DIR__ . '/' . $p['image'];
            $img_size = file_exists($img_path) ? filesize($img_path) : 0;
            $img_url  = $base_url . '/' . htmlspecialchars($p['image']);
            $img_mime = image_mime($p['image']);
        ?>
        <enclosure url="<?= $img_url ?>" length="<?= $img_size ?>" type="<?= $img_mime ?>"/>
        <?php endif; ?>
    </item>
<?php endforeach; ?>
</channel>
</rss>
