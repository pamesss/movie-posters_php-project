<!--Page variables-->
<?php 
$title = "Romance";
$pageStyle = "./assets/styles/category-page.css"
?>  
<!--HERE SHOULD BE THE INCLUDE FUNCTION FOR THE NAVBAR-->
<?php include ('./page-component__header.php');?>  
<!--the .selected__page class to highlight the "home" option on the menu must be added via javascript-->
        <main>
            <h2 class="genre__title"><?php echo $title?> Genre</h2>
            <ul class="flex__container">
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/sci-fi/poster__back-to-the-future.jpg" alt="Back to the Future (1985)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>Back to the Future</i> (1985)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/sci-fi/poster__back-to-the-future2.jpg" alt="Back to the Future Part II (1989)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>Back to the Future Part II</i> (1989)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/sci-fi/poster__back-to-the-future3.jpg" alt="Back to the Future Part III (1990)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>Back to the Future Part III</i> (1990)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/sci-fi/poster__hg.jpg" alt="The Hunger Games (2012)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>The Hunger Games</i> (2012)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/sci-fi/poster__hg-catching-fire.jpg" alt="The Hunger Games: Catching Fire (2013)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>The Hunger Games: Catching Fire</i> (2013)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/sci-fi/poster__hg-mockinjay1.jpg" alt="The Hunger Games: Mockingjay - Part 1 (2014)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>The Hunger Games: Mockingjay - Part 1</i> (2014)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/sci-fi/poster__hg-mockinjay2.jpg" alt="The Hunger Games: Mockingjay - Part 2 (2015)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>The Hunger Games: Mockingjay - Part 2</i> (2015)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/sci-fi/poster__everything-everywhere-all-at-once.jpg" alt="Everything Everywhere All at Once (2022)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>Everything Everywhere All at Once</i> (2022)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/sci-fi/poster__ready-player-one.jpg" alt="Ready Player One (2018)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>Ready Player One</i> (2018)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/sci-fi/poster__dont-look-up.jpg" alt="Don't Look Up (2021)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>Don't Look Up</i> (2021)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/sci-fi/poster__interstellar.jpg" alt="Interstellar (2014)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>Interstellar</i> (2014)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/sci-fi/poster__bullet-train.jpg" alt="Bullet Train (2022)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>Bullet Train</i> (2022)</h3>
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
