<!------------------------------------HEAD PARTIAL----------------------------->
<?php require('../partials/head.php') ?>
<!------------------------------------HEAD PARTIAL----------------------------->
<body>
<!------------------------------------NAVBAR PARTIAL----------------------------->
    <?php require('../partials/navbar.php') ?>
<!------------------------------------NAVBAR PARTIAL----------------------------->
<div class="flex_container">
    <section class="form_section">
        <div class="container form_section-container">
            <h1>Sign Up</h1>
            <div class="alert_message error">
                <p>This is an error message</p>
            </div>
            <form action="">
                <input type="text" placeholder="First Name">
                <input type="text" placeholder="Last Name">
                <input type="text" placeholder="UserName">
                <input type="text" placeholder="Email">
                <input type="text" placeholder="Create Passwrod">
                <input type="text" placeholder="Confirm Password">
                <div class="form_control">
                    <label for="" class="avatar"></label>
                    <input type="file" name="avatar" id="avatar">
                </div>
                <button type="submit" class="btn">Sign Up!</button>
                <small>Already have an account?<a href="signin.php"> Sign In</a></small>
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