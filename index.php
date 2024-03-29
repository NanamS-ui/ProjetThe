<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login User</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/login_user/css/style.css">

</head>

<body class="img js-fullheight" style="background-image: url(assets/the2.jpeg);">

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Login User</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Have an account?</h3>
                        <form action="./pages/traitementloginuser.php" class="signin-form" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Username" name="user"
                                    value="user1">
                            </div>
                            <div class="form-group">
                                <input id="password-field" type="password" class="form-control" placeholder="Password"
                                    name="mdp" value="password1" required>
                                <span toggle="#password-field"
                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <?php
                            if (isset($_GET['error']) && $_GET['error'] != null) {
                                $erreur = $_GET['error']; ?>
                            <p style="color: red;"><?php echo $erreur ?></p>
                            <?php } ?>

                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Sign
                                    In</button><br></br>
                                <a href="pages/admin.php"
                                    style="display: flex; justify-content: center; border-radius: 20px; width: 250px; margin-left: 50px; text-decoration: none; color: black;">Sign
                                    Admin</a>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/login_user/js/jquery.min.js"></script>
    <script src="assets/login_user/js/popper.js"></script>
    <script src="assets/login_user/js/bootstrap.min.js"></script>
    <script src="assets/login_user/js/main.js"></script>

</body>

</html>