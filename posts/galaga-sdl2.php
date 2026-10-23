<?php
$post_meta = [
    'title'   => 'Released: Galaga SDL2 Port',
    'date'    => '2026-10-23',
    'slug'    => 'galaga-sdl2',
    'tags'    => ['sdl2', 'c', 'games'],
    'image'   => 'images/blog/galaga-sdl2.webp',
    'summary' => 'Galaga is now in the games archive: a native C/SDL2 port of the 1981 Namco arcade game, rewritten in C and checked frame by frame against an emulated board, for Linux handhelds, desktops, Windows and macOS.',
];
?>
<p><strong>Galaga</strong> is now in the <a href="/games">games archive</a>. It's a native C11/SDL2 port of the 1981 Namco arcade game for Linux handhelds through PortMaster, Linux desktops, the Steam Deck, Windows and macOS. Release 0.1.1 is <a href="https://github.com/monkeyx-net/galaga/releases">on GitHub</a>.</p>

<h2>// THE GAME</h2>
<p>Shigeru Yokoyama designed Galaga for Namco in 1981 as the sequel to Galaxian, and Midway brought it to North America. Waves of aliens fly in and form up at the top of the screen, then break off to dive at you. Every few waves there's a Challenging Stage, where nothing fires back and the aim is to hit every one. The Boss Galaga can capture your fighter with its tractor beam. Shoot the Boss down to win the ship back and fly two fighters at once.</p>

<h2>// THE PORT</h2>
<p>This one works differently from the <a href="/blog/defender-sdl2">Defender</a> and <a href="/blog/joust-sdl2">Joust</a> ports. There's still an emulated Galaga board, with three Z80s, the Namco 51xx and 54xx MCUs, the video, the starfield and the WSG sound. It's checked against MAME instruction for instruction and runs with <code>--emulate</code>. By default, though, the game runs in C. All five programs (the three Z80 programs and the two MCU programs) are rewritten in C on the board's scheduler. Their memory, latches and sound equal the emulated board's at every frame through a game. That means the default game needs only <code>galaga.zip</code>, not the device ROMs.</p>
<div class="command-line">
    <span class="prompt">$ cat features.txt</span><br>
    GFX ........ 8 presets, from classic pixels to HD glow with CRT scanlines (F3/F4/F5)<br>
    PADS ....... every connected pad drives the one control panel, as on the upright<br>
    OPERATOR ... F2 opens the DIP switches over a paused game: difficulty, ships, bonus, coinage<br>
    SAVES ...... settings in galaga.cfg, the top five scores with initials in galaga.hiscore<br>
    COCKTAIL ... player two's turns flipped round, as on the cocktail table<br>
    PACKAGES ... Linux x86_64/aarch64, PortMaster, Windows, macOS<br>
    <span class="cursor-blink"></span>
</div>
<p>The main loop sleeps until the next frame is due, so it uses little CPU on handhelds and doesn't draw extra frames on 120/144 Hz displays.</p>

<h2>// YOUR ROM SET</h2>
<p>No ROM data is included. You need your own MAME <code>galaga</code> set (<code>galaga.zip</code>). The game finds it next to the program, through <code>--rom</code>, or through <code>$GALAGA_ROM</code>. Files are matched by CRC. On the first run, the graphics, palette, sound waveforms and tables it needs are extracted to <code>assets/</code>. The emulated board (<code>--emulate</code>) also needs <code>namco51.zip</code> and <code>namco54.zip</code>.</p>
<div class="code-block"><pre><code>git clone https://github.com/monkeyx-net/galaga.git
cd galaga
cmake -S . -B build &amp;&amp; cmake --build build -j
build/galaga --windowed --rom /path/to/galaga.zip</code></pre></div>

<p>See the <a href="/galaga">Galaga game page</a> for the full controls, or get the source on <a href="https://github.com/monkeyx-net/galaga">GitHub</a>.</p>
