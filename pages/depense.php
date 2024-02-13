<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Category & Spent</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../assets/CRUD/style.css">
    <script type="text/javascript" src="../assets/depense/index.js"></script>

    <script>
        $(document).ready(function () {
            // Activate tooltip
            $('[data-toggle="tooltip"]').tooltip();

            // Select/Deselect checkboxes
            var checkbox = $('table tbody input[type="checkbox"]');
            $("#selectAll").click(function () {
                if (this.checked) {
                    checkbox.each(function () {
                        this.checked = true;
                    });
                } else {
                    checkbox.each(function () {
                        this.checked = false;
                    });
                }
            });
            checkbox.click(function () {
                if (!this.checked) {
                    $("#selectAll").prop("checked", false);
                }
            });
        });
    </script>
</head>

<body>
<?php if (isset($_GET["message"]) && $_GET["message"] != null) { ?>
    <script>alert("<?php echo htmlspecialchars($_GET["message"]); ?>")</script>
<?php } ?>
    <?php include 'header.html' ?>
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Manage <b>Category & Spent</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#addDepenseModal" class="btn btn-success" data-toggle="modal"><i
                                    class="material-icons">&#xE147;</i> <span>Add New Category & Spent</span></a>
                            <a href="#deleteDepenseModal" class="btn btn-danger" data-toggle="modal"><i
                                    class="material-icons">&#xE15C;</i> <span>Delete Category & Spent</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover" id="tab">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Date dépense</th>
                            <th>Description</th>
                            <th>Valeur</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="addDepenseModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="insertDepense.php" method="post">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Category & Spent</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Date dépense</label>
                            <input type="date" class="form-control" name="dtd" required>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <select name="depense" id="depense"></select>
                        </div>
                        <div class="form-group">
                            <label>Valeur</label>
                            <input type="text" class="form-control" name="val" required>
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
    <div id="editDepenseModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="#">
                    <input type="hidden" name="id" id="id">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Category & Spent</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Date dépense</label>
                            <input type="date" class="form-control" name="dtd" id="dtd" required>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control" name="descri" id="descri" required>
                        </div>
                        <div class="form-group">
                            <label>Valeur</label>
                            <input type="text" class="form-control" name="val" id="val" required>
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
    <!-- Delete Modal HTML -->
    <div id="deleteDepenseModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="#">
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Category & Spent</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete these Records?</p>
                        <p class="text-warning"><small>This action cannot be undone.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--<?php include 'footer.html' ?>-->
</body>

</html>