<?php
$post_meta = [
    'title'   => 'Getting Started with SDL2 in C',
    'date'    => '2026-05-20',
    'slug'    => 'getting-started-sdl2',
    'tags'    => ['sdl2', 'tutorial', 'c'],
    'image'   => 'images/blog/getting-started-sdl2.webp',
    'summary' => 'A minimal SDL2 setup in C: window creation, the event loop, and rendering a moving sprite — covering the exact boilerplate you need to build on.',
];
?>
<p>SDL2 is the closest thing the retro game dev world has to a standard cross-platform foundation. This post covers the minimum viable setup — window, renderer, event loop, and a sprite that moves. Nothing else.</p>

<h2>// PREREQUISITES</h2>
<p>You need SDL2 installed and a C compiler. On Debian/Ubuntu:</p>

<div class="code-block"><pre><code>sudo apt install libsdl2-dev libsdl2-image-dev gcc</code></pre></div>

<h2>// THE WINDOW</h2>
<p>SDL2 initialisation always follows the same pattern: init the subsystem, create a window, create a renderer, then enter the loop.</p>

<div class="code-block"><pre><code>#include &lt;SDL2/SDL.h&gt;

int main(void) {
    SDL_Init(SDL_INIT_VIDEO);

    SDL_Window   *win = SDL_CreateWindow("Hello SDL2",
        SDL_WINDOWPOS_CENTERED, SDL_WINDOWPOS_CENTERED,
        640, 480, 0);
    SDL_Renderer *ren = SDL_CreateRenderer(win, -1,
        SDL_RENDERER_ACCELERATED | SDL_RENDERER_PRESENTVSYNC);

    int running = 1;
    SDL_Event e;

    while (running) {
        while (SDL_PollEvent(&amp;e))
            if (e.type == SDL_QUIT) running = 0;

        SDL_SetRenderDrawColor(ren, 0, 0, 0, 255);
        SDL_RenderClear(ren);
        SDL_RenderPresent(ren);
    }

    SDL_DestroyRenderer(ren);
    SDL_DestroyWindow(win);
    SDL_Quit();
    return 0;
}</code></pre></div>

<h2>// ADDING A SPRITE</h2>
<p>Load a PNG with SDL_image, track a position, and render it each frame.</p>

<div class="code-block"><pre><code>#include &lt;SDL2/SDL_image.h&gt;

// after renderer creation:
IMG_Init(IMG_INIT_PNG);
SDL_Texture *tex = IMG_LoadTexture(ren, "sprite.png");

float x = 100, y = 100;
const float speed = 120.0f; // pixels per second
Uint64 prev = SDL_GetTicks64();

while (running) {
    Uint64 now   = SDL_GetTicks64();
    float  delta = (now - prev) / 1000.0f;
    prev = now;

    // poll events, check SDL_SCANCODE_* keys ...
    const Uint8 *keys = SDL_GetKeyboardState(NULL);
    if (keys[SDL_SCANCODE_RIGHT]) x += speed * delta;
    if (keys[SDL_SCANCODE_LEFT])  x -= speed * delta;

    SDL_Rect dst = { (int)x, (int)y, 32, 32 };
    SDL_RenderClear(ren);
    SDL_RenderCopy(ren, tex, NULL, &amp;dst);
    SDL_RenderPresent(ren);
}</code></pre></div>

<div class="command-line">
    <span class="prompt">$ gcc main.c -o game $(sdl2-config --cflags --libs) -lSDL2_image</span><br>
    <span class="prompt">$ ./game</span><br>
    [OK] window created at 640x480<br>
    <span class="cursor-blink"></span>
</div>

<h2>// WHAT'S NEXT</h2>
<p>From here the patterns repeat: load more textures, track more state, add collision rectangles. The <a href="/sdl2">SDL2/C section</a> on this site covers sprite sheets, tilemaps, and audio in more detail.</p>
