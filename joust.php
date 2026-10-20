<?php
$page_title = "Joust";
$current_page = "joust";
$game_play_url = "https://github.com/monkeyx-net/joust/releases";
require "includes/head.php";
?>

<h1>// RETRO GAMES ARCHIVE :: JOUST</h1>

<h2>// DESCRIPTION & HISTORY</h2>

<div style="display: flex; gap: 2rem; align-items: flex-start; margin-bottom: 2rem; flex-wrap: wrap;">
    <!-- LEFT COLUMN: DESCRIPTION & HISTORY (WIDE) -->
    <div style="flex: 2; min-width: 300px;">
        <div class="intro-block" style="margin-top: 0;">
            <p class="spacer">Released by Williams Electronics in 1982, <strong>Joust</strong> was designed by <strong>John Newcomer</strong>. You ride a flying ostrich, and you beat the enemy knights on their buzzards by hitting them from above with your lance. Defeated riders leave an egg behind, which hatches into a new knight if you don't collect it in time.</p>

            <p>Two players can play at once, as a team or against each other, and the game hands out bonuses for both. Each wave adds new dangers: platforms that burn away, a lava troll that grabs riders who fly too low, and the nearly unbeatable pterodactyl.</p>

            <p>This is a native C/SDL2 port for Linux handhelds through PortMaster, Linux desktops, the Steam Deck and Windows. It runs the arcade ROM's own code on an emulated Williams board, checked against MAME cycle for cycle. On top of that it adds enhanced graphics presets, pad controls and saving of the arcade's settings and high scores.</p>
        </div>
    </div>

    <!-- RIGHT COLUMN: GAME CARD -->
    <div style="flex: 0 0 320px;">
        <div class="grid-games" style="grid-template-columns: 1fr; margin-top: 0;">
            <div class="game-card" data-platforms="arcade" data-rating="5" data-name="JOUST">
                <div class="game-cover">
                    <a href="<?= $game_play_url ?>" class="cover-link"><img src="images/games/joust.webp" alt="Joust" style="width: 100%; height: auto;"></a>
                </div>
                <div class="game-title">JOUST</div>
                <span class="game-tag">ARCADE</span><span class="game-tag">1-2P</span>
                <div class="game-stars">★★★★★</div>
                <div class="game-platform">Linux · Windows · PortMaster</div>
                <div class="game-desc">Williams' 1982 ostrich-riding classic, running on an emulated arcade board. Bring your own MAME ROM set.</div>
                <a href="<?= $game_play_url ?>" class="game-play">[DOWNLOAD]</a>
            </div>
        </div>
    </div>
</div>

<hr class="section-divider">

<h2>// TECHNICAL SPECIFICATIONS</h2>
<div class="command-line">
    <span class="prompt">rider@williams:~$</span> cat technical_notes.txt<br>
    [ARCADE] Williams, 1982<br>
    [CPU] Motorola 6809 main board + 6808 sound board<br>
    [VIDEO] bitmap display, 16 colours on screen, Williams blitter chips<br>
    <br>
    [PORT] C11 + SDL2 (2.0.10 or newer), Apache 2.0 source<br>
    [EMU] ROM code on an emulated board, checked against MAME cycle for cycle<br>
    [GFX] presets: classic, classic-crt, crisp, smooth, hd-crisp, hd-smooth, hd-glow, hd-glow-crt<br>
    [SAVE] arcade CMOS (settings and high scores) saved to disk<br>
    [ROM] your own MAME 'joust' set (joust.zip); none is included
</div>

<h2>// CONTROLS</h2>
<div class="command-line">
    <span class="prompt">$ cat controls.txt</span><br>
    MOVE ....... left stick / D-pad ... Left Right (P2: A D)<br>
    FLAP ....... A, B, X or Y ... Space or Ctrl (P2: W)<br>
    COIN ....... Select ... 5<br>
    1P START ... Start ... 1 or Enter<br>
    2P START ... L1 + Start ... 2<br>
    GRAPHICS ... Select + L1 ... F3 (F4 glow, F5 scanlines)<br>
    QUIT ....... hold Select + Start ... Esc<br>
    <span class="cursor-blink"></span>
</div>

<p>
    <span class="prompt">>_</span> Source, builds and release packages are on <a href="https://github.com/monkeyx-net/joust">GitHub</a>. Read the full write-up on the <a href="/blog/joust-sdl2">blog</a>.
</p>

<?php require "includes/footer.php"; ?>
