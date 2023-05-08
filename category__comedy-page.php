<!--Page variables-->
<?php 
$title = "Comedy";
$pageStyle = "./assets/styles/category-page.css"
?>  
<!--HERE SHOULD BE THE INCLUDE FUNCTION FOR THE NAVBAR-->
<?php include ('./page-component__header.php');?>  
<!--the .selected__page class to highlight the "home" option on the menu must be added via javascript-->
        <main>
            <h2 class="genre__title"><?php echo $title?> Genre</h2>
            <ul class="flex__container">
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/comedy/poster__free-guy.jpg" alt="Free Guy (2021)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>Free Guy</i> (2021)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/comedy/poster__kingsman.jpg" alt="">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>Kingsman: The Secret Service</i> (2014)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/comedy/poster__21-jump-street.jpg" alt="21 Jump Street (2012)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>21 Jump Street</i> (2012)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/comedy/poster__just-go-it.jpg" alt="Just Go with It (2011)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>Just Go with It</i> (2011)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/comedy/poster__grown-ups.jpg" alt="Grown Ups (2010)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>Grown Ups</i> (2010)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/comedy/poster__easy-a.jpg" alt="Easy A (2010)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>Easy A</i> (2010)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/comedy/poster__mean-girls.jpg" alt="Mean Girls (2004)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>Mean Girls</i> (2004)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/comedy/poster__deadpool.jpg" alt="Deadpool (2016)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>Deadpool</i> (2016)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/comedy/poster__zombieland.jpg" alt="Zombieland (2009)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>Zombieland</i> (2009)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/comedy/poster__night-museum.jpg" alt="Night at the Museum (2006)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>Night at the Museum</i> (2006)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/comedy/poster__night-museum-2.jpg" alt="Night at the Museum: Battle of the Smithsonian (2009)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>Night at the Museum: Battle of the Smithsonian</i> (2009)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/comedy/poster__night-museum-3.jpg" alt="Night at the Museum: Secret of the Tomb (2014)">
                    <h3 class="item__poster-name"><b class="movie_value"></b> <i>Night at the Museum: Secret of the Tomb</i> (2014)</h3>
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
