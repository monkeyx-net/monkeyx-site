<?php
$post_meta = [
    'title'   => 'New Arrival: Oric-1',
    'date'    => '2026-10-19',
    'slug'    => 'oric-1',
    'tags'    => ['hardware'],
    'image'   => 'images/blog/oric-1.webp',
    'summary' => 'An Oric-1 has joined the collection. This 1983 British 6502 home computer was launched to compete with the ZX Spectrum and became a hit in France.',
];
?>
<p>A new machine has joined the collection: an <strong>Oric-1</strong>. It's a clean example, with the cream case and the blue pinstripes intact, though the keys and case have yellowed over the years.</p>

<h2>// HISTORY</h2>
<p>The Oric-1 was made by Tangerine Computer Systems, a Cambridge company, through its spin-off Oric Products International. It launched in early 1983 at £129.95 for the 16K model and £169.95 for the 48K model, which put it in direct competition with the ZX Spectrum. It sold respectably in the UK, but it did much better in France, where it was one of the best-selling home computers of its time.</p>
<p>Early machines shipped with a buggy BASIC ROM, and the Oric's reputation suffered for it. In 1984 the company replaced it with the Oric Atmos, which had the same core hardware.</p>

<h2>// SPECS</h2>
<div class="command-line">
    <span class="prompt">$ cat /proc/oric1</span><br>
    CPU ........ 6502A @ 1 MHz<br>
    RAM ........ 16K or 48K<br>
    VIDEO ...... ULA, 240x200 hires, 40x28 text, 8 colours<br>
    SOUND ...... AY-3-8912, 3 channels + built-in speaker<br>
    STORAGE .... cassette<br>
    BASIC ...... Oric Extended BASIC (Microsoft-derived)<br>
    I/O ........ Centronics printer port, expansion edge connector<br>
    KEYBOARD ... 57 hard plastic "calculator" keys<br>
    <span class="cursor-blink"></span>
</div>

<h2>// HOW IT WAS USED</h2>
<p>The Oric-1 was a home computer for games and learning to program. Its AY sound chip was a real advantage over the Spectrum's beeper, and the built-in printer port was unusual at this price. The display set colours with serial attributes, similar to teletext. That made colourful graphics fiddly to program, but programmers found clever ways around it.</p>

<h2>// WHAT'S NEXT</h2>
<p>Here's the plan before it gets switched on:</p>
<div class="command-line">
    <span class="prompt">$ cat restore-todo.txt</span><br>
    [ ] open up and clean the case and keyboard<br>
    [ ] find or build a suitable 9V power supply<br>
    [ ] power up and check the video output<br>
    [ ] load some software from tape<br>
    <span class="cursor-blink"></span>
</div>
<p>Progress updates will be posted here. For more vintage machines, see the <a href="/hardware">hardware section</a>.</p>
