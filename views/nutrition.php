<!------------------------------------HEAD PARTIAL----------------------------->
<?php require('../partials/head.php') ?>
<!------------------------------------HEAD PARTIAL----------------------------->
<body>
<!------------------------------------NAVBAR PARTIAL----------------------------->
 <?php require('../partials/navbar.php') ?>
<!------------------------------------NAVBAR PARTIAL----------------------------->
<!------------------------------------SEARCH BAR -------------------------------->
<section class="search_bar">
    <form class="container search_bar_container" action="">
        <div>
            <i class='bx bx-search-alt' ></i>
            <input type="search" name="" placeholder="search">
        </div>
        <button type="submit" class="btn">Go</button>
    </form>
</section>
<!------------------------------------SEARCH BAR -------------------------------->

    <section class="posts">
        <div class="container posts_container">
            <article class="post">
                <div class="post_thumbnail">
                    <img src="/images/blog2.png" alt="">
                </div>
                <div class="post_info">
                    <a href="" class="catehory_button">Wild Life Category</a>
                    <h3 class="post_title">
                        <a href="post.html">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</a></h3>
                        <p class="post_body">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum ad, quia error odio alias commodi dolor aspernatur eum nesciunt aliquam.
                        </p>
                        <div class="post_author">
                            <div class="post_author_avatar">
                                <img src="/images/avatar3.png" alt="">
                            </div>
                            <div class="post_author_info">
                                <h5>By: Jane Doe</h5>
                                <small>February 26, 2023 - 5:15</small>
                            </div>
                        </div>
                </div>
            </article>
            <article class="post">
                <div class="post_thumbnail">
                    <img src="/images/blog3.png" alt="">
                </div>
                <div class="post_info">
                    <a href="" class="catehory_button">Wild Life Category</a>
                    <h3 class="post_title">
                        <a href="post.html">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</a></h3>
                        <p class="post_body">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum ad, quia error odio alias commodi dolor aspernatur eum nesciunt aliquam.
                        </p>
                        <div class="post_author">
                            <div class="post_author_avatar">
                                <img src="/images/avatar5.png" alt="">
                            </div>
                            <div class="post_author_info">
                                <h5>By: Jane Doe</h5>
                                <small>February 26, 2023 - 5:15</small>
                            </div>
                        </div>
                </div>
            </article>
            <article class="post">
                <div class="post_thumbnail">
                    <img src="/images/blog4.png" alt="">
                </div>
                <div class="post_info">
                    <a href="" class="catehory_button">Wild Life Category</a>
                    <h3 class="post_title">
                        <a href="post.html">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</a></h3>
                        <p class="post_body">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum ad, quia error odio alias commodi dolor aspernatur eum nesciunt aliquam.
                        </p>
                        <div class="post_author">
                            <div class="post_author_avatar">
                                <img src="/images/avatar4.png" alt="">
                            </div>
                            <div class="post_author_info">
                                <h5>By: Jane Doe</h5>
                                <small>February 26, 2023 - 5:15</small>
                            </div>
                        </div>
                </div>
            </article>
            <article class="post">
                <div class="post_thumbnail">
                    <img src="/images/blog5.png" alt="">
                </div>
                <div class="post_info">
                    <a href="" class="catehory_button">Wild Life Category</a>
                    <h3 class="post_title">
                        <a href="post.html">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</a></h3>
                        <p class="post_body">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum ad, quia error odio alias commodi dolor aspernatur eum nesciunt aliquam.
                        </p>
                        <div class="post_author">
                            <div class="post_author_avatar">
                                <img src="/images/avatar5.png" alt="">
                            </div>
                            <div class="post_author_info">
                                <h5>By: Jane Doe</h5>
                                <small>February 26, 2023 - 5:15</small>
                            </div>
                        </div>
                </div>
            </article>
        </div>
    </section>
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
<!------------------------------------CATEGORY BUTTONS----------------------------->
<!------------------------------------FOOTER PARTIAL----------------------------->
    <?php require('../partials/footer.php') ?>
<!------------------------------------FOOTER PARTIAL----------------------------->

<!------------------------------------SCRIPT PARTIAL----------------------------->
    <?php require('../partials/script.php') ?>
<!------------------------------------SCRIPT PARTIAL----------------------------->
</body>
</html>