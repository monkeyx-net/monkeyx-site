<?php
$post_meta = [
    'title'   => 'New Arrival: Commodore CBM 8032',
    'date'    => '2026-10-19',
    'slug'    => 'commodore-cbm-8032',
    'tags'    => ['hardware'],
    'image'   => 'images/blog/commodore-cbm-8032.webp',
    'summary' => 'A Commodore CBM 8032 has joined the collection. This 1980 business machine from the PET family had an 80-column screen, 32K of RAM and BASIC 4.0.',
];
?>
<p>A new machine has joined the collection: a <strong>Commodore CBM 8032</strong>. It has the familiar PET shape, with the monitor sitting on top of the base, a business keyboard and a numeric keypad. The case has some marks and the keycaps are grubby, but it looks complete.</p>

<h2>// HISTORY</h2>
<p>Commodore launched the 8032 in 1980 as the business model of the PET family. It used the "CBM" name, which Commodore preferred for business machines in Europe. Its main improvement over earlier PETs was an 80-column display. That mattered because word processing and spreadsheets needed lines as wide as a printed page. Each machine also came with 32K of RAM and the new BASIC 4.0, which added disk commands.</p>
<p>The 8032 was popular with European businesses, especially in the UK and Germany. Later versions included the SuperPET, which added a second CPU for teaching languages, and the 8096, which expanded the RAM.</p>

<h2>// SPECS</h2>
<div class="command-line">
    <span class="prompt">$ cat /proc/cbm8032</span><br>
    CPU ........ MOS 6502 @ 1 MHz<br>
    RAM ........ 32K<br>
    DISPLAY .... 12" green monochrome CRT, 80x25 text<br>
    VIDEO ...... MOS 6545 CRTC<br>
    BASIC ...... Commodore BASIC 4.0<br>
    I/O ........ IEEE-488, user port, 2x cassette ports<br>
    KEYBOARD ... business layout with numeric keypad<br>
    <span class="cursor-blink"></span>
</div>

<h2>// HOW IT WAS USED</h2>
<p>The 8032 was an office workhorse. It was usually paired with an IEEE-488 floppy drive such as the CBM 4040 or 8050 and a Commodore printer. Common software included WordPro and Wordcraft for word processing, VisiCalc for spreadsheets, and Silicon Office for databases. Schools and labs also used it, since the IEEE-488 bus could connect to test and measurement equipment.</p>

<h2>// WHAT'S NEXT</h2>
<p>Here's the plan before it gets switched on:</p>
<div class="command-line">
    <span class="prompt">$ cat restore-todo.txt</span><br>
    [ ] clean the case and keyboard<br>
    [ ] inspect the PSU and replace any suspect capacitors<br>
    [ ] power up on a variac and check the CRT<br>
    [ ] connect the CBM 4040 drive<br>
    <span class="cursor-blink"></span>
</div>
<p>Progress updates will be posted here. For more vintage machines, see the <a href="/hardware">hardware section</a>.</p>
