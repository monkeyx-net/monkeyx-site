<?php
$page_title   = 'LÖVE2D';
$current_page = 'love2d';
require 'includes/head.php';
?>

<h1>// LÖVE2D : lua-powered prototyping</h1>
<p>Fast iteration, immediate feedback. Ideal for game jams and 8-bit RPGs.</p>

<div class="code-block"><pre><code>-- conf.lua
function love.conf(t)
    t.window.title     = "GREEN RETRO"
    t.window.width     = 640
    t.window.height    = 480
    t.window.vsync     = 0
    t.window.resizable = false
end
-- main.lua
function love.draw()
    love.graphics.setColor(0, 0.8, 0, 1)
    love.graphics.rectangle("fill", 10, 10, 100, 100)
    love.graphics.print("&gt; LÖVE2D retro engine ready", 20, 150)
end</code></pre></div>

<p><span class="prompt">$ love .</span> → native performance, easy tilemaps, sfxr integration.</p>

<hr class="section-divider">

<h2>// USEFUL PATTERNS</h2>

<h3>Fixed timestep game loop</h3>
<div class="code-block"><pre><code>local dt_accum = 0
local TICK = 1/60
function love.update(dt)
    dt_accum = dt_accum + dt
    while dt_accum &gt;= TICK do
        game_tick(TICK)
        dt_accum = dt_accum - TICK
    end
end</code></pre></div>

<h3>Retro palette via shader</h3>
<div class="code-block"><pre><code>-- phosphor green post-process
local shader = love.graphics.newShader([[
    vec4 effect(vec4 color, Image tex, vec2 uv, vec2 px) {
        vec4 c = Texel(tex, uv);
        float lum = dot(c.rgb, vec3(0.299, 0.587, 0.114));
        return vec4(0.0, lum * 1.2, 0.0, c.a) * color;
    }
]])
function love.draw()
    love.graphics.setShader(shader)
    -- draw scene
    love.graphics.setShader()
end</code></pre></div>

<h3>Key libraries</h3>
<div class="grid-hardware">
    <div class="hw-card">
        <span class="prompt"># AUDIO</span><br><br>
        ▸ sfxr.lua – procedural SFX<br>
        ▸ flux – tweening library<br>
        ▸ love.audio.newSource – stream music
    </div>
    <div class="hw-card">
        <span class="prompt"># MAPS / SPRITES</span><br><br>
        ▸ STI – Simple Tiled Implementation<br>
        ▸ anim8 – sprite animation<br>
        ▸ bump.lua – AABB collision
    </div>
</div>

<?php require 'includes/footer.php'; ?>
