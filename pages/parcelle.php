<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Parcelle</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../assets/CRUD/style.css">
    <script type="text/javascript" src="../assets/parcelle/index.js" defer></script>

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
<?php if (isset($_GET["message"]) && $_GET["message"] != null) { ?>
<script>
alert("<?php echo htmlspecialchars($_GET["message"]); ?>")
</script>
<?php } ?>

<body>

    <?php include 'header.html' ?>
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Manage <b>Parcelle</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#addParcelleModal" class="btn btn-success" data-toggle="modal"><i
                                    class="material-icons">&#xE147;</i> <span>Add New Parcelle</span></a>

                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover" id="tab">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Surface</th>
                            <th>Variété</th>
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
    <div id="addParcelleModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="insertParcelle.php" method="post">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Parcelle</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Surface</label>
                            <input type="text" class="form-control" name="surface" required>
                        </div>
                        <div class="form-group">
                            <select name="variete" id="variete"></select>
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
    <div id="editParcelleModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="traitementModifParcelle.php" method="post">
                    <input type="hidden" name="id_parcelle" id="id_parcelle">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Parcelle</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Surface</label>
                            <input type="text" class="form-control" name="surface" id="modifsurface" required>
                        </div>
                        <div class="form-group">
                            <label>Variété</label>
                            <input type="text" class="form-control" name="var" id="modifvar" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-info" value="save">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include 'footer.html' ?>
</body>

</html>