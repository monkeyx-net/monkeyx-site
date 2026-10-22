<?php
$page_title = "Jet Set Willy";
$current_page = "jet-set-willy";
$game_play_url = "retro/games/jet-set-willy/";
require "includes/head.php";
?>

<h1>// RETRO GAMES ARCHIVE :: JET SET WILLY</h1>

<h2>// DESCRIPTION & HISTORY</h2>

<div style="display: flex; gap: 2rem; align-items: flex-start; margin-bottom: 2rem; flex-wrap: wrap;">
    <!-- LEFT COLUMN: DESCRIPTION & HISTORY (WIDE) -->
    <div style="flex: 2; min-width: 300px;">
        <div class="intro-block" style="margin-top: 0;">
            <p class="spacer">Released in 1984 for the Sinclair ZX Spectrum, <strong>Jet Set Willy</strong> is the sequel to <a href="manic-miner">Manic Miner</a>. Written by <strong>Matthew Smith</strong> and published by Software Projects, it was the second game in the "Miner Willy" series.</p>

            <p>Willy has made his fortune and bought a huge mansion, but his housewarming party has left it in a mess. Before he can go to bed, his housekeeper Maria wants every item in the house tidied away. Players guide Willy through 60 rooms of the mansion and its grounds, collecting every item before midnight so Maria lets him into the Master Bedroom.</p>

            <p>This is the <strong>Jet Set Willy Construction Kit</strong>, a C/SDL2 port built on Steve Clark's (fawtytoo) SDL2 version of the original ZX Spectrum game. It adds a hi-res 512×384 screen, OGG music and sound effects, TTF fonts made from the original ones, five save-state slots, replay recording, an options menu, a demo mode and controller support. All 60 rooms are stored in a JSON file you can edit in the browser with the <a href="retro/games/jet-set-willy/editor/">level editor</a>. It runs in the browser, with touch controls on phones and tablets, and on Linux, Mac and Windows.</p>
        </div>
    </div>

    <!-- RIGHT COLUMN: GAME CARD -->
    <div style="flex: 0 0 320px;">
        <div class="grid-games" style="grid-template-columns: 1fr; margin-top: 0;">
            <div class="game-card" data-platforms="platform" data-rating="5" data-name="JET SET WILLY">
                <div class="game-cover">
                    <a href="<?= $game_play_url ?>" class="cover-link"><img src="images/games/jet_set_willy.webp" alt="Jet Set Willy" style="width: 100%; height: auto;"></a>
                </div>
                <div class="game-title">JET SET WILLY</div>
                <span class="game-tag">PLATFORM</span><span class="game-tag">1P</span>
                <div class="game-stars">★★★★★</div>
                <div class="game-platform">HTML5 · Linux · Mac · Windows</div>
                <div class="game-desc">The sequel to Manic Miner, by Matthew Smith. Play it in your browser.</div>
                <a href="<?= $game_play_url ?>" class="game-play">[PLAY]</a>
            </div>
        </div>
    </div>
</div>

<hr class="section-divider">

<h2>// TECHNICAL SPECIFICATIONS</h2>
<div class="command-line">
    <span class="prompt">willy@spectrum:~$</span> cat technical_notes.txt<br>
    [SYSTEM] Sinclair ZX Spectrum 48K, 1984<br>
    [CPU] Zilog Z80A @ 3.5 MHz<br>
    [LANGUAGE] 100% Z80 Assembly<br>
    [GFX] Tiled 8x8 character blocks. Attributes (color) applied per block.<br>
    [AUDIO] Internal 1-bit beeper.<br>
    [MEM] Fits entirely within 48KB of RAM, including all 60 rooms.<br>
    <br>
    [PORT] C99 + SDL2, hard fork of Steve Clark's SDL2 port (zlib licence)<br>
    [GFX] hi-res 512×384 screen with 32×32 PNG sprites; 16-colour palette, per-pixel colouring (no colour clash)<br>
    [FONTS] SDL_ttf fonts made from the original bitmap fonts<br>
    [AUDIO] SDL_mixer, OGG music and sound effects rendered from the original synth<br>
    [LEVELS] all 60 rooms, NPCs, sprites and the rope in levels.json<br>
    [SAVE] 5 save-state slots, replay recording, best item count and finishing time<br>
    [EDITOR] browser room editor: tiles, items, rope, NPCs, sprite designer<br>
    [BUILDS] Linux x64/arm64, macOS arm64, Windows x64, WebAssembly
</div>

<h2>// CONTROLS</h2>
<div class="command-line">
    <span class="prompt">$ cat controls.txt</span><br>
    MOVE ....... D-pad / left stick ... Left Right (touch: ◀ ▶)<br>
    JUMP ....... A or B ... Space (touch: ▲)<br>
    START ...... A or Start ... Enter (touch: ⏎)<br>
    PAUSE ...... X or LB ... Tab (touch: ❚❚)<br>
    MUSIC ...... Y or RB ... Alt<br>
    SAVE STATE . U (cycles slots 1-5)<br>
    REPLAY ..... R (start / stop recording)<br>
    TITLE ...... L load game, O options<br>
    MENUS ...... Up Down choose, Enter select, Delete erase<br>
    FULLSCREEN . F11<br>
    BACK ....... B or Back ... Esc (touch: ✕)<br>
    <span class="cursor-blink"></span>
</div>

<p>
    <span class="prompt">>_</span> The original shipped with a colour-code card as copy protection, and with bugs that made it impossible to finish until Software Projects published POKEs to fix them. This port drops the copy-protection screen.
</p>

<p>
    <span class="prompt">>_</span> Source, builds and release packages are on <a href="https://github.com/monkeyx-net/JetSetWilly-Consrtuction">GitHub</a>. Build your own rooms in the <a href="retro/games/jet-set-willy/editor/">level editor</a>, or read the <a href="/blog/jet-set-willy">release post</a>.
</p>

<?php require "includes/footer.php"; ?>
