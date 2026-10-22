<?php
$post_meta = [
    'title'   => 'Released: Jet Set Willy Construction Kit',
    'date'    => '2026-10-22',
    'slug'    => 'jet-set-willy',
    'tags'    => ['sdl2', 'c', 'games'],
    'image'   => 'images/blog/jet-set-willy.webp',
    'summary' => 'Jet Set Willy is now in the games archive: a C/SDL2 port of the 1984 ZX Spectrum classic with hi-res graphics, save states and replays, plus a browser editor for all 60 rooms.',
];
?>
<p><strong>Jet Set Willy</strong> is now in the <a href="/games">games archive</a>. The Jet Set Willy Construction Kit is a C/SDL2 port of the 1984 ZX Spectrum game for Linux, Mac, Windows and the browser, with an editor for every room in the mansion. Source is <a href="https://github.com/monkeyx-net/JetSetWilly-Consrtuction">on GitHub</a>.</p>

<h2>// THE GAME</h2>
<p>Matthew Smith wrote Jet Set Willy for Software Projects in 1984, as the sequel to Manic Miner. Willy has spent his mining fortune on a mansion, and after the housewarming party his housekeeper Maria won't let him go to bed until the place is tidy. You explore 60 rooms of the house and grounds, from the cellars to the roof, and collect every item before the clock strikes midnight.</p>

<h2>// THE PORT</h2>
<p>The port is a hard fork of Steve Clark's (fawtytoo) SDL2 version of the game, under the same zlib licence. It is built the same way as its sister project, the Manic Miner Construction Kit. The game logic and collisions are the original's; everything else moved out of the C code into data files:</p>
<div class="command-line">
    <span class="prompt">$ cat features.txt</span><br>
    GFX ........ hi-res 512×384 screen drawn from PNG sheets, fullscreen or windowed (F11)<br>
    FONTS ...... SDL_ttf fonts made from the original bitmap fonts<br>
    AUDIO ...... OGG music and effects rendered from the original synth, tune slows with each life lost<br>
    ROOMS ...... all 60 rooms, NPCs, sprites and the rope in levels.json<br>
    SAVES ...... 5 save-state slots and replay recording<br>
    OPTIONS .... lives, music, replay; best item count and finishing time<br>
    DEMO ....... a tour of the rooms from the title screen<br>
    PADS ....... game controller support, touch controls in the browser<br>
    PACKAGES ... Linux x64/arm64, macOS arm64, Windows x64, WebAssembly<br>
    <span class="cursor-blink"></span>
</div>

<h2>// THE ROOM EDITOR</h2>
<p>The <a href="/retro/games/jet-set-willy/editor/">room editor</a> runs in the browser and edits <code>levels.json</code> directly. You can paint the 32×16 tile grid of each room, design the 8×8 tiles and set their type and colours, place items, the rope and Willy's start, and set each room's name, border and exits. NPCs and their paths are edited on the map, and the sprite designer covers every NPC sprite and Willy's 16 frames. Export the file and the game picks up your mansion.</p>
<div class="code-block"><pre><code>git clone https://github.com/monkeyx-net/JetSetWilly-Consrtuction.git
cd JetSetWilly-Consrtuction
make            # native build, needs SDL2, SDL2_image, SDL2_mixer, SDL2_ttf
make web        # Emscripten build, with the editor</code></pre></div>

<p>See the <a href="/jet-set-willy">Jet Set Willy game page</a> for the full controls, or get the source on <a href="https://github.com/monkeyx-net/JetSetWilly-Consrtuction">GitHub</a>.</p>
