<?php
$post_meta = [
    'title'   => 'New Arrival: Intertec SuperBrain',
    'date'    => '2026-10-18',
    'slug'    => 'intertec-superbrain',
    'tags'    => ['hardware'],
    'image'   => 'images/blog/intertec-superbrain.webp',
    'summary' => 'Recently acquired in September 2026: an Intertec Data Systems SuperBrain, a 1979 all-in-one Z80 CP/M business machine with twin floppy drives built into its distinctive wedge-shaped case.',
];
?>
<p>A new machine joined the collection in September 2026: an <strong>Intertec Data Systems SuperBrain</strong>. It's a UK-plugged unit with the original keyboard, the twin 5.25" drives, and decades of dust and yellowing on its beige keycaps. It hasn't been powered up yet. That will have to wait until it has had a proper inspection.</p>

<h2>// HISTORY</h2>
<p>Intertec Data Systems was based in Columbia, South Carolina, and was best known for its video terminals. In 1979 it launched the SuperBrain, an all-in-one business microcomputer that put the CPU, display, keyboard and two floppy drives into a single moulded case. It sold for roughly $3,000. That was a lot of money, but much less than a minicomputer setup, which made it a serious option for small offices that wanted to run CP/M.</p>
<p>The machine went through several revisions. These included the SuperBrain QD, whose quad-density drives roughly doubled disk capacity, and the later SuperBrain II. Intertec also sold models with an optional hard disk. By the mid-1980s the IBM PC and MS-DOS had overtaken CP/M, and the SuperBrain line faded along with it.</p>

<h2>// SPECS</h2>
<div class="command-line">
    <span class="prompt">$ cat /proc/superbrain</span><br>
    CPU ........ 2x Z80A @ ~4 MHz (main CPU + dedicated disk I/O)<br>
    RAM ........ 32K or 64K<br>
    DISPLAY .... 12" monochrome CRT, 80x24 text<br>
    STORAGE .... 2x 5.25" floppy drives (~170K each, standard model)<br>
    OS ......... CP/M 2.2<br>
    I/O ........ RS-232 serial ports, expansion bus<br>
    KEYBOARD ... integrated, with numeric keypad<br>
    <span class="cursor-blink"></span>
</div>

<h2>// HOW IT WAS USED</h2>
<p>The SuperBrain was built for office work. Because it ran standard CP/M, it could use the large CP/M software library from day one. Typical setups included WordStar for word processing, dBase II for databases, SuperCalc for spreadsheets, and a long list of accounting and payroll packages. The built-in numeric keypad was there for data entry.</p>
<p>The serial ports also meant it was often used as an intelligent terminal for larger systems. That made sense, since terminals were Intertec's main business. The all-in-one design was easy to set up, so the machine turned up in small businesses, schools and labs on both sides of the Atlantic.</p>

<h2>// WHAT'S NEXT</h2>
<p>Here's the plan before it gets switched on:</p>
<div class="command-line">
    <span class="prompt">$ cat restore-todo.txt</span><br>
    [ ] strip down and clean the case and keyboard<br>
    [ ] inspect the PSU and replace any suspect capacitors<br>
    [ ] power up on a variac and check the CRT<br>
    [ ] clean and test both floppy drives<br>
    [ ] boot CP/M 2.2<br>
    <span class="cursor-blink"></span>
</div>
<p>Progress updates will be posted here. For more vintage machines, see the <a href="/hardware">hardware section</a>.</p>
