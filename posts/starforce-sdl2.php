<?php
$post_meta = [
    'title'   => 'Released: Star Force SDL2 Port',
    'date'    => '2026-10-25',
    'slug'    => 'starforce-sdl2',
    'tags'    => ['sdl2', 'c', 'games'],
    'image'   => 'images/blog/starforce-sdl2.webp',
    'summary' => 'Star Force is now in the games archive: a native C/SDL2 port of the 1984 Tehkan arcade shooter, rewritten in C and checked frame by frame against an emulated board, for Linux handhelds, desktops, Windows and macOS.',
];
?>
<p><strong>Star Force</strong> is now in the <a href="/games">games archive</a>. It's a native C11/SDL2 port of the 1984 Tehkan arcade game for Linux handhelds through PortMaster, Linux desktops, the Steam Deck, Windows and macOS. You can play it in your browser from the <a href="/starforce">game page</a>, and the source is <a href="https://github.com/monkeyx-net/starforce">on GitHub</a>.</p>

<h2>// THE GAME</h2>
<p>Tehkan, later Tecmo, released Star Force in 1984. You fly the Final Star up a scrolling screen, over open space and great floating fortresses, shooting fighters in the air and targets on the ground with the same button. The areas are named after the Greek alphabet, starting at ALPHA-AREA, and hidden bonus targets reward players who know where to shoot. Hudson Soft's 1985 Famicom version was the game for Hudson's first caravan tournament in Japan, which made Star Force a score-attack classic.</p>

<h2>// THE PORT</h2>
<p>It follows the <a href="/blog/galaga-sdl2">Galaga port</a>, and it's built on its platform layer, graphics and test harness. There's an emulated Star Force board, with a 4 MHz main Z80 and a 2 MHz sound Z80 (with a PIO and CTC on its daisy chain), three background layers, the foreground and sprites. It's checked against MAME instruction for instruction and runs with <code>--emulate</code>. The three SN76489A sound chips and the waveform DAC are modelled from MAME's output. By default, though, the game runs in C. Both Z80 programs are rewritten in C on the board's scheduler, and their memory and sound equal the emulated board's at every frame. That holds from power-on through whole games, five DIP switch settings and 40,000 frames of the later areas.</p>
<div class="command-line">
    <span class="prompt">$ cat features.txt</span><br>
    GFX ........ 8 presets, from classic pixels to HD glow with CRT scanlines (F3/F4/F5)<br>
    PADS ....... two pads: one for each player; one pad drives both, the players taking turns<br>
    OPERATOR ... F2 opens the DIP switches over a paused game: both coin slots, ships, bonus, difficulty<br>
    SAVES ...... settings in starforce.cfg, the BEST PLAYERS table in starforce.hiscore<br>
    COCKTAIL ... player two's turns flipped round, as on the cocktail table<br>
    PACKAGES ... Linux x86_64/aarch64, PortMaster, Windows, macOS<br>
    <span class="cursor-blink"></span>
</div>
<p>The effects are cheap too. Where the renderer is accelerated, the GPU adds the glow, and on 4x displays the effects are drawn at 2x and doubled. On a desktop, that took a 4x frame from about 10 ms to about 1 ms.</p>

<h2>// YOUR ROM SET</h2>
<p>No ROM data is included. You need your own MAME <code>starforc</code> set (<code>starforc.zip</code>, the parent set). The game finds it next to the program, through <code>--rom</code>, or through <code>$STARFORCE_ROM</code>. Files are matched by CRC. On the first run, the tiles, sprites, font, the DAC's waveform and the tables it needs are extracted to <code>assets/</code>.</p>
<div class="code-block"><pre><code>git clone https://github.com/monkeyx-net/starforce.git
cd starforce
cmake -S . -B build &amp;&amp; cmake --build build -j
build/starforce --windowed --rom /path/to/starforc.zip</code></pre></div>

<p>See the <a href="/starforce">Star Force game page</a> for the full controls, or get the source on <a href="https://github.com/monkeyx-net/starforce">GitHub</a>.</p>
