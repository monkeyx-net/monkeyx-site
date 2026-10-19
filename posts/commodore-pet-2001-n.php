<?php
$post_meta = [
    'title'   => 'New Arrival: Commodore PET 2001-N',
    'date'    => '2026-10-19',
    'slug'    => 'commodore-pet-2001-n',
    'tags'    => ['hardware'],
    'image'   => 'images/blog/commodore-pet-2001-n.webp',
    'summary' => 'A second PET has joined the collection: a 2001 series machine with the full-size graphics keyboard that replaced the original chiclet keys in 1979.',
];
?>
<p>A second PET has joined the collection: a <strong>Commodore PET 2001 series</strong> machine with the full-size graphics keyboard. It has a UK plug, and although the case is yellowed, it looks complete. It makes a good comparison with the original chiclet-keyboard <a href="/blog/commodore-pet-2001">PET 2001</a>.</p>

<h2>// HISTORY</h2>
<p>The original PET's chiclet keyboard was cramped and its built-in cassette deck took up space. In 1979 Commodore redesigned the machine as the 2001-N. It had a full-size keyboard with PETSCII graphics symbols printed on the keycaps, a separate numeric keypad, and an external cassette drive (the Datassette). Memory options went up to 32K, and new ROMs brought BASIC 2.0, which fixed bugs and allowed larger memory.</p>
<p>This layout became the standard PET design for the next few years. It led on to the 4000 series and, with an 80-column screen, the CBM 8032.</p>

<h2>// SPECS</h2>
<div class="command-line">
    <span class="prompt">$ cat /proc/pet2001n</span><br>
    CPU ........ MOS 6502 @ 1 MHz<br>
    RAM ........ 8K, 16K or 32K<br>
    DISPLAY .... 9" monochrome CRT, 40x25 text, PETSCII graphics<br>
    STORAGE .... external Datassette, IEEE-488 disk drives<br>
    BASIC ...... Commodore BASIC 2.0<br>
    I/O ........ IEEE-488, user port, 2x cassette ports<br>
    KEYBOARD ... full-size graphics keyboard with numeric keypad<br>
    <span class="cursor-blink"></span>
</div>

<h2>// HOW IT WAS USED</h2>
<p>The 2001-N was a favourite in schools. Many British students took their first programming lessons on a PET just like this one. Thanks to its better keyboard and larger memory, it was also more practical for businesses, which used it with IEEE-488 disk drives and printers. The graphics symbols on the keys made it easy to type PETSCII art and simple games straight from the keyboard.</p>

<h2>// WHAT'S NEXT</h2>
<p>Here's the plan before it gets switched on:</p>
<div class="command-line">
    <span class="prompt">$ cat restore-todo.txt</span><br>
    [ ] identify the exact model and RAM fitted<br>
    [ ] clean the case and keyboard<br>
    [ ] inspect the PSU and replace any suspect capacitors<br>
    [ ] power up on a variac and check the CRT<br>
    <span class="cursor-blink"></span>
</div>
<p>Progress updates will be posted here. For more vintage machines, see the <a href="/hardware">hardware section</a>.</p>
