<?php
include '../inc/fonction.php';
$dateDebut = $_GET['dateDebut'];
$dateFin = $_GET['dateFin'];

$list = getListPaiement($dateDebut, $dateFin);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listes paiement</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../assets/listPaiement/css/style.css">
</head>

<body>
    <?php include 'headerUser.html'; ?>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-4">
                    <h2 class="heading-section">Paiements Cueilleurs</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrap">
                        <table class="table">
                            <thead class="thead-primary">
                                <tr>
                                    <th>Date</th>
                                    <th>Nom Cueilleur</th>
                                    <th>Poids(Kg)</th>
                                    <th>Bonus(%)</th>
                                    <th>Mallus(%)</th>
                                    <th>Montant paiement</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < count($list); $i++) { ?>
                                    <tr>
                                        <td><?php echo $list[$i]['date']; ?></td>
                                        <td><?php echo $list[$i]['nomCueilleur']; ?></td>
                                        <td><?php echo $list[$i]['poids']; ?></td>
                                        <td><?php echo $list[$i]['bonus']; ?></td>
                                        <td><?php echo $list[$i]['malus']; ?></td>
                                        <td><?php echo $list[$i]['montantPaiement']; ?></td>
                                        <td>&nbsp;</td>
                                    </tr>
                                <?php } ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer.html'; ?>
    <script src="../assets/listPaiement/js/jquery.min.js"></script>
    <script src="../assets/listPaiement/js/popper.js"></script>
    <script src="../assets/listPaiement/js/bootstrap.min.js"></script>
    <script src="../assets/listPaiement/js/main.js"></script>

</body>

</html>