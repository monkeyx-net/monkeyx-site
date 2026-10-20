<?php
$page_title   = 'Oric Reference';
$current_page = 'hardware';
require 'includes/head.php';
?>

<h1>// ORIC REFERENCE :: ORIC-1 &amp; ATMOS</h1>

<div class="tabs" role="tablist">
    <a href="#info" class="tab" role="tab" aria-controls="tab-info">[ INFO ]</a>
    <a href="#reference" class="tab" role="tab" aria-controls="tab-reference">[ REFERENCE ]</a>
    <a href="#parts" class="tab" role="tab" aria-controls="tab-parts">[ PARTS ]</a>
    <a href="#misc" class="tab" role="tab" aria-controls="tab-misc">[ MISC ]</a>
</div>

<div class="tab-panel" id="tab-info" role="tabpanel">
    <h2>// OVERVIEW</h2>
    <p>The Oric-1 was made by Tangerine Computer Systems of Cambridge, through its spin-off Oric Products International. It launched in 1983 to compete with the ZX Spectrum and sold especially well in France. In 1984 the Oric Atmos replaced it, with the same core hardware, a fixed BASIC ROM and a proper keyboard.</p>

    <h2>// SPECS</h2>
    <div class="command-line">
        <span class="prompt">$ cat /proc/oric</span><br>
        CPU ........ 6502A @ 1 MHz<br>
        RAM ........ 16K or 48K<br>
        VIDEO ...... ULA, 240x200 hires, 40x28 text, 8 colours<br>
        SOUND ...... AY-3-8912, 3 channels<br>
        STORAGE .... cassette<br>
        BASIC ...... Oric Extended BASIC (Microsoft-derived)<br>
        I/O ........ Centronics printer port, expansion edge connector<br>
        <span class="cursor-blink"></span>
    </div>
</div>

<div class="tab-panel" id="tab-reference" role="tabpanel">
    <h2>// MEMORY MAP (48K)</h2>
    <div class="code-block"><pre><code>$0000-$00FF  zero page
$0100-$01FF  6502 stack
$0300-$03FF  I/O page (6522 VIA at $0300)
$0400-$9FFF  user RAM / BASIC program area
$A000-$BF3F  hires screen (HIRES mode)
$B400-$B7FF  standard character set (TEXT mode)
$B800-$BB7F  alternate character set (TEXT mode)
$BB80-$BFDF  text screen, 40x28
$C000-$FFFF  BASIC ROM (16K)</code></pre></div>

    <h2>// SERIAL ATTRIBUTES</h2>
    <p>Colour is set by attribute bytes stored in the screen itself. Each attribute takes up one character cell and applies to the rest of that line.</p>
    <div class="code-block"><pre><code>INK    0-7    0 black  1 red      2 green  3 yellow
PAPER 16-23   4 blue   5 magenta  6 cyan   7 white
              (paper = 16 + colour)</code></pre></div>

    <h2>// HANDY BASIC</h2>
    <div class="code-block"><pre><code>HIRES / TEXT        switch display mode
INK n / PAPER n     set colours (0-7)
CURSET x,y,fb       move graphics cursor
DRAW dx,dy,fb       relative line
CIRCLE r,fb         circle at cursor
PING / SHOOT / EXPLODE / ZAP   built-in sound effects
CLOAD "" / CSAVE "name"        tape load / save</code></pre></div>
</div>

<div class="tab-panel" id="tab-parts" role="tabpanel">
    <h2>// MAIN CHIPS</h2>
    <div class="command-line">
        <span class="prompt">$ lsic</span><br>
        6502A ...... CPU<br>
        ULA ........ video and system logic (custom)<br>
        6522 ....... VIA: keyboard, tape, printer, timers<br>
        AY-3-8912 .. sound, also scans the keyboard rows<br>
        <span class="cursor-blink"></span>
    </div>

    <h2>// SPARES LIST</h2>
    <div class="command-line">
        <span class="prompt">$ cat spares.txt</span><br>
        [ ] power supply (check voltage and polarity before use)<br>
        [ ] keyboard membrane<br>
        [ ] video cable<br>
        <span class="cursor-blink"></span>
    </div>
</div>

<div class="tab-panel" id="tab-misc" role="tabpanel">
    <h2>// MISC</h2>
    <p>Collection posts:</p>
    <p>
        ▸ <a href="/blog/oric-1">New Arrival: Oric-1</a><br>
        ▸ <a href="/blog/oric-atmos">New Arrival: Oric Atmos</a>
    </p>
</div>

<?php require 'includes/footer.php'; ?>
