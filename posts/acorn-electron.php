<?php
$post_meta = [
    'title'   => 'New Arrival: Acorn Electron',
    'date'    => '2026-10-19',
    'slug'    => 'acorn-electron',
    'tags'    => ['hardware'],
    'image'   => 'images/blog/acorn-electron.webp',
    'summary' => 'An Acorn Electron in its original packaging has joined the collection. The 1983 Electron was a cheaper, cut-down BBC Micro with BBC BASIC built in.',
];
?>
<p>A new machine has joined the collection: an <strong>Acorn Electron</strong>, still in its original polystyrene packaging. It comes with the power supply, the leads, the <em>Introductory Cassette</em> and the <em>Start Programming with the Electron</em> book by Masoud Yazdani.</p>

<h2>// HISTORY</h2>
<p>Acorn launched the Electron in 1983 at £199 as a cheaper home version of the <a href="/blog/bbc-micro-model-b">BBC Micro</a>. To cut costs, it replaced most of the BBC's chips with a single custom ULA. It kept BBC BASIC and most of the BBC's screen modes, so much of the BBC's software could be adapted for it.</p>
<p>Problems making the ULA meant Acorn could only supply a fraction of the machines ordered for Christmas 1983. By the time production caught up in 1984, demand had moved on to the Spectrum and Commodore 64, and Acorn was left with large unsold stocks. Those financial troubles led to Olivetti taking control of Acorn in 1985.</p>

<h2>// SPECS</h2>
<div class="command-line">
    <span class="prompt">$ cat /proc/electron</span><br>
    CPU ........ 6502A @ 2 MHz (slower when the screen is accessing RAM)<br>
    RAM ........ 32K<br>
    ROM ........ 32K, BBC BASIC and the Acorn MOS<br>
    VIDEO ...... ULA, modes 0-6, up to 640x256, 8 colours (no teletext mode 7)<br>
    SOUND ...... 1 channel<br>
    STORAGE .... cassette<br>
    I/O ........ expansion edge connector (for Plus 1, Plus 3 and others)<br>
    <span class="cursor-blink"></span>
</div>

<h2>// HOW IT WAS USED</h2>
<p>The Electron was a home computer for families who wanted something BBC-compatible at a lower price. Children could run the same kind of BASIC programs at home that they used at school. Its keyboard allowed BASIC keywords to be typed with a single shortcut. It had a strong games library too, including Elite, Repton, Citadel and Exile, and budget labels such as Superior Software kept releasing games for it until the end of the 1980s.</p>

<h2>// WHAT'S NEXT</h2>
<p>Here's the plan before it gets switched on:</p>
<div class="command-line">
    <span class="prompt">$ cat restore-todo.txt</span><br>
    [ ] unbox and inspect the machine<br>
    [ ] check the power supply output<br>
    [ ] power up and check the video output<br>
    [ ] load the Introductory Cassette<br>
    <span class="cursor-blink"></span>
</div>
<p>Progress updates will be posted here. For more vintage machines, see the <a href="/hardware">hardware section</a>.</p>
