<?php
$page_title = "Space Invaders Part II";
$current_page = "space-invaders-part-ii";
$game_play_url = "retro/games/space-invaders-part-ii/";
require "includes/head.php";
?>

<h1>// RETRO GAMES ARCHIVE :: SPACE INVADERS PART II</h1>

<h2>// DESCRIPTION & HISTORY</h2>

<div style="display: flex; gap: 2rem; align-items: flex-start; margin-bottom: 2rem; flex-wrap: wrap;">
    <!-- LEFT COLUMN: DESCRIPTION & HISTORY (WIDE) -->
    <div style="flex: 2; min-width: 300px;">
        <div class="intro-block" style="margin-top: 0;">
            <p class="spacer">Released by <strong>Taito</strong> in 1979, <strong>Space Invaders Part II</strong> was the sequel to Tomohiro Nishikado's 1978 hit. Midway brought it to the US in 1980 as <em>Space Invaders Deluxe</em>. The goal is the same: hold your laser cannon behind the bunkers and clear the descending fleet before it lands.</p>

            <p>Part II added new tricks. Some invaders split in two when hit, the mystery ship flashes in and out of view, and the best players can enter their name on the high-score table. It was also one of the first arcade games with intermissions: short comic scenes between rounds.</p>

            <p>This version is a faithful re-implementation in Lua for the LÖVE framework. It is based on Ian Murfin's (pixrex) C++ tribute, which draws every sprite and font glyph from pure 1-bit bitmap data. It runs in the browser and on Linux, Mac and Windows.</p>
        </div>
    </div>

    <!-- RIGHT COLUMN: GAME CARD -->
    <div style="flex: 0 0 320px;">
        <div class="grid-games" style="grid-template-columns: 1fr; margin-top: 0;">
            <div class="game-card" data-platforms="arcade" data-rating="5" data-name="SPACE INVADERS PART II">
                <div class="game-cover">
                    <a href="<?= $game_play_url ?>" class="cover-link"><img src="images/games/space_invaders_part_2.webp" alt="Space Invaders Part II" style="width: 100%; height: auto;"></a>
                </div>
                <div class="game-title">SPACE INVADERS PART II</div>
                <span class="game-tag">ARCADE</span><span class="game-tag">1P</span>
                <div class="game-stars">★★★★★</div>
                <div class="game-platform">HTML5 · Linux · Mac · Windows</div>
                <div class="game-desc">A faithful LÖVE re-implementation of Taito's 1979 arcade sequel. Play it in your browser.</div>
                <a href="<?= $game_play_url ?>" class="game-play">[PLAY]</a>
            </div>
        </div>
    </div>
</div>

<hr class="section-divider">

<h2>// TECHNICAL SPECIFICATIONS</h2>
<div class="command-line">
    <span class="prompt">gunner@taito:~$</span> cat technical_notes.txt<br>
    [ARCADE] Taito, 1979 (Midway, 1980, as Space Invaders Deluxe)<br>
    [CPU] Intel 8080<br>
    <br>
    [PORT] Lua + LÖVE, browser build via love.js<br>
    [GFX] sprites and fonts stored as 1-bit bitmaps, coloured at draw time<br>
    [BASED ON] Ian Murfin's (pixrex) C++/SDL2 Space Invaders Part II tribute<br>
    [SAVE] high-score table
</div>

<h2>// CONTROLS</h2>
<div class="command-line">
    <span class="prompt">$ cat controls.txt</span><br>
    MOVE ....... D-pad ... Left Right<br>
    FIRE ....... A, B, X or Y ... Space<br>
    START ...... Start ... Enter<br>
    HIGH SCORES  L1 or R1 ... S<br>
    QUIT ....... Select ... Esc<br>
    <span class="cursor-blink"></span>
</div>

<p>
    <span class="prompt">>_</span> Source is on <a href="https://github.com/monkeyx-net/Space_Invaders_Part_II_LOVE2D">GitHub</a>.
</p>

<?php require "includes/footer.php"; ?>
