<!------------------------------------HEAD PARTIAL----------------------------->
<?php require('../partials/head.php') ?>
<!------------------------------------HEAD PARTIAL----------------------------->
<body>
<!------------------------------------NAVBAR PARTIAL----------------------------->
 <?php require('../partials/navbar.php') ?>
<!------------------------------------NAVBAR PARTIAL----------------------------->
<!------------------------------------SEARCH BAR -------------------------------->
<div class="page_container">
<section class="search_bar">
    <form class="container search_bar_container" id="search_bar_container" action="">
        <div>
            <i class='bx bx-search-alt' ></i>
            <input type="search" name="" id="searchBar" placeholder="search">
        </div>
        <button type="submit" class="btn">Go</button>
    </form>
</section>
<!------------------------------------SEARCH BAR -------------------------------->

    <section class="posts">
        <div class="container posts_container" id="post_container">
        </div>
    </section>
    <div class="buttons">
        <button class="btn previous">Previous</button>
        <button class="btn Next">&nbsp;&nbsp;&nbsp;Next&nbsp;&nbsp;&nbsp;</button>
    </div>

<!------------------------------------CATEGORY BUTTONS----------------------------->
    <section class="category_buttons">
        <div class="container category_buttons_container">
            <a href="" class="category_button">Category</a>
            <a href="" class="category_button">Health</a>
            <a href="" class="category_button">Weights</a>
            <a href="" class="category_button">Technology</a>
            <a href="" class="category_button">Nutrition</a>
            <a href="" class="category_button">Studies</a>
        </div>
    </section>
</div>
<!------------------------------------CATEGORY BUTTONS----------------------------->
<!------------------------------------FOOTER PARTIAL----------------------------->
    <?php require('../partials/footer.php') ?>
<!------------------------------------FOOTER PARTIAL----------------------------->

<!------------------------------------SCRIPT PARTIAL----------------------------->
    <?php require('../partials/script.php') ?>
<!------------------------------------SCRIPT PARTIAL----------------------------->
</body>
</html>