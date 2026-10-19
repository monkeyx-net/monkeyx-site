<?php
$post_meta = [
    'title'   => 'New Arrival: Tatung Einstein',
    'date'    => '2026-10-19',
    'slug'    => 'tatung-einstein',
    'tags'    => ['hardware'],
    'image'   => 'images/blog/tatung-einstein.webp',
    'summary' => 'A Tatung Einstein TC-01 in its original box has joined the collection. This 1984 British-built Z80 machine had a built-in 3" floppy drive and ran CP/M programs.',
];
?>
<p>A new machine has joined the collection: a <strong>Tatung Einstein</strong> in its original box. The box is battered and scuffed, but the striking artwork is still there: Albert Einstein's face over a sunset, a Union Jack reading "Designed in Britain, Built in Britain", and the slogan "Colour Micro Computer: Sheer Genius".</p>

<h2>// HISTORY</h2>
<p>Tatung is a Taiwanese electronics company that ran a TV factory in Telford, Shropshire. In 1984 it launched the Einstein TC-01, which was designed and built in the UK. It cost around £499. That was far more than a Spectrum or Commodore 64, but it came with a disk drive built in at a time when most home users loaded software from cassette.</p>
<p>The Einstein never became a big seller with home users. It found a different niche: it was popular with games studios as a development machine. Its fast disk storage and serial ports made it a good host for writing and cross-assembling code for the ZX Spectrum, Amstrad CPC and MSX.</p>

<h2>// SPECS</h2>
<div class="command-line">
    <span class="prompt">$ cat /proc/einstein</span><br>
    CPU ........ Z80A @ 4 MHz<br>
    RAM ........ 64K, plus 16K video RAM<br>
    VIDEO ...... TMS9129, 256x192, 16 colours, 32 sprites<br>
    SOUND ...... AY-3-8910, 3 channels<br>
    STORAGE .... built-in Hitachi 3" floppy drive, room for a second<br>
    OS ......... Xtal DOS (runs CP/M software)<br>
    I/O ........ RS-232, Centronics printer, user port, analogue joysticks, Tatung Pipe expansion<br>
    <span class="cursor-blink"></span>
</div>

<h2>// HOW IT WAS USED</h2>
<p>Tatung marketed the Einstein to small businesses, schools and homes, as the list on the box says. Because Xtal DOS could run CP/M programs, it had access to business software such as WordStar and dBase II. It also had its own BASIC and a modest library of games, many of them conversions from MSX, which used similar graphics hardware.</p>
<p>Its longest-lasting role was as a developer's workstation. Several well-known 8-bit games were written on Einsteins and then sent over a serial link to the target machine for testing.</p>

<h2>// WHAT'S NEXT</h2>
<p>Here's the plan before it gets switched on:</p>
<div class="command-line">
    <span class="prompt">$ cat restore-todo.txt</span><br>
    [ ] unbox and inspect the machine<br>
    [ ] check the internal PSU and replace any suspect capacitors<br>
    [ ] replace the 3" drive belt<br>
    [ ] power up and boot Xtal DOS<br>
    <span class="cursor-blink"></span>
</div>
<p>Progress updates will be posted here. For more vintage machines, see the <a href="/hardware">hardware section</a>.</p>
