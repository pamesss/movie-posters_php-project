<!--Page variables-->
<?php 
$title = "Animation";
$pageStyle = "./assets/styles/category-page.css"
?>  
<!--HERE SHOULD BE THE INCLUDE FUNCTION FOR THE NAVBAR-->
<?php include ('./page-component__header.php');?>  
<!--the .selected__page class to highlight the "home" option on the menu must be added via javascript-->
        <main>
            <h2 class="genre__title"><?php echo $title?> Genre</h2>
            <ul class="flex__container">
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/animation/poster__toy-story-1.jpg" alt="Toy Story (1995)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>Toy Story</i> (1995)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/animation/poster__toy-story-2.jpg" alt="Toy Story 2 (1999)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>Toy Story 2</i> (1999)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/animation/poster__toy-story-3.jpg" alt="Toy Story 3 (2010)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>Toy Story 3</i> (2010)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/animation/poster__lego-movie.jpg" alt="The Lego Movie (2014)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>The Lego Movie</i> (2014)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/animation/poster__lego-movie-2.jpg" alt="The Lego Movie 2: The Second Part (2019)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>The Suicide Squad</i> (2021)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/animation/poster__lego-batman.jpg" alt="The Lego Batman Movie (2017)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>The Lego Batman Movie</i> (2017)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/animation/poster__wreck-it-ralph.jpg" alt="Wreck-It Ralph (2012)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>Wreck-It Ralph</i> (2012)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/animation/poster__zootopia.jpg" alt="Zootopia (2016)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>Zootopia</i> (2016)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/animation/poster__tangled.jpg" alt="Tangled (2010)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>Tangled</i> (2010)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/animation/poster__encanto.jpg" alt="Encanto (2021)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>Encanto</i> (2021)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/animation/poster__princess-frog.jpg" alt="The Princess and the Frog (2009)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>The Princess and the Frog</i> (2009)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/animation/poster__book-of-life.jpg" alt="The Book of Life (2014)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>The Book of Life</i> (2014)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/animation/poster__shrek-forever.jpg" alt="Shrek Forever After (2010)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>Shrek Forever After</i> (2010)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/animation/poster__shrek-2.jpg" alt="Shrek 2 (2004)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>Shrek 2</i> (2004)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/animation/poster__httyd.jpg" alt="How to Train Your Dragon (2010) ">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>How to Train Your Dragon</i> (2010)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/animation/poster__epic.jpg" alt="Epic (2013)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>Epic</i> (2013)</h3>
                </div>
            </ul>

            <div class="pop-up__img">
                <div class="box__layout">
                    <span class="close__button" alt="Cross sign to close the pop up.">X</span>
                    <img class="popup-item__img-style" src="" alt="The Hobbit: An Unexpected Journey (2012)">
                </div>
            </div>
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
