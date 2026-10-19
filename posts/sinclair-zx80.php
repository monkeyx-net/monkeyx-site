<?php
$post_meta = [
    'title'   => 'New Arrival: Sinclair ZX80',
    'date'    => '2026-10-19',
    'slug'    => 'sinclair-zx80',
    'tags'    => ['hardware'],
    'image'   => 'images/blog/sinclair-zx80.webp',
    'summary' => 'A Sinclair ZX80 has joined the collection, complete with its power supply, manual and original advert. The 1980 ZX80 was the first computer sold in the UK for under £100.',
];
?>
<p>A new machine has joined the collection: a <strong>Sinclair ZX80</strong>. It comes with its power supply, the <em>A Course in BASIC Programming</em> manual, the "Important" leaflet that came in the box, and a newspaper advert offering the machine for £99.95.</p>

<h2>// HISTORY</h2>
<p>Clive Sinclair's company, then called Science of Cambridge, launched the ZX80 in February 1980. It cost £79.95 as a kit or £99.95 ready-built, which made it the first computer sold in the UK for under £100. Designer Jim Westwood kept the chip count low by having the Z80 CPU generate the TV picture itself.</p>
<p>The ZX80 sold about 50,000 units, which was a big success for such a small company. It was replaced in 1981 by the ZX81, which was cheaper and fixed the display flicker. That was followed in 1982 by the ZX Spectrum.</p>

<h2>// SPECS</h2>
<div class="command-line">
    <span class="prompt">$ cat /proc/zx80</span><br>
    CPU ........ Z80A @ 3.25 MHz<br>
    RAM ........ 1K (expandable to 16K)<br>
    ROM ........ 4K, integer-only Sinclair BASIC<br>
    DISPLAY .... TV out, 32x24 text, black and white<br>
    STORAGE .... cassette<br>
    KEYBOARD ... 40-key membrane, single-keystroke BASIC keywords<br>
    <span class="cursor-blink"></span>
</div>

<h2>// HOW IT WAS USED</h2>
<p>For many British buyers the ZX80 was their first chance to own a computer, and they mostly used it to learn BASIC. Because the CPU drew the screen, the display blanked whenever a program ran or a key was pressed, so animation was almost impossible. People still managed to write games for it, and it taught a whole generation to program in 1K.</p>

<h2>// WHAT'S NEXT</h2>
<p>Here's the plan before it gets switched on:</p>
<div class="command-line">
    <span class="prompt">$ cat restore-todo.txt</span><br>
    [ ] inspect the case and the membrane keyboard<br>
    [ ] check the power supply output<br>
    [ ] power up and check the TV picture<br>
    [ ] scan the manual and the advert<br>
    <span class="cursor-blink"></span>
</div>
<p>Progress updates will be posted here. For more vintage machines, see the <a href="/hardware">hardware section</a>.</p>
