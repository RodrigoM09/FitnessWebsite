<!------------------------------------HEAD PARTIAL----------------------------->
<?php require('../admin/partials/header.php') ?>
<!------------------------------------HEAD PARTIAL----------------------------->
<body>
<!------------------------------------NAVBAR PARTIAL----------------------------->
    <?php require('../admin/partials/navbar.php') ?>
<!------------------------------------NAVBAR PARTIAL----------------------------->
<div class="flex_container">
    <section class="form_section">
        <div class="container form_section-container">
            <h1>Edit Category</h1>
            <form action="">
                <input type="text" placeholder="Title">
                <textarea rows="4" placeholder="Description"></textarea>
                <button type="submit" class="btn">Update Category</button>
            </form>
        </div>
    </section>
</div>
<!------------------------------------FOOTER PARTIAL----------------------------->
    <?php require('../partials/footer.php') ?>
<!------------------------------------FOOTER PARTIAL----------------------------->

<!------------------------------------SCRIPT PARTIAL----------------------------->
    <?php require('../partials/script.php') ?>
<!------------------------------------SCRIPT PARTIAL----------------------------->
</body>
</html>