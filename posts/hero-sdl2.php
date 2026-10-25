<?php
$post_meta = [
    'title'   => 'Released: H.E.R.O. SDL2 Port',
    'date'    => '2026-10-25',
    'slug'    => 'hero-sdl2',
    'tags'    => ['sdl2', 'c', 'games'],
    'image'   => 'images/blog/hero-sdl2.webp',
    'summary' => 'H.E.R.O. is now in the games archive: a native C/SDL2 port of the Commodore 64 version of Activision\'s 1984 classic, every routine of the 6502 program translated to C, for Linux handhelds, desktops, Windows and macOS.',
];
?>
<p><strong>H.E.R.O.</strong> is now in the <a href="/games">games archive</a>. It's a native C11/SDL2 port of the Commodore 64 version of Activision's 1984 game for Linux handhelds through PortMaster, Linux desktops, the Steam Deck, Windows, macOS and the browser. Release 0.1.0 is <a href="https://github.com/monkeyx-net/hero/releases">on GitHub</a>.</p>

<h2>// THE GAME</h2>
<p>John Van Ryzin designed H.E.R.O. (Helicopter Emergency Rescue Operation) for Activision. It came out on the Atari 2600 in 1984, and The Softworks adapted it for the C64. You're Roderick Hero, flying down mine shafts on a backpack propeller to reach trapped miners. Your helmet laser deals with spiders, bats and moths, and dynamite clears walls, as long as you get clear in time. Brush a lantern and the lights go out. Your power runs down all the time, and whatever is left is added to your score when you reach the miner. There are twenty levels of magma walls, underground rivers and tentacles, then PRO mode.</p>

<h2>// THE PORT</h2>
<p>This one is a home-computer game rather than an arcade board, so the port works from the C64 program. The game is read directly from your tape image. The CBM loader blocks are decoded and checked, and the loader's three decryption stages are replayed to recover the program, a cartridge-style image at <code>$8000-$BFFF</code>. All 155 routines are translated to C, one function per routine, with the game's state kept at the original addresses. Every routine is run against the original 6502 code on game states captured from levels 1, 5, 9, 13 and PRO. RAM, colour RAM and the video and sound registers are equal in every run, and all 256 screens of the 20 levels build identically.</p>
<p>The C64 itself is modelled: the VIC-II (extended-colour text, multicolour, sprites, raster splits and sprite collisions), the SID (three voices, ADSR and filter) and the CIA keyboard and joysticks. The game's main loop runs as a coroutine with the C64's CPU time per frame, so screen redraws take the same six frames as on the real machine.</p>
<div class="command-line">
    <span class="prompt">$ cat features.txt</span><br>
    GFX ........ the C64 picture or a Scale2x hi-res one (F2), the play area or the whole frame (F4)<br>
    DISPLAY .... whole-number scaling when it fills 90% of the screen, else sharp bilinear<br>
    PADS ....... both C64 joystick ports are read, so any pad works<br>
    LEVELS ..... F3 starts at level 1, 5, 9, 13 or PRO<br>
    CPU ........ about 0.2 ms a frame on a desktop (0.4 ms with hi-res)<br>
    PACKAGES ... Linux x86_64/aarch64, PortMaster, Windows, macOS<br>
    <span class="cursor-blink"></span>
</div>
<p>The display is tuned for handhelds. A 640x480 screen gets a clean 2x picture, and 720x720 or 1280x720 screens are filled with sharp bilinear scaling, so there's no blur or uneven pixels. The credits line drawn with the C64 character ROM uses a lookalike font, so no Commodore ROM is needed.</p>

<h2>// YOUR TAPE</h2>
<p>No game data is included. You need your own C64 tape image of the game (<code>H.E.R.O.tap</code>, the Activision cassette). The game finds it next to the program, through <code>--tap</code>, or through <code>$HERO_TAP</code>.</p>
<div class="code-block"><pre><code>git clone https://github.com/monkeyx-net/hero.git
cd hero
cmake -S . -B build &amp;&amp; cmake --build build -j
build/hero --windowed --tap /path/to/H.E.R.O.tap</code></pre></div>

<p>See the <a href="/hero">H.E.R.O. game page</a> for the full controls, or get the source on <a href="https://github.com/monkeyx-net/hero">GitHub</a>.</p>
