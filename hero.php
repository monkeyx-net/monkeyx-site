<?php
$page_title = "H.E.R.O.";
$current_page = "hero";
$game_play_url = "retro/games/hero/";
require "includes/head.php";
?>

<h1>// RETRO GAMES ARCHIVE :: H.E.R.O.</h1>

<h2>// DESCRIPTION & HISTORY</h2>

<div style="display: flex; gap: 2rem; align-items: flex-start; margin-bottom: 2rem; flex-wrap: wrap;">
    <!-- LEFT COLUMN: DESCRIPTION & HISTORY (WIDE) -->
    <div style="flex: 2; min-width: 300px;">
        <div class="intro-block" style="margin-top: 0;">
            <p class="spacer"><strong>H.E.R.O.</strong> (Helicopter Emergency Rescue Operation) was designed by <strong>John Van Ryzin</strong> for <strong>Activision</strong> and released in 1984, first on the Atari 2600. You play Roderick Hero, who flies down mine shafts with a backpack propeller to rescue trapped miners. A helmet laser shoots spiders, bats and moths. Dynamite blasts through walls, as long as you get clear in time. Touching a lantern puts out the lights.</p>

            <p>Power drains as you go, and whatever is left counts towards your score when you reach the miner. Twenty levels lead deeper into the mine, past magma walls, rafts on underground rivers and tentacles reaching out of the rock, before PRO mode. The Commodore 64 version was adapted by The Softworks.</p>

            <p>This is a native C/SDL2 port of the C64 version for Linux handhelds through PortMaster, Linux desktops, the Steam Deck, Windows and macOS. All 155 routines of the original 6502 program are translated to C and checked against the original code on real game states. All 256 screens of the 20 levels build identically. The C64's VIC-II and SID chips are modelled, and there's an optional hi-res picture.</p>
        </div>
    </div>

    <!-- RIGHT COLUMN: GAME CARD -->
    <div style="flex: 0 0 320px;">
        <div class="grid-games" style="grid-template-columns: 1fr; margin-top: 0;">
            <div class="game-card" data-platforms="platform" data-rating="5" data-name="H.E.R.O.">
                <div class="game-cover">
                    <a href="<?= $game_play_url ?>" class="cover-link"><img src="images/games/hero.webp" alt="H.E.R.O." style="width: 100%; height: auto;"></a>
                </div>
                <div class="game-title">H.E.R.O.</div>
                <span class="game-tag">PLATFORM</span><span class="game-tag">1P</span>
                <div class="game-stars">★★★★★</div>
                <div class="game-platform">HTML5 · Linux · Mac · Windows · PortMaster</div>
                <div class="game-desc">Activision's 1984 mine-rescue classic, the C64 version translated to C and checked against the original 6502 code. Play it in your browser.</div>
                <a href="<?= $game_play_url ?>" class="game-play">[PLAY]</a>
            </div>
        </div>
    </div>
</div>

<hr class="section-divider">

<h2>// TECHNICAL SPECIFICATIONS</h2>
<div class="command-line">
    <span class="prompt">hero@activision:~$</span> cat technical_notes.txt<br>
    [ORIGINAL] Activision, 1984; Commodore 64 version adapted by The Softworks<br>
    [CPU] 6502 (6510) program, a cartridge-style image at $8000-$BFFF after the tape loader's decryption<br>
    [VIDEO] VIC-II: 320x200, multicolour and extended-colour text, sprites, raster splits<br>
    [SOUND] SID: 3 voices with ADSR and filter<br>
    <br>
    [PORT] C11 + SDL2 (2.0.10 or newer), Apache 2.0 source<br>
    [GAME] all 155 routines in C, checked against the original 6502 code; all 256 screens of the 20 levels identical<br>
    [GFX] C64 picture or hi-res (Scale2x); the play area, or the whole frame with its border<br>
    [TAPE] native builds: your own C64 tape image (H.E.R.O.tap, the Activision cassette); none is included
</div>

<h2>// CONTROLS</h2>
<div class="command-line">
    <span class="prompt">$ cat controls.txt</span><br>
    MOVE / FLY . left stick / D-pad ... arrows (down: dynamite)<br>
    LASER ...... A or B ... Ctrl, Z or Space<br>
    START ...... Start ... F1<br>
    LEVEL ...... Back ... F3 (start at level 1, 5, 9, 13 or PRO)<br>
    PAUSE ...... Y ... P<br>
    HI-RES ..... L1 ... F2<br>
    BORDER ..... R1 ... F4<br>
    QUIT ....... PortMaster hotkey ... Esc<br>
    <span class="cursor-blink"></span>
</div>

<p>
    <span class="prompt">>_</span> Source, builds and release packages are on <a href="https://github.com/monkeyx-net/hero">GitHub</a>. Read the full write-up on the <a href="/blog/hero-sdl2">blog</a>.
</p>

<?php require "includes/footer.php"; ?>
