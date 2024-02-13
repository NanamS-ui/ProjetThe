<!doctype html>
<html lang="en">

<head>
    <title>Cueillette</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../assets/Cueillette/css/style.css">


</head>

<body>
    <?php include 'headerUser.html' ?>
    <?php if (isset($_GET["message"]) && $_GET["message"] != null) { ?>
    <script>
    alert("<?php echo htmlspecialchars($_GET["message"]); ?>")
    </script>
    <?php } ?>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Cueillete du Thé </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="img" style="background-image: url(../assets/cueillete.jpg);">
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <form action="insertSaisieCueillette.php" class="signin-form" method="get">
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Date</label>
                                    <input type="date" class="form-control" placeholder="Date  de cueillette"
                                        name="date" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="cueilleur">Choix du Cueilleur</label>
                                    <select name="cueilleur" id="selectCueilleur">
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="parcelle">Choix du Parcelle</label>
                                    <select name="parcelle" id="selectParcelle"></select>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Poids</label>
                                    <input type="text" class="form-control" placeholder="Poids" name="poids" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit"
                                        class="form-control btn btn-primary rounded submit px-3">Cueillir</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer.html' ?>

    <script src="../assets/Cueillette/js/jquery.min.js"></script>
    <script src="../assets/Cueillette/js/popper.js"></script>
    <script src="../assets/Cueillette/js/bootstrap.min.js"></script>
    <script src="../assets/Cueillette/js/main.js"></script>
    <script src="../assets/saisieCueillette/index.js"></script>

</body>

</html>