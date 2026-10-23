<?php
$page_title = "Galaga";
$current_page = "galaga";
$game_play_url = "retro/games/galaga/";
require "includes/head.php";
?>

<h1>// RETRO GAMES ARCHIVE :: GALAGA</h1>

<h2>// DESCRIPTION & HISTORY</h2>

<div style="display: flex; gap: 2rem; align-items: flex-start; margin-bottom: 2rem; flex-wrap: wrap;">
    <!-- LEFT COLUMN: DESCRIPTION & HISTORY (WIDE) -->
    <div style="flex: 2; min-width: 300px;">
        <div class="intro-block" style="margin-top: 0;">
            <p class="spacer">Released by Namco in 1981 and distributed in North America by Midway, <strong>Galaga</strong> was designed by <strong>Shigeru Yokoyama</strong> as the sequel to Galaxian. Waves of insect-like aliens swoop in and form up at the top of the screen, then peel off to dive at your fighter. Every few waves comes a Challenging Stage, where nothing shoots back and the aim is to hit them all.</p>

            <p>Its best-known trick is the Boss Galaga's tractor beam. Let it capture your fighter, then shoot the Boss down to rescue the ship and fly two fighters side by side, with double the firepower and double the target. Galaga became one of the most popular arcade games ever made and still appears in arcades today.</p>

            <p>This is a native C/SDL2 port for Linux handhelds through PortMaster, Linux desktops, the Steam Deck, Windows and macOS. The arcade board's three Z80 programs and its two Namco MCU programs are rewritten in C, and they match an emulated Galaga board frame for frame, picture and sound. That emulated board is itself checked against MAME. On top of that it adds enhanced graphics presets, pad controls, the DIP switches in an operator menu, and saved high scores.</p>
        </div>
    </div>

    <!-- RIGHT COLUMN: GAME CARD -->
    <div style="flex: 0 0 320px;">
        <div class="grid-games" style="grid-template-columns: 1fr; margin-top: 0;">
            <div class="game-card" data-platforms="arcade" data-rating="5" data-name="GALAGA">
                <div class="game-cover">
                    <a href="<?= $game_play_url ?>" class="cover-link"><img src="images/games/galaga.webp" alt="Galaga" style="width: 100%; height: auto;"></a>
                </div>
                <div class="game-title">GALAGA</div>
                <span class="game-tag">ARCADE</span><span class="game-tag">1-2P</span>
                <div class="game-stars">★★★★★</div>
                <div class="game-platform">HTML5 · Linux · Mac · Windows · PortMaster</div>
                <div class="game-desc">Namco's 1981 shooter, rewritten in C and checked frame by frame against the arcade board. Play it in your browser.</div>
                <a href="<?= $game_play_url ?>" class="game-play">[PLAY]</a>
            </div>
        </div>
    </div>
</div>

<hr class="section-divider">

<h2>// TECHNICAL SPECIFICATIONS</h2>
<div class="command-line">
    <span class="prompt">pilot@namco:~$</span> cat technical_notes.txt<br>
    [ARCADE] Namco, 1981<br>
    [CPU] three Z80s at 3.072 MHz + Namco 51xx and 54xx MCUs (MB88xx)<br>
    [VIDEO] 224x288 portrait tilemap and sprites, with a scrolling starfield<br>
    [SOUND] Namco WSG waveform sound + the 54xx's noise for explosions<br>
    <br>
    [PORT] C11 + SDL2 (2.0.10 or newer), Apache 2.0 source<br>
    [GAME] the ROM's programs rewritten in C, equal frame for frame to an emulated board checked against MAME<br>
    [GFX] presets: classic, classic-crt, crisp, smooth, hd-crisp, hd-smooth, hd-glow, hd-glow-crt<br>
    [SAVE] DIP switches (galaga.cfg) and the top five high scores (galaga.hiscore)<br>
    [ROM] native builds: your own MAME 'galaga' set (galaga.zip); none is included
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
    <span class="prompt">>_</span> Source, builds and release packages are on <a href="https://github.com/monkeyx-net/galaga">GitHub</a>. Read the full write-up on the <a href="/blog/galaga-sdl2">blog</a>.
</p>

<?php require "includes/footer.php"; ?>
