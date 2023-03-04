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
            <h1>Edit Post</h1>
            <div class="alert_message error">
                <p>This is an error message</p>
            </div>
            <form action="" enctype="multipart/form-data">
                <input type="text" placeholder="Title">
                <select>
                    <option value="1">Health</option>
                    <option value="1">Weights</option>
                    <option value="1">Technology</option>
                    <option value="1">Nutrition</option>
                    <option value="1">Studies</option>
                </select>
                <textarea rows="10" placeholder="Body"></textarea>
                <div class="form_control inline">
                    <input type="checkbox" id="is_featured" checked>
                    <label for="is_featured" checked>Featured</label>
                </div>
                <div class="form_control">
                    <label for="thumbnail">Update Thumbnail</label>
                    <input type="file" id="thumbnail">
                </div>
                <button type="submit" class="btn">Update Post</button>
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