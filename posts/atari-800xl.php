<?php
$post_meta = [
    'title'   => 'New Arrival: Atari 800XL',
    'date'    => '2026-10-19',
    'slug'    => 'atari-800xl',
    'tags'    => ['hardware'],
    'image'   => 'images/blog/atari-800xl.webp',
    'summary' => 'An Atari 800XL has joined the collection. This 1983 6502 home computer had 64K of RAM, Atari BASIC built in and the custom chips that made Atari 8-bit games stand out.',
];
?>
<p>A new machine has joined the collection: an <strong>Atari 800XL</strong>. The cream top has yellowed and the silver function keys are a little worn, but the keyboard is complete and the case looks undamaged.</p>

<h2>// HISTORY</h2>
<p>Atari's first home computers, the 400 and 800, came out in 1979. They used a set of custom chips designed by a team that included Jay Miner, who later designed the Amiga's chipset. The XL series in 1983 put the same design into a slimmer, cheaper case and built BASIC into the ROM. The 800XL, with 64K of RAM, became the most popular model of the range.</p>
<p>It launched in the US at $299, and its price fell quickly during the home computer price war of 1983 and 1984. After the Tramiel takeover in 1984, Atari replaced it with the XE series, which had the same chips inside. The Atari 8-bit family stayed popular in Europe for years, especially in Poland.</p>

<h2>// SPECS</h2>
<div class="command-line">
    <span class="prompt">$ cat /proc/800xl</span><br>
    CPU ........ 6502C "SALLY" @ 1.79 MHz (NTSC) / 1.77 MHz (PAL)<br>
    RAM ........ 64K<br>
    VIDEO ...... ANTIC + GTIA, up to 320x192, 256-colour palette, player/missile sprites<br>
    SOUND ...... POKEY, 4 channels<br>
    STORAGE .... cassette, floppy disk via SIO, ROM cartridges<br>
    BASIC ...... Atari BASIC, built in<br>
    I/O ........ SIO, cartridge slot, parallel bus, 2x joystick ports<br>
    <span class="cursor-blink"></span>
</div>

<h2>// HOW IT WAS USED</h2>
<p>The 800XL was mainly a games machine, and a very good one. ANTIC was effectively a separate graphics processor, so it could change screen modes and colours on every scan line and scroll smoothly. That made possible classics such as Star Raiders, Rescue on Fractalus!, Ballblazer and M.U.L.E. Built-in BASIC also made it a popular machine for learning to program, and it was used for word processing with programs like AtariWriter.</p>

<h2>// WHAT'S NEXT</h2>
<p>Here's the plan before it gets switched on:</p>
<div class="command-line">
    <span class="prompt">$ cat restore-todo.txt</span><br>
    [ ] clean the case and keyboard<br>
    [ ] test or replace the power supply (original bricks are known to fail)<br>
    [ ] power up and check the video output<br>
    [ ] try an SIO2SD or similar for modern storage<br>
    <span class="cursor-blink"></span>
</div>
<p>Progress updates will be posted here. For more vintage machines, see the <a href="/hardware">hardware section</a>.</p>
