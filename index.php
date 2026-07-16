<?php
$page_title = "RETRO GAMES TERMINAL :: 8/16-bit + SDL2/Godot/LÖVE";
$current_page = "index";
require "includes/head.php";
?>

<!-- BANNER + MASCOT ROW -->
<div class="banner-row">
<!-- prettier-ignore -->
<pre class="ascii-banner">
 ██████╗ ███████╗████████╗██████╗  ██████╗      ██████╗  █████╗ ███╗   ███╗███████╗███████╗
 ██╔══██╗██╔════╝╚══██╔══╝██╔══██╗██╔═══██╗    ██╔════╝ ██╔══██╗████╗ ████║██╔════╝██╔════╝
 ██████╔╝█████╗     ██║   ██████╔╝██║   ██║    ██║  ███╗███████║██╔████╔██║█████╗  ███████╗
 ██╔══██╗██╔══╝     ██║   ██╔══██╗██║   ██║    ██║   ██║██╔══██║██║╚██╔╝██║██╔══╝  ╚════██║
 ██║  ██║███████╗   ██║   ██║  ██║╚██████╔╝    ╚██████╔╝██║  ██║██║ ╚═╝ ██║███████╗███████║
 ╚═╝  ╚═╝╚══════╝   ╚═╝   ╚═╝  ╚═╝ ╚═════╝     ╚═════╝ ╚═╝  ╚═╝╚═╝     ╚═╝╚══════╝╚══════╝
 ─────────────────────────────────────────────────────────────────────────────────────────
           GREEN SCREEN TERMINAL  ·  8 &amp; 16 BIT EDITION  ·  PLAY + DEV + EXPLORE</pre>
<!-- prettier-ignore -->
<pre class="ascii-banner ascii-banner-mobile">
 ██████╗ ███████╗████████╗██████╗  ██████╗
 ██╔══██╗██╔════╝╚══██╔══╝██╔══██╗██╔═══██╗
 ██████╔╝█████╗     ██║   ██████╔╝██║   ██║
 ██╔══██╗██╔══╝     ██║   ██╔══██╗██║   ██║
 ██║  ██║███████╗   ██║   ██║  ██║╚██████╔╝
 ╚═╝  ╚═╝╚══════╝   ╚═╝   ╚═╝  ╚═╝ ╚═════╝

 ██████╗  █████╗ ███╗   ███╗███████╗███████╗
██╔════╝ ██╔══██╗████╗ ████║██╔════╝██╔════╝
██║  ███╗███████║██╔████╔██║█████╗  ███████╗
██║   ██║██╔══██║██║╚██╔╝██║██╔══╝  ╚════██║
╚██████╔╝██║  ██║██║ ╚═╝ ██║███████╗███████║
 ╚═════╝ ╚═╝  ╚═╝╚═╝     ╚═╝╚══════╝╚══════╝
 ──────────────────────────────────────────
 GREEN SCREEN  ·  8 &amp; 16 BIT  ·  DEV + PLAY</pre>
    <img src="images/logo.webp" class="banner-logo" alt="" aria-hidden="true">
</div>

<!-- SYSTEM STATUS BAR -->
<div class="status-bar">
    <span><span class="s-label">SYS:</span> <span class="s-ok">ONLINE</span></span>
    <span><span class="s-label">CRT:</span> <span class="s-ok">ACTIVE</span></span>
    <span><span class="s-label">GAMES_DB:</span> <span class="s-ok">LOADED</span></span>
    <span><span class="s-label">ENGINES:</span> <span class="s-val">SDL2 | GODOT4 | LÖVE2D</span></span>
    <span><span class="s-label">MEM:</span> <span class="s-val">64K FREE</span></span>
    <span id="sys-time"><span class="s-label">TIME:</span> <span class="s-val">--:--:--</span></span>
</div>

<!-- INTRODUCTION -->
<div class="intro-block">
    <img src="images/monkeyx.webp" class="intro-monkey" alt="" aria-hidden="true">
    <p class="intro-lead">
        Rescuing classic 8 &amp; 16-bit games from obsolescence — converting them to run on modern hardware so anyone can play them, today.
    </p>
    <div class="intro-body">
        <p>
            This site documents the process of taking beloved retro games from machines like the <span class="hl">Commodore 64</span>, <span class="hl">ZX Spectrum</span>, <span class="hl">Amstrad CPC</span>, <span class="hl">BBC Micro</span> and <span class="hl">Amiga</span> and rebuilding them for contemporary systems using <span class="hl">C / SDL2</span>, <span class="hl">LÖVE2D</span>, <span class="hl">Godot 4</span> and <span class="hl">PortMaster</span> — keeping the original feel intact while opening the door to players on modern hardware.
        </p>
        <p>
            Alongside conversions, I repair and restore original 8/16-bit machines — diagnosing hardware faults, recapping boards, replacing failed chips — and document everything so the knowledge stays alive.
        </p>
        <p>
            All of this is covered on <span class="hl">YouTube</span> — walkthroughs, dev logs, hardware repairs and coding deep-dives. The goal is simple: share these games and the skills to keep them running with a community both old enough to remember them and new enough to discover them for the first time.
        </p>
    </div>
    <div class="intro-tags">
        <span class="tag">C / SDL2</span>
        <span class="tag">LÖVE2D</span>
        <span class="tag">GODOT 4</span>
        <span class="tag">PORTMASTER</span>
        <span class="tag">HARDWARE REPAIR</span>
        <span class="tag">YOUTUBE</span>
        <span class="tag">OPEN SOURCE</span>
    </div>
