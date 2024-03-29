<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Variété</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../assets/CRUD/style.css">
    <script type="text/javascript" src="../assets/variete/index.js"></script>

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
</head>

<body>
    <?php if (isset($_GET["message"]) && $_GET["message"] != null) { ?>
        <script>
            alert("<?php echo htmlspecialchars($_GET["message"]); ?>")
        </script>
    <?php } ?>
    <?php include 'header.html' ?>
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Manage <b>Variété du Thé</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#addVarieteModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Variété</span></a>
                            <a href="#deleteVarieteModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete Variété</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover" id="tab">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Occupation</th>
                            <th>Prix de Vente</th>
                            <th>Rendement</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="addVarieteModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="insertVariete.php" method="post">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Variété</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nom</label>
                            <input type="text" class="form-control" name="nom" required>
                        </div>
                        <div class="form-group">
                            <label>Occupation</label>
                            <input type="text" class="form-control" name="occupation" required>
                        </div>
                        <div class="form-group">
                            <label>Prix de vente</label>
                            <input type="text" class="form-control" name="prix" id="prix" required>
                        </div>
                        <div class="form-group">
                            <label>Rendement</label>
                            <input type="text" class="form-control" name="rendement" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="editVarieteModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="traitementModifVariete.php" method="post">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Variété</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <input type="hidden" class="form-control" name="id" id="id" required>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nom</label>
                            <input type="text" class="form-control" name="nom" id="nom" required>
                        </div>
                        <div class="form-group">
                            <label>Occupation</label>
                            <input type="text" class="form-control" name="occupation" id="occupation" required>
                        </div>
                        <div class="form-group">
                            <label>Prix de Vente</label>
                            <input type="text" class="form-control" name="prix" id="PV" required>
                        </div>
                        <div class="form-group">
                            <label>Rendement</label>
                            <input type="text" class="form-control" name="rendement" id="rendement" required>
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
    <?php include 'footer.html' ?>
</body>

</html>