<?php
$post_meta = [
    'title'   => 'New Arrival: Commodore CBM 4040',
    'date'    => '2026-10-19',
    'slug'    => 'commodore-cbm-4040',
    'tags'    => ['hardware'],
    'image'   => 'images/blog/commodore-cbm-4040.webp',
    'summary' => 'A Commodore CBM 4040 has joined the collection. This IEEE-488 dual 5.25" floppy drive for the PET and CBM machines has its own built-in disk operating system.',
];
?>
<p>A new piece of hardware has joined the collection: a <strong>Commodore CBM 4040</strong> dual floppy drive. It has a UK plug, both drive doors are intact, and there's a disk still sitting in drive 0.</p>

<h2>// HISTORY</h2>
<p>The 4040 replaced the earlier 2040 around 1980. Its main change was Commodore DOS 2.x, which added relative (random-access) files and was more reliable. Owners of the 2040 could upgrade to the same standard by fitting new ROMs. Like every Commodore drive of the era, the 4040 was a computer in its own right. Its processors ran the disk operating system inside the drive, so the PET's limited memory didn't have to.</p>
<p>The 4040 used the same 35-track GCR disk format that the Commodore 1541 later used. As a result, disks it writes can usually be read on a C64 drive.</p>

<h2>// SPECS</h2>
<div class="command-line">
    <span class="prompt">$ cat /proc/cbm4040</span><br>
    DRIVES ..... 2x 5.25" single-sided floppy<br>
    CAPACITY ... ~170K per disk<br>
    FORMAT ..... GCR, 35 tracks<br>
    CPUS ....... 6502 (DOS) + 6504 (drive controller)<br>
    DOS ........ Commodore DOS 2.1<br>
    INTERFACE .. IEEE-488<br>
    <span class="cursor-blink"></span>
</div>

<h2>// HOW IT WAS USED</h2>
<p>The 4040 was the standard disk drive for PET and CBM systems in schools and offices. With two drives, users could copy and back up disks without swapping them. One drive held the program and the other held the data, which suited business software like WordPro and accounts packages. It will make a good partner for the CBM 8032 that also just joined the collection.</p>

<h2>// WHAT'S NEXT</h2>
<p>Here's the plan before it gets switched on:</p>
<div class="command-line">
    <span class="prompt">$ cat restore-todo.txt</span><br>
    [ ] remove the disk left in drive 0<br>
    [ ] inspect the PSU and replace any suspect capacitors<br>
    [ ] clean the heads and lubricate the rails<br>
    [ ] run the drive self-test and format a disk from the CBM 8032<br>
    <span class="cursor-blink"></span>
</div>
<p>Progress updates will be posted here. For more vintage machines, see the <a href="/hardware">hardware section</a>.</p>
