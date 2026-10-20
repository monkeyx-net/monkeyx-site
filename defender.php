<?php
$page_title = "Defender";
$current_page = "defender";
$game_play_url = "retro/games/defender/";
require "includes/head.php";
?>

<h1>// RETRO GAMES ARCHIVE :: DEFENDER</h1>

<h2>// DESCRIPTION & HISTORY</h2>

<div style="display: flex; gap: 2rem; align-items: flex-start; margin-bottom: 2rem; flex-wrap: wrap;">
    <!-- LEFT COLUMN: DESCRIPTION & HISTORY (WIDE) -->
    <div style="flex: 2; min-width: 300px;">
        <div class="intro-block" style="margin-top: 0;">
            <p class="spacer">Released by Williams Electronics in 1981, <strong>Defender</strong> was created by <strong>Eugene Jarvis</strong> and <strong>Larry DeMar</strong>. You fly a ship over a planet's surface, shooting down alien Landers before they carry off the humanoids. Any humanoid that gets taken is turned into a Mutant. Lose them all and the planet explodes.</p>

            <p>It was one of the first games with a world larger than the screen. A long-range scanner at the top shows the whole planet. Defender was famous for its difficulty: a joystick and five buttons for thrust, reverse, fire, smart bomb and hyperspace. Even so, it became one of Williams' best-selling arcade machines.</p>

            <p>This is a native C/SDL2 port for Linux handhelds through PortMaster, Linux desktops, the Steam Deck and Windows. It runs the arcade ROM's own code on an emulated Williams board, checked against MAME instruction for instruction. On top of that it adds enhanced graphics presets, pad controls and saving of the arcade's settings and high scores.</p>
        </div>
    </div>

    <!-- RIGHT COLUMN: GAME CARD -->
    <div style="flex: 0 0 320px;">
        <div class="grid-games" style="grid-template-columns: 1fr; margin-top: 0;">
            <div class="game-card" data-platforms="arcade" data-rating="5" data-name="DEFENDER">
                <div class="game-cover">
                    <a href="<?= $game_play_url ?>" class="cover-link"><img src="images/games/defender.webp" alt="Defender" style="width: 100%; height: auto;"></a>
                </div>
                <div class="game-title">DEFENDER</div>
                <span class="game-tag">ARCADE</span><span class="game-tag">1-2P</span>
                <div class="game-stars">★★★★★</div>
                <div class="game-platform">HTML5 · Linux · Windows · PortMaster</div>
                <div class="game-desc">Williams' 1981 side-scrolling shooter, running on an emulated arcade board. Play it in your browser.</div>
                <a href="<?= $game_play_url ?>" class="game-play">[PLAY]</a>
            </div>
        </div>
    </div>
</div>

<hr class="section-divider">

<h2>// TECHNICAL SPECIFICATIONS</h2>
<div class="command-line">
    <span class="prompt">pilot@williams:~$</span> cat technical_notes.txt<br>
    [ARCADE] Williams, 1981<br>
    [CPU] Motorola 6809 main board with banked ROM + 6808 sound board<br>
    [VIDEO] bitmap display, 16 colours on screen<br>
    <br>
    [PORT] C11 + SDL2 (2.0.10 or newer), Apache 2.0 source<br>
    [EMU] ROM code on an emulated board, checked against MAME instruction traces<br>
    [GFX] presets: classic, classic-crt, crisp, smooth, hd-crisp, hd-smooth, hd-glow, hd-glow-crt<br>
    [SAVE] arcade CMOS (settings and high scores) saved to disk<br>
    [ROM] native builds: your own MAME 'defender' set (defender.zip, red label); none is included
</div>

<h2>// CONTROLS</h2>
<div class="command-line">
    <span class="prompt">$ cat controls.txt</span><br>
    UP/DOWN .... left stick / D-pad ... Up Down<br>
    FIRE ....... A ... Space or Ctrl<br>
    THRUST ..... B or R1 ... X or Alt<br>
    REVERSE .... L1 ... Z<br>
    SMART BOMB . X ... C<br>
    HYPERSPACE . Y ... V or Shift<br>
    COIN ....... Select ... 5<br>
    1P START ... Start ... 1 or Enter<br>
    2P START ... L1 + Start ... 2<br>
    GRAPHICS ... Select + L1 ... F3 (F4 glow, F5 scanlines)<br>
    QUIT ....... hold Select + Start ... Esc<br>
    <span class="cursor-blink"></span>
</div>

<p>
    <span class="prompt">>_</span> Source, builds and release packages are on <a href="https://github.com/monkeyx-net/defender">GitHub</a>. Read the full write-up on the <a href="/blog/defender-sdl2">blog</a>.
</p>

<?php require "includes/footer.php"; ?>