</div>

<h1>// SELECT MODULE</h1>
<p style="margin-bottom:0.8rem;">
    <span class="prompt">$ ls /modules/ --detail</span><br>
    → <span id="module-count">0</span> modules available
</p>

<div class="grid-sections">
    <a href="games" class="section-card">
        <span class="sc-cmd">$ cd /games</span>
        <img src="images/icons/games.svg" class="sc-icon" alt="" aria-hidden="true">
        <div class="sc-title">GAMES ARCHIVE</div>
        <div class="sc-desc">Retro game showcase — 6 featured titles across C64, Genesis, Amstrad CPC, and HTML5.</div>
        <span class="sc-go">[ENTER ▶]</span>
    </a>
    <a href="sdl2" class="section-card">
        <span class="sc-cmd">$ cd /sdl2</span>
        <img src="images/icons/sdl2.svg" class="sc-icon" alt="" aria-hidden="true">
        <div class="sc-title">SDL2 / C</div>
        <div class="sc-desc">Bare-metal game dev in C with SDL2. Pixel-perfect control, sprite blitting, chiptune audio.</div>
        <span class="sc-go">[ENTER ▶]</span>
    </a>
    <a href="godot" class="section-card">
        <span class="sc-cmd">$ cd /godot</span>
        <img src="images/icons/godot.svg" class="sc-icon" alt="" aria-hidden="true">
        <div class="sc-title">GODOT 4</div>
        <div class="sc-desc">Pixel-perfect retro pipelines. 2D games, CRT shaders, low-res viewports, palette restrictions.</div>
        <span class="sc-go">[ENTER ▶]</span>
    </a>
    <a href="love2d" class="section-card">
        <span class="sc-cmd">$ cd /love2d</span>
        <img src="images/icons/love2d.svg" class="sc-icon" alt="" aria-hidden="true">
        <div class="sc-title">LÖVE2D</div>
        <div class="sc-desc">Lua-powered prototyping. Fast iteration for game jams and 8-bit 2d games.</div>
        <span class="sc-go">[ENTER ▶]</span>
    </a>
    <a href="portmaster" class="section-card">
        <span class="sc-cmd">$ cd /portmaster</span>
        <img src="images/icons/portmaster.svg" class="sc-icon" alt="" aria-hidden="true">
        <div class="sc-title">PORTMASTER</div>
        <div class="sc-desc">Port games to ARM handhelds (RG35XX, TrimUI, Retroid) using SDL2, Godot, and LÖVE2D runtimes.</div>
        <span class="sc-go">[ENTER ▶]</span>
    </a>
    <a href="hardware" class="section-card">
        <span class="sc-cmd">$ cd /hardware</span>
        <img src="images/icons/hardware.svg" class="sc-icon" alt="" aria-hidden="true">
        <div class="sc-title">8 &amp; 16 BIT HW</div>
        <div class="sc-desc">Deep dive into C64, ZX Spectrum, Amiga, Amstrad CPC and more. Registers, chipsets, demos.</div>
        <span class="sc-go">[ENTER ▶]</span>
    </a>
    <a href="tools" class="section-card">
        <span class="sc-cmd">$ cd /tools</span>
        <img src="images/icons/tools.svg" class="sc-icon" alt="" aria-hidden="true">
        <div class="sc-title">TOOLS &amp; EMULATION</div>
        <div class="sc-desc">SDL2, Godot shaders, LÖVE2D wiki, VICE, FS-UAE, BlastEm, Mesen and more.</div>
        <span class="sc-go">[ENTER ▶]</span>
    </a>
    <a href="blog" class="section-card">
        <span class="sc-cmd">$ cd /blog</span>
        <img src="images/icons/blog.svg" class="sc-icon" alt="" aria-hidden="true">
        <div class="sc-title">BLOG</div>
        <div class="sc-desc">What's going on at monkeyx.net. Tutorials and deep dives into retro technology.</div>
        <span class="sc-go">[ENTER ▶]</span>
    </a>
</div>

<script>(function(){var c=document.querySelectorAll('.section-card').length;document.getElementById('module-count').textContent=c})();</script>

<?php require "includes/footer.php"; ?>
