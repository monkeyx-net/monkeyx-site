<?php
$page_title   = '8 & 16 Bit Hardware';
$current_page = 'hardware';
require 'includes/head.php';
?>

<h1>// HARDWARE DEEP DIVE :: 8 &amp; 16 BIT COMPUTERS</h1>

<div class="grid-hardware">
    <div class="hw-card">
        <span class="prompt"># 8-BIT MACHINES</span><br><br>
        ▸ Commodore 64 – VIC-II sprites, SID audio<br>
        ▸ ZX Spectrum – colour clash &amp; ULA tricks<br>
        ▸ Atari 800 – ANTIC &amp; GTIA chipset<br>
        ▸ Apple II – softswitch &amp; hi-res graphics
    </div>
    <div class="hw-card">
        <span class="prompt"># 16-BIT POWERHOUSES</span><br><br>
        ▸ Amiga 500 – Copper &amp; Blitter, parallax<br>
        ▸ Atari ST – MIDI &amp; demoscene<br>
        ▸ Mega Drive (Genesis) – VDP &amp; 68k asm<br>
        ▸ Amstrad CPC – Mode 7 &amp; HDMA effects
    </div>
</div>

<hr class="section-divider">

<h2>// C64 PROGRAMMING</h2>
<h3>Memory map &amp; background colour</h3>
<div class="code-block"><pre><code>; Commodore 64: change background colour (green $0D)
LDA #$0D
STA $D021   ; background color register
; sprite pointers at $07F8
; VIC-II bank: $D000–$DFFF</code></pre></div>

<h3>Raster interrupt skeleton</h3>
<div class="code-block"><pre><code>; Set up raster IRQ at line 100
SEI
LDA #&lt;raster_isr
STA $0314
LDA #&gt;raster_isr
STA $0315
LDA #100
STA $D012        ; target raster line
LDA $D011
AND #$7F
STA $D011        ; clear bit 8 of raster
LDA #$01
STA $D01A        ; enable raster IRQ
CLI

raster_isr:
    INC $D020    ; flash border – replace with effect
    ASL $D019    ; ack IRQ
    JMP $EA31    ; return via KERNAL</code></pre></div>

<hr class="section-divider">

<h2>// AMIGA 500 – COPPER &amp; BLITTER</h2>
<div class="command-line">
    <span class="prompt">amiga:~$</span> cat copper_notes.txt<br>
    Copper runs in sync with the beam – change colours mid-screen for free gradients.<br>
    Blitter handles fast block moves: fills, line draws, sprite compositing in hardware.<br>
    OCS chip set: 32 colours on screen (EHB: 64), 8 hardware sprites, 4-channel audio.
</div>

<hr class="section-divider">

<h2>// AMSTRAD CPC – HARDWARE</h2>
<div class="command-line">
    <span class="prompt">amstrad:~$</span> cat cpc.txt<br>
    Amstrad CPC 464/664/6128 – Z80A CPU at 4 MHz, up to 128KB RAM.<br>
    Gate Array controls display modes: Mode 0 (16 col), Mode 1 (4 col), Mode 2 (2 col).<br>
    AY-3-8912 sound chip, 3 channels. Tape and 3" disc storage.
</div>

<?php require 'includes/footer.php'; ?>
