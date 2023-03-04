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
            <h1>Edit User</h1>
            <form action="" enctype="multipart/form-data">
                <input type="text" placeholder="Change First Name">
                <input type="text" placeholder="Change Last Name">
                <input type="text" placeholder="Change Username">
                <input type="text" placeholder=" Change Email">
                <input type="text" placeholder="New Password">
                <input type="text" placeholder="Confirm New Password">
                <textarea rows="10" placeholder="Update Description"></textarea>
                <select>
                    <option value="0">Client</option>
                    <option value="1">Trainer</option>
                    <option value="2">Author</option>
                </select>
                <div class="form_control">
                    <label for="avatar">Change Avatar</label>
                    <input type="file" id="avatar">
                </div>
                <button type="submit" class="btn">Update User</button>
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