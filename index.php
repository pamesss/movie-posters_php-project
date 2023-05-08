<!--Page variables-->
<?php 
$title = "Home";
$pageStyle = "./assets/styles/home-page.css"
?>  
<!--HERE SHOULD BE THE INCLUDE FUNCTION FOR THE NAVBAR-->
<?php include ('./page-component__header.php');?>  
<!--the .selected__page class to highlight the "home" option on the menu must be added via javascript-->
        <main>
            <h2 class="home__title">Welcome!</h2>
            <p class="home__introduction">
            Welcome to the Gallery of Sorta-Kinda Favorites Movie Posters (this title would be too long on the header), where you'll find posters for my favorite films! Well, maybe not all of them, but definitely some of them... and in categories that are maybe not that accurate.<br><br>
            But hey, I'm not here to recommend movies, I'm here to share with everyone the art of (well-made) movie posters!
            <br><br>
            So come on in, take a look around, and see if you can find some posters that catch your eye. And if you're a fan of web development, this is also a beginner project, so please check out my <a class="text_link__style" href="https://github.com/pamesss" target="_blank">Github</a> as well!!
            </p>
        </main>
    <!--HERE SHOULD BE THE INCLUDE FUNCTION FOR THE FOOTER-->
    <?php include ('./page-component__footer.php');?>  
    </section>
</div>

    <!--scripts for the components of the home page-->
    <script src=""></script>
    <script src=""></script>
    <script src="./assets/scripts/navbar-script.js"></script>
</body>

</html>