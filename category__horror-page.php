<!--Page variables-->
<?php 
$title = "Horror";
$pageStyle = "./assets/styles/category-page.css"
?>  
<!--HERE SHOULD BE THE INCLUDE FUNCTION FOR THE NAVBAR-->
<?php include ('./page-component__header.php');?>  
<!--the .selected__page class to highlight the "home" option on the menu must be added via javascript-->
        <main>
            <h2 class="genre__title"><?php echo $title?> Genre</h2>
            <ul class="flex__container">
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/horror/poster__nope.jpg" alt="Nope (2022)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>Nope</i> (2022)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/horror/poster__silence-of-the-lambs.jpg" alt="The Silence of the Lambs (1991)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>The Silence of the Lambs</i> (1991)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/horror/poster__the-menu.jpg" alt="The Menu (2022)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>The Menu</i> (2022)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/horror/poster__night-in-soho.jpg" alt="Last Night in Soho (2021)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>Last Night in Soho</i> (2021)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/horror/poster__train-to-busan.jpg" alt="Train to Busan (2016)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>Train to Busan</i> (2016)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/horror/poster__get-out.jpg" alt="Get Out (2017)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>Get Out</i> (2017)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/horror/poster__midsommar.jpg" alt="Midsommar (2019)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>Midsommar</i> (2019)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/horror/poster__ready-or-not.jpg" alt="Ready or Not (2019)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>Ready or Not</i> (2019)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/horror/poster__split.jpg" alt="Split (2016)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>Split</i> (2016)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/horror/poster__scream.jpg" alt="Scream (1996)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>Scream</i> (1996)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/horror/poster__pearl.jpg" alt="Pearl (2022)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>Pearl</i> (2022)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/horror/poster__american-psycho.jpg" alt="American Psycho (2000)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>American Psycho</i> (2000)</h3>
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
