<?php
$post_meta = [
    'title'   => 'Released: Joust SDL2 Port',
    'date'    => '2026-10-20',
    'slug'    => 'joust-sdl2',
    'tags'    => ['sdl2', 'c', 'games'],
    'image'   => 'images/blog/joust-sdl2.webp',
    'summary' => 'Joust is now in the games archive: a native C/SDL2 port of the 1982 Williams arcade game that runs your own ROM on an emulated Williams board, for Linux handhelds, desktops and Windows.',
];
?>
<p><strong>Joust</strong> is now in the <a href="/games">games archive</a>. It's a native C11/SDL2 port of the 1982 Williams arcade game for Linux handhelds through PortMaster, Linux desktops, the Steam Deck and Windows. Release 0.1.0 is <a href="https://github.com/monkeyx-net/joust/releases">on GitHub</a>.</p>

<h2>// THE GAME</h2>
<p>John Newcomer designed Joust for Williams Electronics in 1982. You ride a flying ostrich and joust with enemy knights on buzzards. The higher lance wins. Defeated riders leave eggs that hatch if you don't grab them, and the waves bring lava trolls, burning platforms and the pterodactyl. Two players can play at once, as a team or against each other.</p>

<h2>// THE PORT</h2>
<p>Instead of rewriting the game, the port runs the arcade ROM's own code on an emulated Williams board, with a 6809 main CPU and a 6808 sound CPU. The emulation is written in C and checked against MAME cycle for cycle. The test suite compares the ROM map, video and palette decoding, the blitter on every image in the ROM, the random number generator, and the board from power-on, frame by frame.</p>
<p>On top of that, the port adds:</p>
<div class="command-line">
    <span class="prompt">$ cat features.txt</span><br>
    GFX ........ 8 presets, from classic pixels to HD glow with CRT scanlines (F3/F4/F5)<br>
    PADS ....... two pads for simultaneous two-player games<br>
    SAVES ...... the arcade's CMOS (settings, high scores) saved to disk<br>
    TEST CARD .. ROM status, input tester and the ROM's decoded images<br>
    PACKAGES ... Linux x86_64/aarch64, PortMaster, Windows<br>
    <span class="cursor-blink"></span>
</div>
<p>The port started from the shared code of the <a href="/blog/robotron-sdl2">Robotron: 2084 port</a>, including its platform layer, framebuffer, blitter and enhanced graphics.</p>

<h2>// YOUR ROM SET</h2>
<p>No ROM data is included. You need your own MAME <code>joust</code> set (<code>joust.zip</code>). The game finds it next to the program, through <code>--rom</code>, or through <code>$JOUST_ROM</code>. Files are matched by CRC, so MAME, older MAME and FBNeo sets all work. On PortMaster, put <code>joust.zip</code> in the <code>joust/</code> folder.</p>
<div class="code-block"><pre><code>git clone https://github.com/monkeyx-net/joust.git
cd joust
cmake -S . -B build &amp;&amp; cmake --build build -j
build/joust --windowed --rom /path/to/joust.zip</code></pre></div>

<p>See the <a href="/joust">Joust game page</a> for the full controls, or get the source on <a href="https://github.com/monkeyx-net/joust">GitHub</a>.</p>
