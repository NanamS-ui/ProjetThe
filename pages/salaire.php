<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title>Salaire</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="../assets/Salaire/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/Salaire/css/style.css">
    <link rel="stylesheet" href="../assets/Salaire/css/responsive.css">
    <link rel="icon" href="../assets/Salaire/images/fevicon.png" type="image/gif" />
    <link rel="stylesheet" href="../assets/Salaire/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="../assets/Salaire/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/Salaire/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <link rel="stylesheet" href="../assets/CRUD/style.css">
    <script type="text/javascript" src="../assets/Salaire/index.js"></script>

</head>

<body>
    <script>
    $(document).ready(function() {
        // Activate tooltip
        $('[data-toggle="tooltip"]').tooltip();

        // Select/Deselect checkboxes
        var checkbox = $('table tbody input[type="checkbox"]');
        $("#selectAll").click(function() {
            if (this.checked) {
                checkbox.each(function() {
                    this.checked = true;
                });
            } else {
                checkbox.each(function() {
                    this.checked = false;
                });
            }
        });
        checkbox.click(function() {
            if (!this.checked) {
                $("#selectAll").prop("checked", false);
            }
        });
    });
    </script>
    <?php if (isset($_GET["message"]) && $_GET["message"] != null) { ?>
    <script>
    alert("<?php echo htmlspecialchars($_GET["message"]); ?>")
    </script>
    <?php } ?>
    <?php include 'header.html' ?>
    <div class="services_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="services_taital">SALAIRE</h1><br></br>
                    <h2 id="valeur"></h2>
                    <div class="moremore_bt"><a href="#editSalaire" class="edit" data-toggle="modal"><i
                                class="material-icons" data-toggle="tooltip" title="Edit"></i>Edit</a></div>
                </div>
                <div class="col-md-4">
                    <div><img src="../assets/salaire.png" class="image_1"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="services_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="services_taital">Poids Minimal</h1><br></br>
                    <h2 id="poidsMinimal"></h2>
                    <div class="moremore_bt"><a href="#editPoidsMin" class="edit" data-toggle="modal"><i
                                class="material-icons" data-toggle="tooltip" title="Edit"></i>Edit</a></div>
                </div>
                <div class="col-md-4">
                    <div><img src="../assets/poids.jpg" class="image_1"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="services_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="services_taital">Bonus</h1><br></br>
                    <h2 id="bonus"></h2>
                    <div class="moremore_bt"><a href="#editBonus" class="edit" data-toggle="modal"><i
                                class="material-icons" data-toggle="tooltip" title="Edit"></i>Edit</a></div>
                </div>
                <div class="col-md-4">
                    <div><img src="../assets/bonus.png" class="image_1"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="services_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="services_taital">Mallus</h1><br></br>
                    <h2 id="mallus"></h2>
                    <div class="moremore_bt"><a href="#editMallus" class="edit" data-toggle="modal"><i
                                class="material-icons" data-toggle="tooltip" title="Edit"></i>Edit</a></div>
                </div>
                <div class="col-md-4">
                    <div><img src="../assets/mallus.jpg" class="image_1"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- include 'footer.html' -->
    <!-- Edit Modal HTML -->
    <div id="editSalaire" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="modifsalaire.php" method="post">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Salaire</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>salaire</label>
                            <input type="text" class="form-control" name="salaire" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-info" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Edit Poids HTML -->
    <div id="editPoidsMin" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="modifpoids.php" method="post">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Poids Minimal</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Poids Minimal</label>
                            <input type="text" class="form-control" name="poids" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-info" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Edit Bonus HTML -->
    <div id="editBonus" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="modifbonus.php" method="post">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Bonus</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Bonus</label>
                            <input type="text" class="form-control" name="bonus" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-info" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Edit Mallus HTML -->
    <div id="editMallus" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="modifmallus.php" method="post">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Mallus</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Mallus</label>
                            <input type="text" class="form-control" name="mallus" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-info" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../assets/Salaire/js/jquery.min.js"></script>
    <script src="../assets/Salaire/js/popper.min.js"></script>
    <script src="../assets/Salaire/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/Salaire/js/jquery-3.0.0.min.js"></script>
    <script src="../assets/Salaire/js/plugin.js"></script>
    <!-- sidebar -->
    <script src="../assets/Salaire/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../assets/Salaire/js/custom.js"></script>
    <!-- javascript -->
    <script src="../assets/Salaire/js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

</body>

</html>