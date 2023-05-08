<!--Page variables-->
<?php 
$title = "Fantasy";
$pageStyle = "./assets/styles/category-page.css"
?>  
<!--HERE SHOULD BE THE INCLUDE FUNCTION FOR THE NAVBAR-->
<?php include ('./page-component__header.php');?>  
<!--the .selected__page class to highlight the "home" option on the menu must be added via javascript-->
        <main>
            <h2 class="genre__title"><?php echo $title?> Genre</h2>
            <ul class="flex__container">
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/fantasy/poster__hobbit-1.jpg" alt="The Hobbit: An Unexpected Journey (2012)">
                    <h3 class="item__poster-name"><b class="movie_value">1.</b> <i>The Hobbit: An Unexpected Journey</i> (2012)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/fantasy/poster__hobbit-2.jpg" alt="The Hobbit: The Desolation of Smaug (2013)">
                    <h3 class="item__poster-name"><b class="movie_value">2.</b> <i>The Hobbit: The Desolation of Smaug</i> (2013)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/fantasy/poster__hobbit-3.jpg" alt="The Hobbit: The Battle of the Five Armies(2014)">
                    <h3 class="item__poster-name"><b class="movie_value">3.</b> <i>The Hobbit: The Battle of the Five Armies</i> (2014)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/fantasy/poster__narnia.jpg" alt="The Chronicles of Narnia: The Lion, the Witch and the Wardrobe (2005)">
                    <h3 class="item__poster-name"><b class="movie_value">4.</b> <i>The Chronicles of Narnia: The Lion, the Witch and the Wardrobe</i> (2005)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/fantasy/poster__alice-in-wonderland.jpg" alt="Alice in Wonderland (2010)">
                    <h3 class="item__poster-name"><b class="movie_value">5.</b> <i>Alice in Wonderland</i> (2010)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/fantasy/poster__edward-scissorhands.jpg" alt="Edward Scissorhands (1990)">
                    <h3 class="item__poster-name"><b class="movie_value">6.</b> <i>Edward Scissorhands</i> (1990)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/fantasy/poster__maleficient.jpg" alt="Maleficent (2014)">
                    <h3 class="item__poster-name"><b class="movie_value">7.</b> <i>Maleficent</i> (2014)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/fantasy/poster__nightmare-before-christmas.jpg" alt="The Nightmare Before Christmas (1993)">
                    <h3 class="item__poster-name"><b class="movie_value">8.</b> <i>The Nightmare Before Christmas</i> (1993)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/fantasy/poster__caroline.jpg" alt="Coraline (2009)">
                    <h3 class="item__poster-name"><b class="movie_value">9.</b> <i>Coraline</i> (2009)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/fantasy/poster__spiderwick.jpg" alt="The Spiderwick Chronicles (2008)">
                    <h3 class="item__poster-name"><b class="movie_value">10.</b> <i>The Spiderwick Chronicles</i> (2008)</h3>
                </div>
                <div class="item__container animation__fade-in">
                    <img class="item__img-style" src="./assets/_images/fantasy/poster__fantastic-beast.jpg" alt="Fantastic Beasts and Where to Find Them (2016)">
                    <h3 class="item__poster-name"><b class="movie_value">11.</b> <i>Fantastic Beasts and Where to Find Them</i> (2016)</h3>
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
