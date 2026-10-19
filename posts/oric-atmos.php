<?php
$post_meta = [
    'title'   => 'New Arrival: Oric Atmos',
    'date'    => '2026-10-19',
    'slug'    => 'oric-atmos',
    'tags'    => ['hardware'],
    'image'   => 'images/blog/oric-atmos.webp',
    'summary' => 'An Oric Atmos 48K has joined the collection. The 1984 follow-up to the Oric-1 added a proper keyboard, a fixed ROM and a bold black-and-red case.',
];
?>
<p>A new machine has joined the collection: an <strong>Oric Atmos 48K</strong>. With its black case and red keys it's one of the best-looking 8-bit machines around. This one has some dust in the keyboard but no obvious damage.</p>

<h2>// HISTORY</h2>
<p>Oric Products International launched the Atmos in 1984 at about £170, as the follow-up to the Oric-1. The core hardware was the same, but the company fixed the two main complaints about the original. It got a full-travel keyboard, and a new V1.1 ROM that fixed many of the old BASIC bugs.</p>
<p>The Atmos sold well in France, but Oric ran into money trouble and went into receivership in 1985. The French company Eureka bought the business and continued with the Stratos and Telestrat. Those machines sold only in small numbers, and Oric closed for good in 1987.</p>

<h2>// SPECS</h2>
<div class="command-line">
    <span class="prompt">$ cat /proc/atmos</span><br>
    CPU ........ 6502A @ 1 MHz<br>
    RAM ........ 48K<br>
    VIDEO ...... ULA, 240x200 hires, 40x28 text, 8 colours<br>
    SOUND ...... AY-3-8912, 3 channels + built-in speaker<br>
    STORAGE .... cassette (optional Oric Microdisc 3" drive)<br>
    BASIC ...... Oric Extended BASIC V1.1<br>
    I/O ........ Centronics printer port, expansion edge connector<br>
    KEYBOARD ... full-travel, with FUNCT key<br>
    <span class="cursor-blink"></span>
</div>

<h2>// HOW IT WAS USED</h2>
<p>Like the Oric-1, the Atmos was used for games, home programming and learning. Most Oric-1 software ran on it, although the ROM changes broke some older titles. Owners who bought the Microdisc drive could run Sedoric or the Oric DOS. The machine still has an active fan community, especially in France, and new games are still being written for it.</p>

<h2>// WHAT'S NEXT</h2>
<p>Here's the plan before it gets switched on:</p>
<div class="command-line">
    <span class="prompt">$ cat restore-todo.txt</span><br>
    [ ] clean the case and keyboard<br>
    [ ] find or build a suitable 9V power supply<br>
    [ ] power up and check the video output<br>
    [ ] try modern storage, such as a tape emulator<br>
    <span class="cursor-blink"></span>
</div>
<p>Progress updates will be posted here. For more vintage machines, see the <a href="/hardware">hardware section</a>.</p>
