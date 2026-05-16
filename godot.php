<?php
$page_title   = 'Godot 4';
$current_page = 'godot';
require 'includes/head.php';
?>

<h1>// GODOT 4 : pixel-perfect retro pipelines</h1>
<p>Achieve 8/16-bit looks using custom shaders, low-res viewports, and palette restrictions. CRT scanline shader snippet:</p>

<div class="code-block"><pre><code>// Retro Shader : scanlines + green phosphor (Godot ShaderLang)
shader_type canvas_item;
void fragment() {
    vec4 col   = texture(TEXTURE, UV);
    float scan = sin(SCREEN_UV.y * 400.0) * 0.15;
    vec3 green_hue = vec3(0.2, 0.9, 0.2);
    COLOR.rgb = (col.rgb + green_hue) * (0.8 + scan);
    COLOR.r   = COLOR.r * 0.6;
    COLOR.g   = COLOR.g * 1.2;
}</code></pre></div>

<p>
    <span class="prompt">>_</span> Use <strong>TileMapLayer</strong> + 256×224 resolution,
    <strong>sprite flickering</strong> for transparency effects. Export to HTML5 or desktop.
</p>

<hr class="section-divider">

<h2>// RETRO SETUP CHECKLIST</h2>
<div class="command-line">
    <span class="prompt">retro@godot:~$</span> cat setup.md<br>
    [1] Project → Window → Viewport Width: 320, Height: 240<br>
    [2] Rendering → 2D → Snap 2D Transforms to Pixel<br>
    [3] Import pixel art sprites → Filter: Nearest<br>
    [4] Add CanvasLayer + ColorRect with CRT shader<br>
    [5] Use TileMapLayer for tilemaps, 16×16 tiles
</div>

<h3>Palette restriction shader</h3>
<div class="code-block"><pre><code>// Limit to N colours – dither to nearest palette entry
shader_type canvas_item;
uniform sampler2D palette;
uniform int palette_size = 16;
void fragment() {
    vec4 col = texture(TEXTURE, UV);
    float best_dist = 1e9;
    vec3 best_col   = col.rgb;
    for (int i = 0; i &lt; palette_size; i++) {
        vec3 pc = texelFetch(palette, ivec2(i, 0), 0).rgb;
        float d = distance(col.rgb, pc);
        if (d &lt; best_dist) { best_dist = d; best_col = pc; }
    }
    COLOR = vec4(best_col, col.a);
}</code></pre></div>

<?php require 'includes/footer.php'; ?>
