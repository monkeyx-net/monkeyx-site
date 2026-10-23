<?php
$page_title = isset($page_title)
    ? htmlspecialchars($page_title) . " :: RETRO GAMES TERMINAL"
    : "RETRO GAMES TERMINAL :: 8/16-bit + SDL2/Godot/LÖVE";
$current_page = isset($current_page)
    ? $current_page
    : basename($_SERVER["PHP_SELF"], ".php");
$game_play_url = isset($game_play_url) ? $game_play_url : "#";
$game_urls = [
    "manic-miner" => "retro/games/manic-miner/",
    "jet-set-willy" => "retro/games/jet-set-willy/",
    "space-invaders-part-ii" => "retro/games/space-invaders-part-ii/",
    "robotron" => "retro/games/robotron/",
    "joust" => "retro/games/joust/",
    "defender" => "retro/games/defender/",
    "galaga" => "retro/games/galaga/",
    "galaxian" => "retro/games/galaxian/",
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title><?= $page_title ?></title>
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/png" href="/favicon.png">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="alternate" type="application/rss+xml" title="Retro Games Terminal Blog" href="/feed">
</head>
<body>
<nav class="top-nav">
    <a href="/index" class="nav-logo<?= $current_page === "index"
        ? " nav-active"
        : "" ?>">
        <img src="/images/logo.webp" class="nav-logo-img" alt="logo">
    </a>
    <button class="nav-hamburger" id="navToggle" aria-label="Toggle menu">&#9776;</button>
    <div class="nav-collapse" id="navCollapse">
        <div class="nav-links">
            <a href="/games"<?= $current_page === "games"
                ? ' class="nav-active"'
                : "" ?>>&gt;GAMES</a>
            <span class="nav-sep">|</span>
            <div class="nav-drop">
                <span class="nav-drop-label<?= in_array($current_page, ["sdl2", "godot", "love2d", "portmaster"])
                    ? " nav-active"
                    : "" ?>" tabindex="0">&gt;CODING ▾</span>
                <div class="nav-drop-menu">
                    <a href="/sdl2"<?= $current_page === "sdl2"
                        ? ' class="nav-active"'
                        : "" ?>>&gt;SDL2/C</a>
                    <a href="/godot"<?= $current_page === "godot"
                        ? ' class="nav-active"'
                        : "" ?>>&gt;GODOT</a>
                    <a href="/love2d"<?= $current_page === "love2d"
                        ? ' class="nav-active"'
                        : "" ?>>&gt;LÖVE2D</a>
                    <a href="/portmaster"<?= $current_page === "portmaster"
                        ? ' class="nav-active"'
                        : "" ?>>&gt;PORTMASTER</a>
                </div>
            </div>
            <span class="nav-sep">|</span>
            <a href="/hardware"<?= $current_page === "hardware"
                ? ' class="nav-active"'
                : "" ?>>&gt;HARDWARE</a>
            <span class="nav-sep">|</span>
            <a href="/tools"<?= $current_page === "tools"
                ? ' class="nav-active"'
                : "" ?>>&gt;TOOLS</a>
            <span class="nav-sep">|</span>
            <a href="/blog"<?= $current_page === "blog"
                ? ' class="nav-active"'
                : "" ?>>&gt;BLOG</a>
        </div>
        <div class="theme-switcher">
            <span class="filter-label">THEME:</span>
            <div class="filter-select-wrap">
                <select class="filter-select" id="themeSelect">
                    <option value="green">[GREEN]</option>
                    <option value="dark">[DARK]</option>
                    <option value="light">[LIGHT]</option>
                </select>
                <span class="filter-select-label" aria-hidden="true">[GREEN] <span class="filter-arrow">▾</span></span>
            </div>
        </div>
    </div>
</nav>
<div class="terminal">
