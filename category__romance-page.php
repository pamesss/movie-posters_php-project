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
                <img class="item__img-style" src="./assets/_images/romance/poster__a-star-is-born.jpg" alt="A Star Is Born (2018)">
                <h3 class="item__poster-name"><b class="movie_value"></b> <i>A Star Is Born</i> (2018)</h3>
            </div>
            <div class="item__container animation__fade-in">
                <img class="item__img-style" src="./assets/_images/romance/poster__twilight.jpg" alt="Twilight (2008)">
                <h3 class="item__poster-name"><b class="movie_value"></b> <i>Twilight</i> (2008)</h3>
            </div>
            <div class="item__container animation__fade-in">
                <img class="item__img-style" src="./assets/_images/romance/poster__perks-of-being-a-wallflower.jpg" alt="The Perks of Being a Wallflower (2012)">
                <h3 class="item__poster-name"><b class="movie_value"></b> <i>The Perks of Being a Wallflower</i> (2012)</h3>
            </div>
            <div class="item__container animation__fade-in">
                <img class="item__img-style" src="./assets/_images/romance/poster__pride-and-prejudice.jpg" alt="Pride & Prejudice (2005)">
                <h3 class="item__poster-name"><b class="movie_value"></b> <i>Pride & Prejudice</i> (2005)</h3>
            </div>
            <div class="item__container animation__fade-in">
                <img class="item__img-style" src="./assets/_images/romance/poster__love-rosie.jpg" alt="Love, Rosie (2014)">
                <h3 class="item__poster-name"><b class="movie_value"></b> <i>Love, Rosie</i> (2014)</h3>
            </div>
            <div class="item__container animation__fade-in">
                <img class="item__img-style" src="./assets/_images/romance/poster__me-before-you.jpg" alt="Me Before You (2016)">
                <h3 class="item__poster-name"><b class="movie_value"></b> <i>Me Before You</i> (2016)</h3>
            </div>
            <div class="item__container animation__fade-in">
                <img class="item__img-style" src="./assets/_images/romance/poster__gnomeo-juliet.jpg" alt="Gnomeo & Juliet (2011)">
                <h3 class="item__poster-name"><b class="movie_value"></b> <i>Gnomeo & Juliet</i> (2011)</h3>
            </div>
            <div class="item__container animation__fade-in">
                <img class="item__img-style" src="./assets/_images/romance/poster__shape-of-water.jpg" alt="The Shape of Water (2017) ">
                <h3 class="item__poster-name"><b class="movie_value"></b> <i>The Shape of Water</i> (2017)</h3>
            </div>
            <div class="item__container animation__fade-in">
                <img class="item__img-style" src="./assets/_images/romance/poster__curious-benjamin.jpg" alt="The Curious Case of Benjamin Button (2008)">
                <h3 class="item__poster-name"><b class="movie_value"></b> <i>The Curious Case of Benjamin Button</i> (2008)</h3>
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
