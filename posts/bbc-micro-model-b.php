<?php
$post_meta = [
    'title'   => 'New Arrival: BBC Micro Model B',
    'date'    => '2026-10-19',
    'slug'    => 'bbc-micro-model-b',
    'tags'    => ['hardware'],
    'image'   => 'images/blog/bbc-micro-model-b.webp',
    'summary' => 'A BBC Micro Model B has joined the collection, complete with an Elite function key strip. This 1981 Acorn machine taught a generation of British schoolchildren to program.',
];
?>
<p>A new machine has joined the collection: an Acorn <strong>BBC Micro Model B</strong>. It still has an <em>Elite</em> function key strip in place above the red keys. The case is yellowed and dusty, but the keyboard looks complete.</p>

<h2>// HISTORY</h2>
<p>The BBC Micro came out of the BBC's Computer Literacy Project, which wanted a computer to go with its TV series about computing. Acorn won the contract and launched the machine in December 1981. The Model A cost £235 and the Model B £335, and the price of the Model B soon rose to £399. A government scheme helped schools buy them, and the BBC Micro became the standard school computer in Britain for most of the 1980s.</p>
<p>Acorn expected to sell about 12,000. In the end it sold around 1.5 million. The machine also led directly to the ARM processor: Acorn designed its own CPU for the BBC's successor, the <a href="/blog/acorn-archimedes-310">Archimedes</a>.</p>

<h2>// SPECS</h2>
<div class="command-line">
    <span class="prompt">$ cat /proc/bbcb</span><br>
    CPU ........ 6502A @ 2 MHz<br>
    RAM ........ 32K<br>
    ROM ........ 32K, BBC BASIC and the Acorn MOS, plus sideways ROM sockets<br>
    VIDEO ...... modes 0-7, up to 640x256, 8 colours, teletext mode 7<br>
    SOUND ...... SN76489, 3 channels + noise<br>
    STORAGE .... cassette, optional floppy disk interface<br>
    I/O ........ Tube, 1MHz bus, user port, printer, RS-423, analogue, Econet<br>
    <span class="cursor-blink"></span>
</div>

<h2>// HOW IT WAS USED</h2>
<p>For a whole generation in Britain, the BBC Micro was the machine in the corner of the classroom. Its fast, well-structured BBC BASIC included a built-in assembler, and its many ports made it a favourite for school science projects and robotics. Econet networking let schools share printers and disk drives. At home it ran some landmark games, most famously <em>Elite</em> by David Braben and Ian Bell in 1984, the game this key strip came from.</p>

<h2>// WHAT'S NEXT</h2>
<p>Here's the plan before it gets switched on:</p>
<div class="command-line">
    <span class="prompt">$ cat restore-todo.txt</span><br>
    [ ] clean the case and keyboard<br>
    [ ] replace the PSU's RIFA filter capacitors before powering on<br>
    [ ] power up and check the video output<br>
    [ ] check which ROMs and upgrades are fitted<br>
    <span class="cursor-blink"></span>
</div>
<p>Progress updates will be posted here. For more vintage machines, see the <a href="/hardware">hardware section</a>.</p>
