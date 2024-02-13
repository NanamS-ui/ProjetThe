<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../assets/Cueillette/css/style.css">
    <title>Thé régénérer(mois)</title>
    <style>
    .titre {
        text-align: center;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .month-checkboxes {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        max-width: 600px;
        /* Pour contrôler la largeur de la liste */
    }

    .month-checkboxes label {
        margin-bottom: 10px;
        width: 48%;
        /* Chaque label prend 48% de la largeur de son conteneur */
    }

    .month-checkboxes input[type="checkbox"] {
        margin-right: 5px;
    }
    </style>
</head>

<body>
    <?php include 'header.html' ?>
    <?php if (isset($_GET["message"]) && $_GET["message"] != null) { ?>
    <script>
    alert("<?php echo htmlspecialchars($_GET["message"]); ?>")
    </script>
    <?php } ?>
    <h1 class="titre">Regeneration of Tea</h1>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Months</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="img" style="background-image: url(../assets/month.jpg);">
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <form action="traitementGenerer.php" class="signin-form" method="get">
                                <div class="month-checkboxes">
                                    <label><input type="checkbox" name="mois[]" value="1"> January</label>
                                    <label><input type="checkbox" name="mois[]" value="2"> February</label>
                                    <label><input type="checkbox" name="mois[]" value="3"> March</label>
                                    <label><input type="checkbox" name="mois[]" value="4"> April</label>
                                    <label><input type="checkbox" name="mois[]" value="5"> May</label>
                                    <label><input type="checkbox" name="mois[]" value="6"> June</label>
                                    <label><input type="checkbox" name="mois[]" value="7"> July</label>
                                    <label><input type="checkbox" name="mois[]" value="8"> August</label>
                                    <label><input type="checkbox" name="mois[]" value="9"> September</label>
                                    <label><input type="checkbox" name="mois[]" value="10"> October</label>
                                    <label><input type="checkbox" name="mois[]" value="11"> November</label>
                                    <label><input type="checkbox" name="mois[]" value="12"> December</label>
                                </div>
                                <div class="form-group">
                                    <button type="submit"
                                        class="form-control btn btn-primary rounded submit px-3">Save</button>
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
    <script src="../assets/regenerer/index.js"></script>
</body>

</html>