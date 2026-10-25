<?php
$page_title = "Star Force";
$current_page = "starforce";
$game_play_url = "retro/games/starforce/";
require "includes/head.php";
?>

<h1>// RETRO GAMES ARCHIVE :: STAR FORCE</h1>

<h2>// DESCRIPTION & HISTORY</h2>

<div style="display: flex; gap: 2rem; align-items: flex-start; margin-bottom: 2rem; flex-wrap: wrap;">
    <!-- LEFT COLUMN: DESCRIPTION & HISTORY (WIDE) -->
    <div style="flex: 2; min-width: 300px;">
        <div class="intro-block" style="margin-top: 0;">
            <p class="spacer">Released by <strong>Tehkan</strong> (later Tecmo) in 1984, <strong>Star Force</strong> is a vertically scrolling shooter. You fly the Final Star over space and huge floating fortresses, shooting fighters in the air and targets on the ground with a single fire button. The areas are named after the Greek alphabet, starting at ALPHA-AREA.</p>

            <p>Fast, simple and full of hidden bonus targets, it became a score-attack favourite. Its Famicom version, published by Hudson Soft in 1985, was the game for Hudson's first nationwide caravan competition in Japan.</p>

            <p>This is a native C/SDL2 port for Linux handhelds through PortMaster, Linux desktops, the Steam Deck, Windows and macOS. Both of the board's Z80 programs are rewritten in C, and they match an emulated Star Force board frame for frame, picture and sound. That emulated board is itself checked against MAME. On top of that it adds enhanced graphics presets, pad controls with a pad for each player, the DIP switches in an operator menu, and the saved BEST PLAYERS table.</p>
        </div>
    </div>

    <!-- RIGHT COLUMN: GAME CARD -->
    <div style="flex: 0 0 320px;">
        <div class="grid-games" style="grid-template-columns: 1fr; margin-top: 0;">
            <div class="game-card" data-platforms="arcade" data-rating="5" data-name="STAR FORCE">
                <div class="game-cover">
                    <a href="<?= $game_play_url ?>" class="cover-link"><img src="images/games/starforce.webp" alt="Star Force" style="width: 100%; height: auto;"></a>
                </div>
                <div class="game-title">STAR FORCE</div>
                <span class="game-tag">ARCADE</span><span class="game-tag">1-2P</span>
                <div class="game-stars">★★★★★</div>
                <div class="game-platform">HTML5 · Linux · Mac · Windows · PortMaster</div>
                <div class="game-desc">Tehkan's 1984 vertical shooter, rewritten in C and checked frame by frame against the arcade board. Play it in your browser.</div>
                <a href="<?= $game_play_url ?>" class="game-play">[PLAY]</a>
            </div>
        </div>
    </div>
</div>

<hr class="section-divider">

<h2>// TECHNICAL SPECIFICATIONS</h2>
<div class="command-line">
    <span class="prompt">pilot@tehkan:~$</span> cat technical_notes.txt<br>
    [ARCADE] Tehkan, 1984<br>
    [CPU] Z80 at 4 MHz + sound Z80 at 2 MHz with a Z80 PIO and CTC<br>
    [VIDEO] 224x256 portrait, three scrolling background layers, foreground and sprites, 59.19 Hz<br>
    [SOUND] three SN76489A chips + an 8-bit waveform DAC<br>
    <br>
    [PORT] C11 + SDL2 (2.0.10 or newer), Apache 2.0 source<br>
    [GAME] both Z80 programs rewritten in C, equal frame for frame to an emulated board checked against MAME<br>
    [GFX] presets: classic, classic-crt, crisp, smooth, hd-crisp, hd-smooth, hd-glow, hd-glow-crt<br>
    [SAVE] DIP switches (starforce.cfg) and the BEST PLAYERS table (starforce.hiscore)<br>
    [ROM] native builds: your own MAME 'starforc' set (starforc.zip, the parent set); none is included
</div>

<h2>// CONTROLS</h2>
<div class="command-line">
    <span class="prompt">$ cat controls.txt</span><br>
    MOVE ....... left stick / D-pad ... arrows<br>
    FIRE ....... A or B ... Space or Ctrl<br>
    COIN ....... Select ... 5 (6 for the second slot)<br>
    1P START ... Start ... 1 or Enter<br>
    2P START ... L1 + Start ... 2<br>
    GRAPHICS ... Select + L1 ... F3 (F4 glow, F5 scanlines)<br>
    OPERATOR ... Select + R1 ... F2<br>
    QUIT ....... hold Select + Start ... Esc<br>
    <span class="cursor-blink"></span>
</div>

<p>
    <span class="prompt">>_</span> Source and builds are on <a href="https://github.com/monkeyx-net/starforce">GitHub</a>. Read the full write-up on the <a href="/blog/starforce-sdl2">blog</a>.
</p>

<?php require "includes/footer.php"; ?>
