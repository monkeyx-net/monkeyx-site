<?php
$page_title   = 'PortMaster';
$current_page = 'portmaster';
require 'includes/head.php';
?>

<h1>// PORTMASTER : retro on handhelds</h1>
<p>Port games to ARM handhelds (RG35XX, TrimUI, Retroid, etc.) using SDL2, Godot, and LÖVE2D runtimes.</p>

<div class="command-line">
    <span class="prompt">portmaster@handheld:~$</span> cat quickstart.txt<br>
    [1] Install PortMaster from <a href="https://portmaster.games">portmaster.games</a><br>
    [2] Drop <em>.port</em> folder into <code>ports/</code><br>
    [3] Launch via PortMaster UI or ES-DE<br>
    <br>
    Structure: mygame.port/<br>
    ├── MyGame.sh          # launch script<br>
    ├── MyGame.squashfs    # bundled runtime + assets<br>
    └── port.json          # metadata (title, desc, author)
</div>

<hr class="section-divider">

<h2>// RUNTIME TARGETS</h2>
<div class="grid-hardware">
    <div class="hw-card">
        <span class="prompt"># SDL2</span><br><br>
        ▸ C/C++ with SDL2 runtime<br>
        ▸ Use <code>gptokeyb</code> for input<br>
        ▸ 320×240 or native resolution<br>
        ▸ Frame cap to 60 FPS
    </div>
    <div class="hw-card">
        <span class="prompt"># GODOT 4</span><br><br>
        ▸ Export for ARM Linux<br>
        ▸ Use <code>godot-4.2</code> runtime<br>
        ▸ Low-res viewports (320×240)<br>
        ▸ Touch + controller input
    </div>
    <div class="hw-card">
        <span class="prompt"># LÖVE2D</span><br><br>
        ▸ Bundle .love with runtime<br>
        ▸ Use <code>love-12.0</code> runtime<br>
        ▸ love.graphics.scale for pixel art<br>
        ▸ love.audio for chiptune
    </div>
</div>

<hr class="section-divider">

<h2>// PORT.JSON TEMPLATE</h2>
<div class="code-block"><pre><code>{
  "title":    "My Game",
  "desc":     "Description of the port",
  "author":   "Your Name",
  "version":  "1.0",
  "runtime":  "sdl2_20",
  "req_arm":  true,
  "req_gl":   true
}</code></pre></div>

<hr class="section-divider">

<h2>// RESOURCES</h2>
<div class="command-line">
    <span class="prompt">$ cat resources.txt</span><br>
    ▸ PortMaster: <a href="https://portmaster.games">portmaster.games</a><br>
    ▸ Docs: <a href="https://github.com/PortsMaster/PortMaster-Info">github.com/PortsMaster/PortMaster-Info</a><br>
    ▸ Discord: <a href="https://discord.gg/portmaster">discord.gg/portmaster</a><br>
    ▸ Runtimes: SDL2-2.28 / Godot 4.2 / LÖVE 12.0<br>
    ▸ Tools: gptokeyb (keyboard mapping), squashfs-tools (bundling)
</div>

<?php require 'includes/footer.php'; ?>
