<?php
$post_meta = [
    'title'   => 'New Arrival: Acorn Archimedes 310',
    'date'    => '2026-10-19',
    'slug'    => 'acorn-archimedes-310',
    'tags'    => ['hardware'],
    'image'   => 'images/blog/acorn-archimedes-310.webp',
    'summary' => 'A full Acorn Archimedes 310 setup has joined the collection: computer, colour monitor, keyboard and mouse. The 1987 Archimedes was the first computer built around an ARM processor.',
];
?>
<p>A new machine has joined the collection: a complete <strong>Acorn Archimedes 310</strong> setup, with the base unit, the Acorn RGB colour monitor, the keyboard and the three-button mouse. All the parts carry stickers from <em>Data Exchange</em>, the dealer that originally sold it. The phone number on them uses the old 051 dialling code for Liverpool.</p>

<h2>// HISTORY</h2>
<p>When Acorn started planning a successor to the <a href="/blog/bbc-micro-model-b">BBC Micro</a>, it found that no existing processor met its needs. So Sophie Wilson and Steve Furber designed their own: the Acorn RISC Machine, or ARM. The Archimedes launched in 1987 as the first computer built around it. The 310 had 1MB of RAM and cost around £875 plus VAT. In everyday tasks it was much faster than the Amiga, the Atari ST and most PCs of the time.</p>
<p>The first machines shipped with an operating system called Arthur, which was soon replaced by RISC OS. The ARM chip itself went on to power almost every mobile phone in the world.</p>

<h2>// SPECS</h2>
<div class="command-line">
    <span class="prompt">$ cat /proc/a310</span><br>
    CPU ........ ARM2 @ 8 MHz<br>
    RAM ........ 1MB<br>
    VIDEO ...... VIDC, up to 640x512, 256 colours from a 4096-colour palette<br>
    SOUND ...... 8-channel 8-bit stereo<br>
    STORAGE .... 3.5" floppy (800K ADFS)<br>
    OS ......... Arthur at launch, later RISC OS 2 and 3<br>
    I/O ........ printer, serial, expansion card slots (with a backplane)<br>
    <span class="cursor-blink"></span>
</div>

<h2>// HOW IT WAS USED</h2>
<p>Most Archimedes machines went to British schools, where they took over from the BBC Micro. Acorn shipped a BBC BASIC that ran much faster on the ARM, plus a BBC Micro emulator. Its speed also made it good for graphics and DTP, with programs like Impression and ArtWorks. Its games include <em>Zarch</em>, David Braben's filled-3D game written to show what the ARM could do, which was later ported to other machines as <em>Virus</em>.</p>

<h2>// WHAT'S NEXT</h2>
<p>Here's the plan before it gets switched on:</p>
<div class="command-line">
    <span class="prompt">$ cat restore-todo.txt</span><br>
    [ ] check the motherboard for battery leakage and remove the CMOS battery<br>
    [ ] inspect the PSU and replace any suspect capacitors<br>
    [ ] power up the monitor on a variac<br>
    [ ] boot and check which OS ROMs are fitted<br>
    <span class="cursor-blink"></span>
</div>
<p>Progress updates will be posted here. For more vintage machines, see the <a href="/hardware">hardware section</a>.</p>
