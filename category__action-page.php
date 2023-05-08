<!--Page variables-->
<?php 
$title = "Action";
$pageStyle = "./assets/styles/category-page.css"
?>  
<!--HERE SHOULD BE THE INCLUDE FUNCTION FOR THE NAVBAR-->
<?php include ('./page-component__header.php');?>  
<!--the .selected__page class to highlight the "home" option on the menu must be added via javascript-->
        <main>
            <h2 class="genre__title"><?php echo $title?> Genre</h2>
            <ul class="flex__container">
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/action/poster__xmen.jpg" alt="X-Men: First Class (2011)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>X-Men: First Class</i> (2011)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/action/poster__avengers.jpg" alt="The Avengers (2012)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>The Avengers</i> (2012)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/action/poster__avengers-infinity-war.jpg" alt="Avengers: Infinity War (2018)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>Avengers: Infinity War</i> (2018)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/action/poster__avengers-endgame.jpg" alt="Avengers: Endgame (2019)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>Avengers: Endgame</i> (2019)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/action/poster__suicide-squad.jpg" alt="The Suicide Squad (2021)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>The Suicide Squad</i> (2021)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/action/poster__thor.jpg" alt="Thor: Ragnarok (2017)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>Thor: Ragnarok</i> (2017)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/action/poster__gog.jpg" alt="Guardians of the Galaxy (2014)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>Guardians of the Galaxy</i> (2014)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/action/poster__spiderman.jpg" alt="Spider-Man: Into the Spider-Verse (2018)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>Spider-Man: Into the Spider-Verse</i> (2018)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/action/poster__scott-pilgrim.jpg" alt="Scott Pilgrim vs. the World (2010)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>Scott Pilgrim vs. the World</i> (2010)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/action/poster__bullet-train.png" alt="Bullet Train (2022)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>Bullet Train</i> (2022)</h3>
                </div>
            </ul>
        </main>
    <!--HERE SHOULD BE THE INCLUDE FUNCTION FOR THE FOOTER-->
    <?php include ('./page-component__footer.php');?>  
    </section>
    </div>

    <!--scripts for the components of the home page-->
    <script src="./assets/scripts/pop-up-script.js"></script>
    <script src="./assets/scripts/navbar-script.js"></script>
    <script src="./assets/scripts/movie-list-number.js"></script>
</body>

</html>
