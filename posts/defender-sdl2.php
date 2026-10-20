<?php
$post_meta = [
    'title'   => 'Released: Defender SDL2 Port',
    'date'    => '2026-10-20',
    'slug'    => 'defender-sdl2',
    'tags'    => ['sdl2', 'c', 'games'],
    'image'   => 'images/blog/defender-sdl2.webp',
    'summary' => 'Defender is now in the games archive: a native C/SDL2 port of the 1981 Williams arcade game that runs your own ROM on an emulated Williams board, for Linux handhelds, desktops and Windows.',
];
?>
<p><strong>Defender</strong> is now in the <a href="/games">games archive</a>. It's a native C11/SDL2 port of the 1981 Williams arcade game for Linux handhelds through PortMaster, Linux desktops, the Steam Deck and Windows. Release 0.1.0 is <a href="https://github.com/monkeyx-net/defender/releases">on GitHub</a>.</p>

<h2>// THE GAME</h2>
<p>Eugene Jarvis and Larry DeMar created Defender for Williams Electronics in 1981. Three years later they made Robotron: 2084. You fly over a scrolling planet, protecting humanoids from alien Landers. Any humanoid that gets carried off becomes a Mutant, and if they're all lost, the planet explodes. It was one of the first games with a world larger than the screen, shown in full on the scanner. Its controls (a joystick plus thrust, reverse, fire, smart bomb and hyperspace) are still famous for their difficulty.</p>

<h2>// THE PORT</h2>
<p>Like the <a href="/blog/joust-sdl2">Joust port</a>, it runs the arcade ROM's own code on an emulated Williams board, with a 6809 main CPU with banked ROM and a 6808 sound CPU. The emulation is checked against MAME's instruction traces through a scripted minute of play. The main CPU matches cycle for cycle and the sound CPU matches instruction for instruction, with RAM and screen checked along the way. Timing fixes found while building Defender were also carried back to Joust.</p>
<div class="command-line">
    <span class="prompt">$ cat features.txt</span><br>
    GFX ........ 8 presets, from classic pixels to HD glow with CRT scanlines (F3/F4/F5)<br>
    PADS ....... every connected pad drives the one control panel, as on the cabinet<br>
    SAVES ...... the arcade's CMOS (settings, high scores) saved to disk<br>
    TEST CARD .. ROM status, input tester and the graphics presets<br>
    PACKAGES ... Linux x86_64/aarch64, PortMaster, Windows<br>
    <span class="cursor-blink"></span>
</div>
<p>On a pad, the five buttons map naturally: A fires, B or R1 thrusts, L1 reverses, X is the smart bomb and Y is hyperspace.</p>

<h2>// YOUR ROM SET</h2>
<p>No ROM data is included. You need your own MAME <code>defender</code> set (<code>defender.zip</code>, red label). The game finds it next to the program, through <code>--rom</code>, or through <code>$DEFENDER_ROM</code>. Files are matched by CRC, so MAME, older MAME and FBNeo sets all work. On PortMaster, put <code>defender.zip</code> in the <code>defender/</code> folder.</p>
<div class="code-block"><pre><code>git clone https://github.com/monkeyx-net/defender.git
cd defender
cmake -S . -B build &amp;&amp; cmake --build build -j
build/defender --windowed --rom /path/to/defender.zip</code></pre></div>

<p>See the <a href="/defender">Defender game page</a> for the full controls, or get the source on <a href="https://github.com/monkeyx-net/defender">GitHub</a>.</p>
