<?php
$page_title = "Galaxian";
$current_page = "galaxian";
$game_play_url = "retro/games/galaxian/";
require "includes/head.php";
?>

<h1>// RETRO GAMES ARCHIVE :: GALAXIAN</h1>

<h2>// DESCRIPTION & HISTORY</h2>

<div style="display: flex; gap: 2rem; align-items: flex-start; margin-bottom: 2rem; flex-wrap: wrap;">
    <!-- LEFT COLUMN: DESCRIPTION & HISTORY (WIDE) -->
    <div style="flex: 2; min-width: 300px;">
        <div class="intro-block" style="margin-top: 0;">
            <p class="spacer">Released by Namco in 1979 and distributed in North America by Midway, <strong>Galaxian</strong> was designed by <strong>Kazunori Sawano</strong>. A swarm of aliens sways at the top of the screen, and small groups break away to dive at your Galaxip, firing as they come. The yellow Flagships dive with red escorts, and shooting a Flagship after its escorts scores the most.</p>

            <p>Built as Namco's answer to Space Invaders, it was one of the first arcade games with full-colour RGB graphics, sprites and a scrolling starfield. In 1981 its sequel, <a href="/galaga">Galaga</a>, followed.</p>

            <p>This is a native C/SDL2 port for Linux handhelds through PortMaster, Linux desktops, the Steam Deck, Windows and macOS. The ROM program is rewritten in C routine by routine, and it matches an emulated Galaxian board frame for frame. That emulated board is itself checked against MAME cycle for cycle and pixel for pixel. On top of that it adds enhanced graphics presets, pad controls, the DIP switches in an operator menu, and a saved high score.</p>
        </div>
    </div>

    <!-- RIGHT COLUMN: GAME CARD -->
    <div style="flex: 0 0 320px;">
        <div class="grid-games" style="grid-template-columns: 1fr; margin-top: 0;">
            <div class="game-card" data-platforms="arcade" data-rating="5" data-name="GALAXIAN">
                <div class="game-cover">
                    <a href="<?= $game_play_url ?>" class="cover-link"><img src="images/games/galaxian.webp" alt="Galaxian" style="width: 100%; height: auto;"></a>
                </div>
                <div class="game-title">GALAXIAN</div>
                <span class="game-tag">ARCADE</span><span class="game-tag">1-2P</span>
                <div class="game-stars">★★★★★</div>
                <div class="game-platform">HTML5 · Linux · Mac · Windows · PortMaster</div>
                <div class="game-desc">Namco's 1979 swarm shooter, rewritten in C and checked frame by frame against the arcade board. Play it in your browser.</div>
                <a href="<?= $game_play_url ?>" class="game-play">[PLAY]</a>
            </div>
        </div>
    </div>
</div>

<hr class="section-divider">

<h2>// TECHNICAL SPECIFICATIONS</h2>
<div class="command-line">
    <span class="prompt">pilot@namco:~$</span> cat technical_notes.txt<br>
    [ARCADE] Namco, 1979<br>
    [CPU] Z80 at 3.072 MHz<br>
    [VIDEO] 224x256 portrait tilemap with per-column scroll, sprites, shells and a starfield<br>
    [SOUND] discrete circuit: tone, swarm, hit and fire<br>
    <br>
    [PORT] C11 + SDL2 (2.0.10 or newer), Apache 2.0 source<br>
    [GAME] the ROM program rewritten in C, equal frame for frame to an emulated board checked against MAME<br>
    [GFX] presets: classic, classic-crt, crisp, smooth, hd-crisp, hd-smooth, hd-glow, hd-glow-crt<br>
    [SAVE] DIP switches and cabinet (galaxian.cfg) and the high score (galaxian.hiscore)<br>
    [ROM] native builds: your own MAME 'galaxian' set (galaxian.zip); none is included
</div>

<h2>// CONTROLS</h2>
<div class="command-line">
    <span class="prompt">$ cat controls.txt</span><br>
    LEFT/RIGHT . left stick / D-pad ... Left Right<br>
    FIRE ....... A or B ... Space or Ctrl<br>
    COIN ....... Select ... 5<br>
    1P START ... Start ... 1 or Enter<br>
    2P START ... L1 + Start ... 2<br>
    GRAPHICS ... Select + L1 ... F3 (F4 glow, F5 scanlines)<br>
    OPERATOR ... Select + R1 ... F2<br>
    QUIT ....... hold Select + Start ... Esc<br>
    <span class="cursor-blink"></span>
</div>

<p>
    <span class="prompt">>_</span> Source, builds and release packages are on <a href="https://github.com/monkeyx-net/galaxian">GitHub</a>. Read the full write-up on the <a href="/blog/galaxian-sdl2">blog</a>.
</p>

<?php require "includes/footer.php"; ?>
