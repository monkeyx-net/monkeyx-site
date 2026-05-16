<?php
$page_title   = 'Tools & Emulation';
$current_page = 'tools';
require 'includes/head.php';
?>

<h2>// TOOLS / EMULATION :::</h2>
<div class="command-line">
    <span class="prompt">$ retro-tools --list</span><br>
    ─ SDL2: <a href="https://libsdl.org">libsdl.org</a> &nbsp;|&nbsp; Godot shaders: <a href="https://godotshaders.com">godotshaders.com</a><br>
    ─ LÖVE2D: <a href="https://love2d.org">love2d.org</a><br>
    ─ Emulators: VICE (C64), FS-UAE (Amiga), BlastEm (Genesis), Mesen (NES), WinAPE (Amstrad CPC)<br>
    ─ Docs: <a href="https://zimmers.net/cbm">zimmers.net/cbm</a> &nbsp;|&nbsp; <a href="https://amigadev.elowar.com">amigadev.elowar.com</a>
</div>

<hr class="section-divider">

<h2>// EMULATORS</h2>
<div class="grid-hardware">
    <div class="hw-card">
        <span class="prompt"># 8-BIT</span><br><br>
        ▸ <a href="https://vice-emu.sourceforge.io">VICE</a> – Commodore 64/128/PET<br>
        ▸ <a href="https://fuse-emulator.sourceforge.net">Fuse</a> – ZX Spectrum<br>
        ▸ <a href="https://atari800.github.io">Atari800</a> – Atari 8-bit<br>
        ▸ <a href="https://www.applefritter.com">AppleWin</a> – Apple II
    </div>
    <div class="hw-card">
        <span class="prompt"># 16-BIT</span><br><br>
        ▸ <a href="https://fs-uae.net">FS-UAE</a> – Amiga 500/1200<br>
        ▸ <a href="https://hatari.tuxfamily.org">Hatari</a> – Atari ST/STE<br>
        ▸ <a href="https://github.com/binbashbanana/blastem">BlastEm</a> – Sega Genesis<br>
        ▸ <a href="https://www.mesen.ca">Mesen</a> – NES<br>
        ▸ <a href="https://www.winape.net">WinAPE</a> – Amstrad CPC
    </div>
</div>

<hr class="section-divider">

<h2>// ASSET &amp; DEV TOOLS</h2>
<div class="grid-hardware">
    <div class="hw-card">
        <span class="prompt"># GRAPHICS</span><br><br>
        ▸ <a href="https://www.aseprite.org">Aseprite</a> – pixel art editor<br>
        ▸ <a href="https://libresprite.github.io">LibreSprite</a> – free Aseprite fork<br>
        ▸ <a href="https://lospec.com/palette-list">Lospec</a> – retro palettes<br>
        ▸ <a href="https://www.mapeditor.org">Tiled</a> – tilemap editor
    </div>
    <div class="hw-card">
        <span class="prompt"># AUDIO</span><br><br>
        ▸ <a href="https://sfxr.me">sfxr.me</a> – 8-bit SFX generator<br>
        ▸ <a href="https://famitracker.org">FamiTracker</a> – NES chiptune<br>
        ▸ <a href="https://deflemask.com">DefleMask</a> – Genesis FM tracker<br>
        ▸ <a href="https://openmpt.org">OpenMPT</a> – MOD / XM tracker
    </div>
</div>

<hr class="section-divider">

<h2>// REFERENCE DOCS</h2>
<div class="command-line">
    <span class="prompt">$ cat bookmarks.txt</span><br>
    C64 memory map: <a href="https://sta.c64.org/cbm64mem.html">sta.c64.org/cbm64mem.html</a><br>
    Amstrad CPC wiki: <a href="https://www.cpcwiki.eu">cpcwiki.eu</a><br>
    Genesis VDP:    <a href="https://segaretro.org/Sega_Mega_Drive/Technical_specifications">segaretro.org</a><br>
    Amiga hardware: <a href="https://amigadev.elowar.com">amigadev.elowar.com</a><br>
    6502 ref:       <a href="https://www.6502.org">6502.org</a>
</div>

<?php require 'includes/footer.php'; ?>
