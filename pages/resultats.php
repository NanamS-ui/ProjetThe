<!doctype html>
<html lang="en">

<head>
    <title>Résultats</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../assets/Cueillette/css/style.css">

</head>

<body>
    <?php include 'headerUser.html' ?>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Résultats</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="img" style="background-image: url(../assets/resultat.jpg);">
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <form action="affResultats.php" class="signin-form" method="get">
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Date Début</label>
                                    <input type="date" class="form-control" placeholder="Date dépense" name="dateDebut" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Date Fin</label>
                                    <input type="date" class="form-control" placeholder="Date dépense" name="dateFin" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Valider</button>
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

</body>

</html>