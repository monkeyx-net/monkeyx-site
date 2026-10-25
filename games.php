<?php
$page_title = "Games Archive";
$current_page = "games";
require "includes/head.php";
?>

<h1>// RETRO GAMES ARCHIVE :: FEATURED</h1>
<p style="margin-bottom:0.5rem;">
    <span class="prompt">$ ls /games/featured/ --sort=</span><select class="sort-select" id="sortSelect"><option value="name">name</option><option value="rating">rating</option></select><span class="sort-caret">▾</span>&nbsp;|&nbsp;
     <span id="game-count">...</span> indexed</p>

<div class="filter-bar">
    <span class="filter-label">FILTER://</span>
    <div class="filter-select-wrap">
        <select class="filter-select" id="filterSelect">
            <option value="all" selected>[ALL]</option>
            <option value="adventure">[ADVENTURE]</option>
            <option value="arcade">[ARCADE]</option>
            <option value="amiga">[AMIGA]</option>
            <option value="platform">[PLATFORM]</option>
            <option value="puzzle">[PUZZLE]</option>
            <option value="roguelike">[ROGUELIKE]</option>
            <option value="racer">[RACER]</option>
        </select>
        <span class="filter-select-label" aria-hidden="true">[ALL] <span class="filter-arrow">▾</span></span>
    </div>
</div>

