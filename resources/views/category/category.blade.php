<!DOCTYPE html>
<html lang="en">
<head>
    <title>Category | Product Inventory</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo asset('storage/css/style.css') ?>" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo asset('storage/bootstrap-icons/bootstrap-icons.css') ?>" />
    <link rel="stylesheet" href="<?php echo asset('storage/bootstrap/js/bootstrap.min.js') ?>" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="<?php echo asset('storage/main.js') ?>"></script>
</head>
<body onload="loaderFunction()">
    <main>
        <div id="loader"></div>
        <div id="forLoader" style="display:none;">
            <div class="container mt-5 mb-5">
                <div class="container border rounded p-5 reports">
                    <h1 class="heading1 text-center mb-5"><strong>LIST OF CATEGORY</strong></h1>
                    <div class="search">
                        <div class="btn-dl me-2">
                            <button class="btn-add-user mb-3" type="button" title="ADD CATEGORY" data-bs-toggle="modal" data-bs-target="#addcategoryModal">
                                <i class="bi bi-plus-lg">&nbsp;</i>
                                ADD
                            </button>
                            <a href="#" title="View Stocks">
                                <button class="btn-download">
                                    <i class="bi bi-pencil-square">&nbsp;</i>
                                    View Stocks
                                </button>
                            </a>
                            <a href="#" title="Modify Unit">
                                <button class="btn-download">
                                    <i class="bi bi-pencil-square">&nbsp;</i>
                                    Modify Unit
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="container mb-4">
                        <div class="table-responsive">
                            <table class="table table-hover text-center" id="table">
                                <thead class="text-bg-secondary">
                                    <tr>
                                        <th>ID</th>
                                        <th>CATEGORY</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="addcategoryModal">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h5 class="modal-title">New Category</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="container">
                                <form method="POST" action="#">
                                    @csrf
                                    <div class="form-ni">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-floating">
                                                    <input type="text" id="name" name="name" class="form-control mt-2" placeholder="Name" required/>
                                                    <label for="name">Name</label>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn-submit mt-3 mb-2">SUBMIT</button>
                                    </div>
                                </form>
                            </div>
                        </div> <!-- End of modal body-->
                    </div> <!-- End of modal content-->
                </div>
            </div>
        </div>
    </main>
</body>
</html>
