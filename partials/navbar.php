<nav class="navbar">
        <div class="container nav_container">
            <a href="index.php" class="nav_logo">The Temple</a>
            <ul class="nav_items">
                <li><a href="<?= ROOT_URL?>views/index.php">Home</a></li>
                <li><a href="<?= ROOT_URL?>views/nutrition.php">Nutrition</a></li>
                <li><a href="<?= ROOT_URL?>views/fitness.php">Fitness</a></li>
                <li><a href="<?= ROOT_URL?>views/blog.php">Blog</a></li>
                <li><a href="<?= ROOT_URL?>views/clients.php">Clients</a></li>
                <li><a href="<?= ROOT_URL?>views/trainers.php">Trainers</a></li>
                <li><a href="<?= ROOT_URL?>views/signin.php">Login</a></li>
                <li class="nav_profile">
                    <div class="avatar">
                        <img src="/images/avatar1.png" alt="">
                    </div>
                    <ul>
                        <li><a href="<?= ROOT_URL?>admin/dashboard.php">Dashboard</a></li>
                        <li><a href="<?= ROOT_URL?>views/logout.php">logout</a></li>
                    </ul>
                </li>
            </ul>
            <button id="open_nav_btn"><i class='bx bx-menu'></i></button>
            <button id="close_nav_btn"><i class='bx bx-x' ></i></button>
        </div>
</nav>