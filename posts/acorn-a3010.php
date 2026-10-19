<?php
$post_meta = [
    'title'   => 'New Arrival: Acorn A3010',
    'date'    => '2026-10-19',
    'slug'    => 'acorn-a3010',
    'tags'    => ['hardware'],
    'image'   => 'images/blog/acorn-a3010.webp',
    'summary' => 'An Acorn A3010 has joined the collection. This 1992 ARM250 computer, built into its keyboard, was Acorn\'s attempt at a family machine to take on the Amiga.',
];
?>
<p>A new machine has joined the collection: an <strong>Acorn A3010</strong>, with its external power supply and leads. The case has yellowed in places, but the green function keys and the badge are intact.</p>

<h2>// HISTORY</h2>
<p>Acorn launched the A3010 in 1992 at £499, aimed at homes rather than schools. Like the Amiga 500, it put the whole computer inside the keyboard. Inside was the ARM250, a single chip combining the ARM2 processor with the memory, video and I/O controllers. That made it a much cheaper, smaller version of the <a href="/blog/acorn-archimedes-310">Archimedes</a> design. It ran RISC OS 3.1 from ROM.</p>
<p>The A3010 had features aimed at gamers, including two Atari-style joystick ports and a TV output. It was often sold in bundles with games or educational software. It sold reasonably well, but it never broke the Amiga's hold on the UK home market.</p>

<h2>// SPECS</h2>
<div class="command-line">
    <span class="prompt">$ cat /proc/a3010</span><br>
    CPU ........ ARM250 @ 12 MHz<br>
    RAM ........ 1MB (2MB on some models and with upgrades)<br>
    VIDEO ...... up to 640x512, 256 colours from a 4096-colour palette, TV out<br>
    SOUND ...... 8-channel 8-bit stereo<br>
    STORAGE .... 3.5" floppy (1.6MB high density)<br>
    OS ......... RISC OS 3.1 in ROM<br>
    I/O ........ 2x joystick ports, serial, printer, internal expansion slot<br>
    <span class="cursor-blink"></span>
</div>

<h2>// HOW IT WAS USED</h2>
<p>The A3010 was a family computer. Parents liked that it matched the Acorns their children used at school. Children liked that it had joystick ports and could play games such as <em>Chocks Away</em>, <em>Lemmings</em> and <em>James Pond</em>. RISC OS 3 came with a word processor, a paint program and a drawing program in ROM, so it was useful straight out of the box.</p>

<h2>// WHAT'S NEXT</h2>
<p>Here's the plan before it gets switched on:</p>
<div class="command-line">
    <span class="prompt">$ cat restore-todo.txt</span><br>
    [ ] open up and check the board for battery leakage<br>
    [ ] check the external PSU output<br>
    [ ] clean the case and keyboard<br>
    [ ] power up and boot RISC OS 3.1<br>
    <span class="cursor-blink"></span>
</div>
<p>Progress updates will be posted here. For more vintage machines, see the <a href="/hardware">hardware section</a>.</p>
