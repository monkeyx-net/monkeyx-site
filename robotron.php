<?php
$page_title = "Robotron: 2084";
$current_page = "robotron";
$game_play_url = "retro/games/robotron/";
require "includes/head.php";
?>

<h1>// RETRO GAMES ARCHIVE :: ROBOTRON: 2084</h1>

<h2>// DESCRIPTION & HISTORY</h2>

<div style="display: flex; gap: 2rem; align-items: flex-start; margin-bottom: 2rem; flex-wrap: wrap;">
    <!-- LEFT COLUMN: DESCRIPTION & HISTORY (WIDE) -->
    <div style="flex: 2; min-width: 300px;">
        <div class="intro-block" style="margin-top: 0;">
            <p class="spacer">Released by Williams Electronics in 1982, <strong>Robotron: 2084</strong> was created by <strong>Eugene Jarvis</strong> and <strong>Larry DeMar</strong>, the team behind Defender. Robots have wiped out humanity, and you play the last hero, sent to save the last human family from wave after wave of Grunts, Hulks, Brains and Enforcers.</p>

            <p>One joystick moves you and the other fires in any direction. That twin-stick design made Robotron one of the most intense games of the golden age, and it influenced shooters for decades.</p>

            <p>This is a native C/SDL2 rebuild by Steven Hatch for Linux handhelds through PortMaster, Linux desktops, the Steam Deck, Windows and the browser. It is ported from his <a href="https://robotron.hatch.org/">robotron.hatch.org</a> web remake, whose waves, enemy pacing, spawn positions and random number generator were traced in the arcade ROM and checked against MAME.</p>
        </div>
    </div>

    <!-- RIGHT COLUMN: GAME CARD -->
    <div style="flex: 0 0 320px;">
        <div class="grid-games" style="grid-template-columns: 1fr; margin-top: 0;">
            <div class="game-card" data-platforms="arcade" data-rating="5" data-name="ROBOTRON: 2084">
                <div class="game-cover">
                    <a href="<?= $game_play_url ?>" class="cover-link"><img src="images/games/robotron.webp" alt="Robotron: 2084" style="width: 100%; height: auto;"></a>
                </div>
                <div class="game-title">ROBOTRON: 2084</div>
                <span class="game-tag">ARCADE</span><span class="game-tag">1-2P</span>
                <div class="game-stars">★★★★★</div>
                <div class="game-platform">HTML5 · Linux · Windows · PortMaster</div>
                <div class="game-desc">Williams' 1982 twin-stick classic, rebuilt in C with waves traced from the arcade ROM. Play it in your browser.</div>
                <a href="<?= $game_play_url ?>" class="game-play">[PLAY]</a>
            </div>
        </div>
    </div>
</div>

<hr class="section-divider">

<h2>// TECHNICAL SPECIFICATIONS</h2>
<div class="command-line">
    <span class="prompt">hero@williams:~$</span> cat technical_notes.txt<br>
    [ARCADE] Williams, 1982<br>
    [CPU] Motorola 6809 + 6808 sound board<br>
    [VIDEO] bitmap display, 16 colours on screen, Williams blitter chips<br>
    <br>
    [PORT] C11 + SDL2 (2.0.10 or newer), Apache 2.0 source<br>
    [TIMING] fixed 60 Hz, frame-quantised like the arcade<br>
    [TESTS] ROM PRNG checked against 1000 outputs captured in MAME, all 40 waves played through<br>
    [GFX] enhanced presets, glow and CRT scanlines (F3/F4/F5)<br>
    [ROM] native builds: data tables extracted from your own MAME 'robotron' set
</div>

<h2>// CONTROLS</h2>
<div class="command-line">
    <span class="prompt">$ cat controls.txt</span><br>
    MOVE ....... left stick / D-pad ... W A S D<br>
    FIRE ....... right stick, or A/B/X/Y (two together for diagonals) ... arrow keys<br>
    1P START ... Start ... Enter<br>
    2P START ... L1 + Start<br>
    OPERATOR ... Select + R1 (attract screens) ... F2<br>
    GRAPHICS ... Select + L1 ... F3 (F4 glow, F5 scanlines)<br>
    QUIT ....... hold Select + Start ... Esc<br>
    <span class="cursor-blink"></span>
</div>

<p>
    <span class="prompt">>_</span> Source is on the <a href="https://github.com/monkeyx-net/robotron/tree/sdl2">sdl2 branch on GitHub</a>. Read the full write-up on the <a href="/blog/robotron-sdl2">blog</a>.
</p>

<?php require "includes/footer.php"; ?>
