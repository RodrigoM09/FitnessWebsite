<!------------------------------------HEAD PARTIAL----------------------------->
<?php require('../partials/head.php') ?>
<!------------------------------------HEAD PARTIAL----------------------------->
<body>
<!------------------------------------NAVBAR PARTIAL----------------------------->
    <?php require('../partials/navbar.php') ?>
<!------------------------------------NAVBAR PARTIAL----------------------------->
<section class="dashboard">
    <div class="container dashboard_container">
        <button id="show_sidebar_btn" class="sidebar_toggle"><i class='bx bxs-chevron-right'></i></button>
        <button id="hide_sidebar_btn" class="sidebar_toggle"><i class='bx bxs-chevron-left'></i></button>
        <aside>
            <ul>
                <li>
                    <a href="add-post.php"><i class='bx bx-pencil'></i>
                        <h5>Add Post</h5>
                </a></li>
                <li>
                    <a href="dashboard.php" class="active"><i class='bx bxs-dashboard'></i>
                        <h5>Manage Posts</h5>
                </a></li>
                <li>
                    <a href="add-user.php"><i class='bx bx-user-circle'></i>
                        <h5>Add User</h5>
                </a></li>
                <li>
                    <a href="manage-users.php"><i class='bx bxs-user-account'></i>
                        <h5>Manage User</h5>
                </a></li>
                <li>
                    <a href="add-category.php"><i class='bx bx-category-alt'></i>
                        <h5>Add Category</h5>
                </a></li>
                <li>
                    <a href="manage-categories.php"><i class='bx bx-category'></i>
                        <h5>Manage Categories</h5>
                </a></li>
            </ul>
        </aside>
        <main>
            <h2>Manage Posts</h2>
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>lorem ipsum</td>
                        <td><a href="edit-post.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-post.php" class="btn sm danger">Delete</a></td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>lorem ipsum</td>
                        <td><a href="edit-post.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-post.php" class="btn sm danger">Delete</a></td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>lorem ipsum</td>
                        <td><a href="edit-post.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-post.php" class="btn sm danger">Delete</a></td>
                    </tr>
                </tbody>
            </table>
        </main>
    </div>
</section>
<!------------------------------------FOOTER PARTIAL----------------------------->
    <?php require('../partials/footer.php') ?>
<!------------------------------------FOOTER PARTIAL----------------------------->

<!------------------------------------SCRIPT PARTIAL----------------------------->
    <?php require('../partials/script.php') ?>
<!------------------------------------SCRIPT PARTIAL----------------------------->
</body>
</html>