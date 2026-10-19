<?php
$post_meta = [
    'title'   => 'New Arrival: Atari 1040ST',
    'date'    => '2026-10-19',
    'slug'    => 'atari-1040st',
    'tags'    => ['hardware'],
    'image'   => 'images/blog/atari-1040st.webp',
    'summary' => 'An Atari 1040ST has joined the collection. This 1986 68000 machine had a megabyte of RAM, GEM on the desktop and MIDI ports built in, and became a fixture in recording studios.',
];
?>
<p>A new machine has joined the collection: an <strong>Atari 1040ST</strong>. The case and keys have yellowed heavily, and there are a couple of leads still plugged into the joystick and mouse ports, but the keyboard looks complete with all its keycaps.</p>

<h2>// HISTORY</h2>
<p>After Jack Tramiel left Commodore, he bought Atari's home computer division in 1984. The new company had the Atari ST on sale within about a year. Its name stood for "Sixteen/Thirty-two", after the Motorola 68000's 16-bit bus and 32-bit internals. In 1986 the 1040ST put the power supply and a double-sided floppy drive inside the case and doubled the RAM to 1MB. In the US it was the first computer with a megabyte of RAM to sell for under $1,000.</p>
<p>The ST and the Amiga became bitter rivals through the late 1980s. Later models included the STE, with a bigger palette and digital sound, and the Mega ST. The line ended with the Falcon030 in 1992.</p>

<h2>// SPECS</h2>
<div class="command-line">
    <span class="prompt">$ cat /proc/1040st</span><br>
    CPU ........ Motorola 68000 @ 8 MHz<br>
    RAM ........ 1MB<br>
    VIDEO ...... 320x200 (16 colours), 640x200 (4), 640x400 mono; 512-colour palette<br>
    SOUND ...... Yamaha YM2149, 3 channels<br>
    STORAGE .... built-in 3.5" double-sided floppy (720K)<br>
    OS ......... TOS with the GEM desktop, in ROM<br>
    I/O ........ MIDI in/out, ACSI hard disk, Centronics, RS-232, cartridge, mouse/joystick<br>
    <span class="cursor-blink"></span>
</div>

<h2>// HOW IT WAS USED</h2>
<p>The ST's built-in MIDI ports made it a favourite with musicians. Sequencers such as Steinberg's Cubase and C-Lab's Notator ran on STs in studios well into the 1990s. With Atari's SM124 monochrome monitor, its sharp 640x400 display also suited desktop publishing. At home it was a strong games machine, with titles like Dungeon Master, Starglider and Xenon 2.</p>

<h2>// WHAT'S NEXT</h2>
<p>Here's the plan before it gets switched on:</p>
<div class="command-line">
    <span class="prompt">$ cat restore-todo.txt</span><br>
    [ ] confirm the exact model (ST, STF or STE) from the badge and the rear label<br>
    [ ] strip down and clean the case and keyboard<br>
    [ ] inspect the internal PSU and replace any suspect capacitors<br>
    [ ] clean the floppy drive and replace the belt if needed<br>
    [ ] boot to the GEM desktop<br>
    <span class="cursor-blink"></span>
</div>
<p>Progress updates will be posted here. For more vintage machines, see the <a href="/hardware">hardware section</a>.</p>
