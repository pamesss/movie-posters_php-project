<!--Page variables-->
<?php 
$title = "Musical";
$pageStyle = "./assets/styles/category-page.css"
?>  
<!--HERE SHOULD BE THE INCLUDE FUNCTION FOR THE NAVBAR-->
<?php include ('./page-component__header.php');?>  
<!--the .selected__page class to highlight the "home" option on the menu must be added via javascript-->
        <main>
            <h2 class="genre__title"><?php echo $title?> Genre</h2>
            <ul class="flex__container">
            <div class="item__container animation__fade-in">
                <img class="item__img-style" src="./assets/_images/musical/poster__hamilton.jpg" alt="Hamilton: An American Musical (2020)">
                <h3 class="item__poster-name"><b class="movie_value"></b> <i>Hamilton: An American Musical</i> (2020)</h3>
            </div>
            <div class="item__container animation__fade-in">
                <img class="item__img-style" src="./assets/_images/musical/poster__heathers.jpg" alt="Heathers: The Musical (2014)">
                <h3 class="item__poster-name"><b class="movie_value"></b> <i>Heathers: The Musical</i> (2014)</h3>
            </div>
            <div class="item__container animation__fade-in">
                <img class="item__img-style" src="./assets/_images/musical/poster__pitch-perfect.jpg" alt="Pitch Perfect (2012)">
                <h3 class="item__poster-name"><b class="movie_value"></b> <i>Pitch Perfect</i> (2012)</h3>
            </div>
            <div class="item__container animation__fade-in">
                <img class="item__img-style" src="./assets/_images/musical/poster__teen-beach-movie.jpg" alt="Teen Beach Movie (2013)">
                <h3 class="item__poster-name"><b class="movie_value"></b> <i>Teen Beach Movie</i> (2013)</h3>
            </div>
            <div class="item__container animation__fade-in">
                <img class="item__img-style" src="./assets/_images/musical/poster__mamma-mia.jpg" alt="Mamma Mia! (2008)">
                <h3 class="item__poster-name"><b class="movie_value"></b> <i>Mamma Mia!</i> (2008)</h3>
            </div>
            <div class="item__container animation__fade-in">
                <img class="item__img-style" src="./assets/_images/musical/poster__enchanted.jpg" alt="Enchanted (2007)">
                <h3 class="item__poster-name"><b class="movie_value"></b> <i>Enchanted</i> (2007)</h3>
            </div>
            <div class="item__container animation__fade-in">
                <img class="item__img-style" src="./assets/_images/musical/poster__descendants.jpg" alt="Descendants (2015) ">
                <h3 class="item__poster-name"><b class="movie_value"></b> <i>Descendants</i> (2015)</h3>
            </div>
            <div class="item__container animation__fade-in">
                <img class="item__img-style" src="./assets/_images/musical/poster__rocketman.jpg" alt="Rocketman (2019)">
                <h3 class="item__poster-name"><b class="movie_value"></b> <i>Rocketman</i> (2019)</h3>
            </div>
            <div class="item__container animation__fade-in">
                <img class="item__img-style" src="./assets/_images/musical/poster__tick-tick-boom.jpg" alt="tick, tick... BOOM! (2021)">
                <h3 class="item__poster-name"><b class="movie_value"></b> <i>tick, tick... BOOM!</i> (2021)</h3>
            </div>
            <div class="item__container animation__fade-in">
                <img class="item__img-style" src="./assets/_images/musical/poster__bohemian-rhapsody.jpg" alt="Bohemian Rhapsody (2018)">
                <h3 class="item__poster-name"><b class="movie_value"></b> <i>Bohemian Rhapsody</i> (2018)</h3>
            </div>
            <div class="item__container animation__fade-in">
                <img class="item__img-style" src="./assets/_images/musical/poster__the-muppets.jpg" alt="The Muppets (2011)">
                <h3 class="item__poster-name"><b class="movie_value"></b> <i>The Muppets</i> (2011)</h3>
            </div>
            <div class="item__container animation__fade-in">
                <img class="item__img-style" src="./assets/_images/musical/poster__rocky-horror.jpg" alt="The Rocky Horror Picture Show (1975)">
                <h3 class="item__poster-name"><b class="movie_value"></b> <i>The Rocky Horror Picture Show</i> (1975)</h3>
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
