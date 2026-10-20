<?php
$page_title = "Manic Miner";
$current_page = "manic-miner";
$game_play_url = "retro/games/manic-miner/";
require "includes/head.php";
?>

<h1>// RETRO GAMES ARCHIVE :: MANIC MINER</h1>

<h2>// DESCRIPTION & HISTORY</h2>

<div style="display: flex; gap: 2rem; align-items: flex-start; margin-bottom: 2rem; flex-wrap: wrap;">
    <!-- LEFT COLUMN: DESCRIPTION & HISTORY (WIDE) -->
    <div style="flex: 2; min-width: 300px;">
        <div class="intro-block" style="margin-top: 0;">
            <p class="spacer">Released in 1983 for the Sinclair ZX Spectrum, <strong>Manic Miner</strong> is a landmark in home computing history. Written by the legendary <strong>Matthew Smith</strong> and published by Bug-Byte (later Software Projects), it was the first game in the "Miner Willy" series.</p>

            <p>The game was inspired by the arcade title <em>Miner 2049er</em>, but Smith added a unique British surrealism and high-stakes platforming that made it an instant classic. Players guide Miner Willy through 20 increasingly difficult caverns, collecting keys to escape before his air supply runs out.</p>

            <p>This is a C/SDL2 port based on the original ZX Spectrum version, started by fawtytoo. It adds per-pixel colouring with no colour clash, polyphonic music, stereo sound effects and fixes for the original's bugs. It runs in the browser, with touch controls on phones and tablets, and on Linux, Mac and Windows. Try the <a href="retro/games/manic-miner/editor/">Construction Kit</a> to build your own caverns.</p>
        </div>
    </div>

    <!-- RIGHT COLUMN: GAME CARD -->
    <div style="flex: 0 0 320px;">
        <div class="grid-games" style="grid-template-columns: 1fr; margin-top: 0;">
            <div class="game-card" data-platforms="platform" data-rating="5" data-name="MANIC MINER">
                <div class="game-cover">
                    <a href="<?= $game_play_url ?>" class="cover-link"><img src="images/games/manic_miner.webp" alt="Manic Miner" style="width: 100%; height: auto;"></a>
                </div>
                <div class="game-title">MANIC MINER</div>
                <span class="game-tag">PLATFORM</span><span class="game-tag">1P</span>
                <div class="game-stars">★★★★★</div>
                <div class="game-platform">HTML5 · Linux · Mac · Windows</div>
                <div class="game-desc">One of the best original platform games, by Matthew Smith. Play it in your browser.</div>
                <a href="<?= $game_play_url ?>" class="game-play">[PLAY]</a>
            </div>
        </div>
    </div>
</div>

<hr class="section-divider">

<h2>// TECHNICAL SPECIFICATIONS</h2>
<div class="command-line">
    <span class="prompt">willy@spectrum:~$</span> cat technical_notes.txt<br>
    [SYSTEM] Sinclair ZX Spectrum 48K, 1983<br>
    [CPU] Zilog Z80A @ 3.5 MHz<br>
    [LANGUAGE] 100% Z80 Assembly<br>
    [GFX] Tiled 8x8 character blocks. Attributes (color) applied per block.<br>
    [AUDIO] "The Blue Danube" played via the internal 1-bit beeper.<br>
    [MEM] Fits entirely within 48KB of RAM, including all 20 levels.<br>
    <br>
    [PORT] C + SDL2, based on the original ZX Spectrum version<br>
    [GFX] per-pixel colouring (no colour clash), 16-colour palette, redrawn title screen<br>
    [AUDIO] polyphonic music, stereo sound effects through a square-wave generator<br>
    [FIXES] original bugs fixed, such as landing in a solid wall at the end of a jump<br>
    [EDITOR] Manic Miner Construction Kit, in the browser
</div>

<h2>// CONTROLS</h2>
<div class="command-line">
    <span class="prompt">$ cat controls.txt</span><br>
    MOVE ....... Left Right (touch: ◀ ▶)<br>
    JUMP ....... Space (touch: ▲)<br>
    START ...... Enter (touch: ⏎)<br>
    PAUSE ...... Tab (touch: ❚❚)<br>
    MUSIC ...... Alt<br>
    QUIT ....... Esc (touch: ✕)<br>
    <span class="cursor-blink"></span>
</div>

<p>
    <span class="prompt">>_</span> The game's engine was revolutionary for its time, managing to play music while simultaneously processing sprite movements and collision detection—a feat previously thought difficult on the Spectrum's single-tasking CPU architecture.
</p>

<p>
    <span class="prompt">>_</span> Source is on <a href="https://github.com/monkeyx-net/ManicMiner">GitHub</a>. Build your own caverns in the <a href="retro/games/manic-miner/editor/">Construction Kit</a>.
</p>

<?php require "includes/footer.php"; ?>
