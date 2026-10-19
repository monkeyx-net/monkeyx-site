<?php
$post_meta = [
    'title'   => 'New Arrival: CGL M5',
    'date'    => '2026-10-19',
    'slug'    => 'cgl-m5',
    'tags'    => ['hardware'],
    'image'   => 'images/blog/cgl-m5.webp',
    'summary' => 'A boxed CGL M5 has joined the collection. It is the UK version of the Sord M5, a 1982 Japanese Z80 home computer with TMS9918 graphics and BASIC on a cartridge.',
];
?>
<p>A new machine has joined the collection: a <strong>CGL M5 Home Computer</strong>, still in its original box. The box art is creased and the lid has been taped, but the inner tray still holds the computer, the black power supply and the leads.</p>

<h2>// HISTORY</h2>
<p>The M5 was designed by Sord, a Japanese computer company, and launched there in 1982. In 1983 Computer Games Limited (CGL) brought it to the UK and sold it under its own name for around £195. It arrived in a market already crowded by the ZX Spectrum, Commodore 64 and BBC Micro, and it never sold in large numbers in Britain.</p>
<p>The M5 was built mainly for games. Its Texas Instruments video chip and sound chip were the same parts used by the ColecoVision and, later, MSX machines. Like a console, it got most of its software on ROM cartridges, and BASIC itself came on a cartridge.</p>

<h2>// SPECS</h2>
<div class="command-line">
    <span class="prompt">$ cat /proc/m5</span><br>
    CPU ........ Z80A @ 3.58 MHz<br>
    RAM ........ 4K, plus 16K video RAM<br>
    VIDEO ...... TMS9918, 256x192, 16 colours, 32 sprites<br>
    SOUND ...... SN76489, 3 channels + noise<br>
    STORAGE .... cassette, ROM cartridges<br>
    BASIC ...... cartridge (BASIC-I, BASIC-G, BASIC-F)<br>
    KEYBOARD ... 55-key rubber<br>
    <span class="cursor-blink"></span>
</div>

<h2>// HOW IT WAS USED</h2>
<p>Most M5 owners used it to play games. The cartridge library included arcade-style titles, and the TMS9918's hardware sprites made smooth action games easier to write than on many rivals. Anyone who wanted to program could buy a BASIC cartridge: BASIC-I for integer maths, BASIC-G for graphics and BASIC-F for floating point.</p>

<h2>// WHAT'S NEXT</h2>
<p>Here's the plan before it gets switched on:</p>
<div class="command-line">
    <span class="prompt">$ cat restore-todo.txt</span><br>
    [ ] clean the case and the rubber keyboard<br>
    [ ] check the power supply output<br>
    [ ] power up and check the video output<br>
    [ ] find a BASIC cartridge and some games<br>
    <span class="cursor-blink"></span>
</div>
<p>Progress updates will be posted here. For more vintage machines, see the <a href="/hardware">hardware section</a>.</p>
