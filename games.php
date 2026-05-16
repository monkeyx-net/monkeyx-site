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
        <a href="info" class="game-play">[INFO]</a>
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
    <div class="game-card" data-platforms="arcade genesis html5" data-rating="4" data-name="SPACE PATROL">
        <div class="game-cover">
            <a href="#" class="cover-link"><img src="https://placehold.co/400x200/051005/33ff33?text=SPACE+PATROL&font=playfair-display" alt="Space Patrol"></a>
        </div>
        <div class="game-title">SPACE PATROL</div>
        <span class="game-tag">SHOOTER</span><span class="game-tag">1-2P</span>
        <div class="game-stars">★★★★☆</div>
        <div class="game-platform">Arcade · Genesis · HTML5</div>
        <div class="game-desc">Vertical shooter with alien formation waves, parallax starfield, and SID audio port.</div>
        <a href="#" class="game-play">[INFO]</a>
    </div>
</div>

<div class="command-line">
    <span class="prompt">$ ./launch --game=</span><em>[select title above]</em><br>
    [INFO] HTML5 build detected → launching in browser...<br>
    <span class="cursor-blink"></span>
</div>

<script src="/js/filters.js"></script>
<?php require "includes/footer.php"; ?>
