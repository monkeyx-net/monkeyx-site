<?php
$post_meta = [
    'title'   => 'Hello, Retro Terminal',
    'date'    => '2026-06-04',
    'slug'    => 'hello-retro-terminal',
    'tags'    => ['meta', 'site'],
    'summary' => 'Welcome to the Retro Games Terminal blog — a place for devlogs, tutorials, and deep-dives into retro game development.',
];
?>
<p>Welcome to the blog section of Retro Games Terminal. This is where I'll be posting devlogs, tutorials, and deeper explorations of the tools and techniques behind the games and ports on this site.</p>

<h2>// WHAT TO EXPECT</h2>
<p>Posts will cover topics across the stack — from low-level C/SDL2 rendering to Godot 4 shaders, LÖVE2D quirks, and PortMaster porting notes. The goal is to document real problems and their solutions, not sanitised write-ups.</p>

<div class="command-line">
    <span class="prompt">$ grep -r "topic" ./upcoming-posts/</span><br>
    devlog/sdl2-sprite-batching.md<br>
    tutorial/love2d-fixed-timestep.md<br>
    deep-dive/godot-tilemap-performance.md<br>
    notes/portmaster-rg35xx-gotchas.md<br>
    <span class="cursor-blink"></span>
</div>

<h2>// HOW POSTS ARE STORED</h2>
<p>Each post is a plain PHP file under <code>posts/</code> with a metadata array at the top and raw HTML content below. No database, no CMS, no markdown parser — just the same stack the rest of this site runs on.</p>

<div class="code-block"><pre><code>$post_meta = [
    'title'   => 'Post Title',
    'date'    => '2026-06-04',
    'slug'    => 'post-slug',
    'tags'    => ['tag1', 'tag2'],
    'summary' => 'Short description for RSS readers.',
    'image'   => 'images/blog/cover.webp', // optional
];</code></pre></div>

<p>Subscribe via <a href="/feed">RSS</a> to get new posts in your feed reader of choice.</p>