<div class="grid-games">
    <div class="game-card" data-platforms="arcade" data-rating="5" data-name="SPACE INVADERS PART II">
        <div class="game-cover">
            <a href="<?= $game_urls[
                "space-invaders-part-ii"
            ] ?>" class="cover-link"><img src="images/games/space_invaders_part_2.webp" alt="Space Invaders Part II"></a>
        </div>
        <div class="game-title">SPACE INVADERS PART II</div>
        <span class="game-tag">ARCADE</span><span class="game-tag">1P</span>
        <div class="game-stars">★★★★★</div>
        <div class="game-platform">HTML5 · Linux · Mac · Windows</div>
        <div class="game-desc">A faithful LOVE2D re-implementation of the classic arcade game Space Invaders Part II by Taito (1980).</div>
        <a href="space-invaders-part-ii" class="game-play">[INFO]</a>
    </div>
    <div class="game-card" data-platforms="platform" data-rating="5" data-name="MANIC MINER">
        <div class="game-cover">
            <a href="<?= $game_urls[
                "manic-miner"
            ] ?>" class="cover-link"><img src="images/games/manic_miner.webp" alt="Manic Miner"></a>
        </div>
        <div class="game-title">MANIC MINER</div>
        <span class="game-tag">PLATFORM</span><span class="game-tag">1P</span>
        <div class="game-stars">★★★★★</div>
        <div class="game-platform">HTML5 · Linux · Mac · Windows</div>
        <div class="game-desc">One of the best original platform games. Orginal game by Matthew Smith. Check the level editor!</div>
        <a href="manic-miner" class="game-play">[INFO]</a>
    </div>
    <div class="game-card" data-platforms="platform" data-rating="5" data-name="JET SET WILLY">
        <div class="game-cover">
            <a href="<?= $game_urls[
                "jet-set-willy"
            ] ?>" class="cover-link"><img src="images/games/jet_set_willy.webp" alt="Jet Set Willy"></a>
        </div>
        <div class="game-title">JET SET WILLY</div>
        <span class="game-tag">PLATFORM</span><span class="game-tag">1P</span>
        <div class="game-stars">★★★★★</div>
        <div class="game-platform">HTML5 · Linux · Mac · Windows</div>
        <div class="game-desc">The sequel to Manic Miner: tidy all 60 rooms of Willy's mansion before midnight. Original game by Matthew Smith. Check the level editor!</div>
        <a href="jet-set-willy" class="game-play">[INFO]</a>
    </div>
    <div class="game-card" data-platforms="arcade" data-rating="5" data-name="ROBOTRON: 2084">
        <div class="game-cover">
            <a href="<?= $game_urls[
                "robotron"
            ] ?>" class="cover-link"><img src="images/games/robotron.webp" alt="Robotron: 2084"></a>
        </div>
        <div class="game-title">ROBOTRON: 2084</div>
        <span class="game-tag">ARCADE</span><span class="game-tag">1-2P</span>
        <div class="game-stars">★★★★★</div>
        <div class="game-platform">HTML5 · Linux · PortMaster</div>
        <div class="game-desc">A C/SDL2 port of the 1982 Williams twin-stick arcade classic, with waves and enemy pacing traced from the original ROM.</div>
        <a href="robotron" class="game-play">[INFO]</a>
    </div>
    <div class="game-card" data-platforms="arcade" data-rating="5" data-name="JOUST">
        <div class="game-cover">
            <a href="<?= $game_urls["joust"] ?>" class="cover-link"><img src="images/games/joust.webp" alt="Joust"></a>
        </div>
        <div class="game-title">JOUST</div>
        <span class="game-tag">ARCADE</span><span class="game-tag">1-2P</span>
        <div class="game-stars">★★★★★</div>
        <div class="game-platform">HTML5 · Linux · Windows · PortMaster</div>
        <div class="game-desc">A C/SDL2 port of Williams' 1982 ostrich-riding classic, running the arcade ROM on an emulated board. Play it in your browser.</div>
        <a href="joust" class="game-play">[INFO]</a>
    </div>
    <div class="game-card" data-platforms="arcade" data-rating="5" data-name="DEFENDER">
        <div class="game-cover">
            <a href="<?= $game_urls["defender"] ?>" class="cover-link"><img src="images/games/defender.webp" alt="Defender"></a>
        </div>
        <div class="game-title">DEFENDER</div>
        <span class="game-tag">ARCADE</span><span class="game-tag">1-2P</span>
        <div class="game-stars">★★★★★</div>
        <div class="game-platform">HTML5 · Linux · Windows · PortMaster</div>
        <div class="game-desc">A C/SDL2 port of Williams' 1981 side-scrolling shooter, running the arcade ROM on an emulated board. Play it in your browser.</div>
        <a href="defender" class="game-play">[INFO]</a>
    </div>
    <div class="game-card" data-platforms="arcade" data-rating="5" data-name="GALAGA">
        <div class="game-cover">
            <a href="<?= $game_urls["galaga"] ?>" class="cover-link"><img src="images/games/galaga.webp" alt="Galaga"></a>
        </div>
        <div class="game-title">GALAGA</div>
        <span class="game-tag">ARCADE</span><span class="game-tag">1-2P</span>
        <div class="game-stars">★★★★★</div>
        <div class="game-platform">HTML5 · Linux · Mac · Windows · PortMaster</div>
        <div class="game-desc">A C/SDL2 port of Namco's 1981 shooter, rewritten in C and checked frame by frame against the arcade board. Play it in your browser.</div>
        <a href="galaga" class="game-play">[INFO]</a>
    </div>
    <div class="game-card" data-platforms="arcade" data-rating="5" data-name="GALAXIAN">
        <div class="game-cover">
            <a href="<?= $game_urls["galaxian"] ?>" class="cover-link"><img src="images/games/galaxian.webp" alt="Galaxian"></a>
        </div>
        <div class="game-title">GALAXIAN</div>
        <span class="game-tag">ARCADE</span><span class="game-tag">1-2P</span>
        <div class="game-stars">★★★★★</div>
        <div class="game-platform">HTML5 · Linux · Mac · Windows · PortMaster</div>
        <div class="game-desc">A C/SDL2 port of Namco's 1979 swarm shooter, rewritten in C and checked frame by frame against the arcade board. Play it in your browser.</div>
        <a href="galaxian" class="game-play">[INFO]</a>
    </div>
    <div class="game-card" data-platforms="arcade" data-rating="5" data-name="STAR FORCE">
        <div class="game-cover">
            <a href="<?= $game_urls["starforce"] ?>" class="cover-link"><img src="images/games/starforce.webp" alt="Star Force"></a>
        </div>
        <div class="game-title">STAR FORCE</div>
        <span class="game-tag">ARCADE</span><span class="game-tag">1-2P</span>
        <div class="game-stars">★★★★★</div>
        <div class="game-platform">HTML5 · Linux · Mac · Windows · PortMaster</div>
        <div class="game-desc">A C/SDL2 port of Tehkan's 1984 vertical shooter, rewritten in C and checked frame by frame against the arcade board. Play it in your browser.</div>
        <a href="starforce" class="game-play">[INFO]</a>
    </div>
</div>

<div class="command-line">
    <span class="prompt">$ ./launch --game=</span><em>[select title above]</em><br>
    [INFO] HTML5 build detected → launching in browser...<br>
    <span class="cursor-blink"></span>
</div>

<script src="/js/filters.js"></script>
<?php require "includes/footer.php"; ?>
