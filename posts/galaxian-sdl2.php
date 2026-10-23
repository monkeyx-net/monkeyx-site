<?php
$post_meta = [
    'title'   => 'Released: Galaxian SDL2 Port',
    'date'    => '2026-10-23',
    'slug'    => 'galaxian-sdl2',
    'tags'    => ['sdl2', 'c', 'games'],
    'image'   => 'images/blog/galaxian-sdl2.webp',
    'summary' => 'Galaxian is now in the games archive: a native C/SDL2 port of the 1979 Namco arcade game, rewritten in C and checked frame by frame against an emulated board, for Linux handhelds, desktops, Windows and macOS.',
];
?>
<p><strong>Galaxian</strong> is now in the <a href="/games">games archive</a>. It's a native C11/SDL2 port of the 1979 Namco arcade game for Linux handhelds through PortMaster, Linux desktops, the Steam Deck, Windows and macOS. Release 0.2.2 is <a href="https://github.com/monkeyx-net/galaxian/releases">on GitHub</a>.</p>

<h2>// THE GAME</h2>
<p>Kazunori Sawano designed Galaxian for Namco in 1979, and Midway brought it to North America. A swarm of aliens sways across the top of the screen while small groups peel off to dive at your Galaxip and shoot. The yellow Flagships come down with red escorts, and taking out the escorts before the Flagship is worth the most. It was one of the first arcade games in full RGB colour, with sprites and a starfield scrolling behind them. Its sequel, <a href="/blog/galaga-sdl2">Galaga</a>, followed in 1981.</p>

<h2>// THE PORT</h2>
<p>Galaxian came first, and the <a href="/blog/galaga-sdl2">Galaga port</a> was built on it. There's an emulated Galaxian board, with a Z80, the memory map, video (tiles with per-column scroll, sprites, shells, the starfield and the cocktail flip) and the watchdog. It's checked against MAME cycle for cycle and pixel for pixel, and runs with <code>--emulate</code>. By default, though, the game runs in C. The ROM program is rewritten routine by routine against the same addresses: the swarm's sway, the dives and attack waves, the hit tests, scoring, the sound sequencer and the demo's pilot. Run alone, the C game equals the board frame for frame through scripted games. The sound is a model of the board's discrete circuit, measured from MAME's output.</p>
<div class="command-line">
    <span class="prompt">$ cat features.txt</span><br>
    GFX ........ 8 presets, from classic pixels to HD glow with CRT scanlines (F3/F4/F5)<br>
    PADS ....... every connected pad drives the one control panel, as on the upright<br>
    OPERATOR ... F2 opens the DIP switches over a paused game: coinage, bonus ship, lives, cabinet<br>
    SAVES ...... settings in galaxian.cfg, the high score in galaxian.hiscore<br>
    PACKAGES ... Linux x86_64/aarch64, PortMaster, Windows, macOS<br>
    <span class="cursor-blink"></span>
</div>
<p>The main loop sleeps until the next frame is due, so it uses little CPU on handhelds and doesn't draw extra frames on 120/144 Hz displays.</p>

<h2>// YOUR ROM SET</h2>
<p>No ROM data is included. You need your own MAME <code>galaxian</code> set (<code>galaxian.zip</code>). The game finds it next to the program or through <code>--rom</code>. Files are matched by CRC. On the first run, the graphics, palette and tables it needs are extracted to <code>assets/</code>.</p>
<div class="code-block"><pre><code>git clone https://github.com/monkeyx-net/galaxian.git
cd galaxian
cmake -S . -B build &amp;&amp; cmake --build build -j
build/galaxian --windowed --rom /path/to/galaxian.zip</code></pre></div>

<p>See the <a href="/galaxian">Galaxian game page</a> for the full controls, or get the source on <a href="https://github.com/monkeyx-net/galaxian">GitHub</a>.</p>
