<?php
$page_title   = 'SDL2 + C';
$current_page = 'sdl2';
require 'includes/head.php';
?>

<h1>// SDL2 + C : bare-metal retro coding</h1>
<p>Write cross-platform games with <strong>SDL2</strong> and <strong>C</strong>. Full control, low latency, perfect for classic arcade or 16-bit style engines.</p>

<div class="code-block"><pre><code>// minimal_sdl2_retro.c
#include &lt;SDL2/SDL.h&gt;
int main(int argc, char* argv[]) {
    SDL_Init(SDL_INIT_VIDEO);
    SDL_Window*   win = SDL_CreateWindow("Retro Green",
        SDL_WINDOWPOS_CENTERED, SDL_WINDOWPOS_CENTERED, 640, 480, 0);
    SDL_Renderer* ren = SDL_CreateRenderer(win, -1, SDL_RENDERER_SOFTWARE);
    int running = 1;
    SDL_Event ev;
    while (running) {
        while (SDL_PollEvent(&ev))
            if (ev.type == SDL_QUIT) running = 0;
        SDL_SetRenderDrawColor(ren, 0, 40, 0, 255);
        SDL_RenderClear(ren);
        SDL_SetRenderDrawColor(ren, 50, 255, 50, 255);
        SDL_RenderDrawRect(ren, NULL);
        SDL_RenderPresent(ren);
        SDL_Delay(16);
    }
    SDL_DestroyRenderer(ren); SDL_DestroyWindow(win); SDL_Quit();
    return 0;
}</code></pre></div>

<p>
    <span class="prompt">$ gcc sdl2demo.c -lSDL2 -o retro.x</span><br>
    → pixel control, sprite blitting, chiptune audio via SDL_mixer.
</p>

<hr class="section-divider">

<h2>// GETTING STARTED</h2>
<div class="command-line">
    <span class="prompt">$ apt install libsdl2-dev</span> &nbsp;# Debian/Ubuntu<br>
    <span class="prompt">$ brew install sdl2</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# macOS<br>
    <span class="prompt">$ pacman -S sdl2</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Arch Linux
</div>

<h3>Key SDL2 subsystems</h3>
<div class="grid-hardware">
    <div class="hw-card">
        <span class="prompt"># RENDERING</span><br><br>
        ▸ SDL_CreateRenderer – hardware/software<br>
        ▸ SDL_RenderCopy – blit textures<br>
        ▸ SDL_SetRenderDrawColor – pixel drawing<br>
        ▸ SDL_RenderPresent – flip buffer
    </div>
    <div class="hw-card">
        <span class="prompt"># AUDIO / INPUT</span><br><br>
        ▸ SDL_mixer – chiptune &amp; WAV playback<br>
        ▸ SDL_PollEvent – keyboard &amp; gamepad<br>
        ▸ SDL_GetKeyboardState – key mapping<br>
        ▸ SDL_GameController – controller API
    </div>
</div>

<?php require 'includes/footer.php'; ?>
