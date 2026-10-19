<?php
$post_meta = [
    'title'   => 'Released: Robotron: 2084 SDL2 Port',
    'date'    => '2026-10-19',
    'slug'    => 'robotron-sdl2',
    'tags'    => ['sdl2', 'c', 'games'],
    'image'   => 'images/blog/robotron-sdl2.webp',
    'summary' => 'Robotron: 2084 is now on the site: a native C11/SDL2 port of the 1982 Williams arcade game for Linux handhelds, desktops and the browser, with waves and enemy pacing traced from the original ROM.',
];
?>
<p><strong>Robotron: 2084</strong> is now in the <a href="/games">games archive</a>. It's a native C11/SDL2 rebuild of the 1982 Williams arcade classic. It runs on Linux handhelds through PortMaster, on x86_64 desktops and the Steam Deck, and in your browser through a WebAssembly build.</p>

<h2>// THE GAME</h2>
<p>Eugene Jarvis and Larry DeMar created Robotron: 2084 for Williams Electronics in 1982. You play the last hero, trying to save the last human family from waves of robots. One stick moves you and the other fires, and that twin-stick design shaped arcade shooters for decades afterwards.</p>

<h2>// THE PORT</h2>
<p>The port is based on the <a href="https://robotron.hatch.org/">robotron.hatch.org</a> web remake. That remake's waves, enemy pacing, spawn positions and random number generator were traced in the arcade ROM and checked against MAME. The native version keeps that accuracy and drops the browser stack for plain C and SDL2.</p>
<div class="command-line">
    <span class="prompt">$ cat /proc/robotron</span><br>
    LANGUAGE ... C11 + SDL2 (2.0.10 or newer)<br>
    TARGETS .... aarch64 handhelds (ArkOS, ROCKNIX, muOS, Knulli via PortMaster)<br>
    ............ x86_64 Linux, Steam Deck, Windows, HTML5/WebAssembly<br>
    TIMING ..... fixed 60 Hz, frame-quantised like the arcade<br>
    TESTS ...... ROM PRNG checked against 1000 outputs captured in MAME<br>
    LICENSE .... Apache 2.0 (source code only)<br>
    <span class="cursor-blink"></span>
</div>
<p>The test suite runs gameplay through all 40 waves and compares screenshot hashes from scripted runs. It also checks the PRNG against output captured from the arcade itself. There are optional graphics presets too: F3 cycles them, F4 toggles glow and F5 toggles scanlines.</p>

<h2>// CONTROLS</h2>
<div class="command-line">
    <span class="prompt">$ cat controls.txt</span><br>
    MOVE ....... left stick / D-pad ... W A S D<br>
    FIRE ....... right stick or A/B/X/Y ... arrow keys<br>
    1P START ... Start ... Enter<br>
    2P START ... L1 + Start<br>
    QUIT ....... hold Select + Start ... Esc<br>
    <span class="cursor-blink"></span>
</div>

<h2>// BUILD IT YOURSELF</h2>
<p>The source is on GitHub on the <a href="https://github.com/monkeyx-net/robotron/tree/sdl2"><code>sdl2</code> branch of monkeyx-net/robotron</a>. You need CMake 3.13+, a C11 compiler and the SDL2 development files:</p>
<div class="code-block"><pre><code>git clone -b sdl2 https://github.com/monkeyx-net/robotron.git
cd robotron
cmake -S . -B build &amp;&amp; cmake --build build -j
build/robotron --extract /path/to/robotron.zip
build/robotron --windowed</code></pre></div>
<p>The source tree contains no game data. The wave tables, timers and other data come from your own MAME <code>robotron</code> ROM set, which the <code>--extract</code> step reads. Without it, the attract screens run but you can't start a game.</p>

<h2>// PLAY IT</h2>
<p>Head to the <a href="/games">games archive</a> and click the Robotron cover to play in your browser. Bug reports and pull requests are welcome on <a href="https://github.com/monkeyx-net/robotron/tree/sdl2">GitHub</a>.</p>
