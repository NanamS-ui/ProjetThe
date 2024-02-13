<?php
include '../inc/fonction.php';
$dateDebut = $_GET['dateDebut'];
$dateFin = $_GET['dateFin'];
$CoutRevient = getCoutDeRevient($dateDebut, $dateFin);
$poidsRestant = getPoidsRestantRehetra($dateFin);
$venteTotal = getMontantDeVenteTotal($dateDebut, $dateFin);
$benefice = getBenefice($dateDebut, $dateFin);
$depense = getSommeDepense($dateDebut, $dateFin);
$poidsEntreDate = getPoidsTotalCueilliRehetraEntreDate($dateDebut, $dateFin);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="../assets/Resultats/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../assets/Resultats/css/animate.css">

    <link rel="stylesheet" href="../assets/Resultats/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/Resultats/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../assets/Resultats/css/magnific-popup.css">

    <link rel="stylesheet" href="../assets/Resultats/css/aos.css">

    <link rel="stylesheet" href="../assets/Resultats/css/ionicons.min.css">

    <link rel="stylesheet" href="../assets/Resultats/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../assets/Resultats/css/jquery.timepicker.css">


    <link rel="stylesheet" href="../assets/Resultats/css/flaticon.css">
    <link rel="stylesheet" href="../assets/Resultats/css/icomoon.css">
    <link rel="stylesheet" href="../assets/Resultats/css/style.css">
</head>

<body class="goto-here">
    <?php include 'headerUser.html' ?>
    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(../assets/cueillete.jpg);">
        <div class="container">
            <div class="row justify-content-center py-5">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="<?php echo $poidsEntreDate ?>">0</strong>
                                    <span>Poids Total Cueillette (Kg)</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="<?php echo $poidsRestant ?>"></strong>
                                    <span>Poids restants sur les parcelles (Kg) </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="<?php echo $venteTotal ?>"></strong>
                                    <span>Montant de vente (€)</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="<?php echo $depense ?>"></strong>
                                    <span>Dépenses (€) </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="<?php echo $benefice ?>"></strong></strong>
                                    <span>Bénéfices (€) </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="<?php echo $CoutRevient ?>"></strong>
                                    <span>Coùt de revient (€)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer.html' ?>
    <script src="../assets/Resultats/js/jquery.min.js"></script>
    <script src="../assets/Resultats/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="../assets/Resultats/../assets/Resultats/js/popper.min.js"></script>
    <script src="../assets/Resultats/js/bootstrap.min.js"></script>
    <script src="../assets/Resultats/js/jquery.easing.1.3.js"></script>
    <script src="../assets/Resultats/js/jquery.waypoints.min.js"></script>
    <script src="../assets/Resultats/js/jquery.stellar.min.js"></script>
    <script src="../assets/Resultats/js/owl.carousel.min.js"></script>
    <script src="../assets/Resultats/js/jquery.magnific-popup.min.js"></script>
    <script src="../assets/Resultats/js/aos.js"></script>
    <script src="../assets/Resultats/js/jquery.animateNumber.min.js"></script>
    <script src="../assets/Resultats/js/bootstrap-datepicker.js"></script>
    <script src="../assets/Resultats/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="../assets/Resultats/js/google-map.js"></script>
    <script src="../assets/Resultats/js/main.js"></script>

</body>

</html>