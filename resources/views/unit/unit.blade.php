<!DOCTYPE html>
<html lang="en">
<head>
    <title>Unit | Product Inventory</title>
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
                    <h1 class="heading1 text-center mb-5"><strong>LIST OF UNIT</strong></h1>
                    <div class="search">
                        <div class="btn-dl me-2">
                            <button class="btn-add-user" type="button" title="ADD UNIT" data-bs-toggle="modal" data-bs-target="#addunitModal">
                                <i class="bi bi-plus-lg">&nbsp;</i>
                                ADD
                            </button>
                            <a href="{{ route('search-product') }}" title="View Stocks">
                                <button class="btn-download">
                                    <i class="bi bi-pencil-square">&nbsp;</i>
                                    View Stocks
                                </button>
                            </a>
                            <a href="{{ route('category-list') }}" title="Modify Category">
                                <button class="btn-download">
                                    <i class="bi bi-pencil-square">&nbsp;</i>
                                    Modify Category
                                </button>
                            </a>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <i class="bi bi-search"></i>
                            </span>
                            <input type="text" name="search" id="search" class="form-control" placeholder="Search name...">
                        </div>
                    </div>
                    <div class="container mb-4">
                        <div class="table-responsive">
                            <table class="table table-hover text-center" id="table">
                                <thead class="text-bg-secondary">
                                    <tr>
                                        <th>ID</th>
                                        <th>UNIT</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tbl_units as $unit)
                                        <tr>
                                            <td>{{ $unit->id }}</td>
                                            <td>{{ $unit->unit }}</td>
                                            <td>
                                                <a href="{{ route('update-unit', ['id' => $unit->id] ) }}">
                                                    <button class="btn-view btn-sm" title="EDIT">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </button>
                                                </a>
                                                <a href="{{ route('delete-unit', ['id' => $unit->id] ) }}">
                                                    <button class="btn-restricted btn-sm" title="DELETE">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="addunitModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h5 class="modal-title">New Unit</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="container">
                            <form method="POST" action="{{ route('save-unit') }}">
                                 @csrf
                                <div class="form-ni">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="text" id="unit" name="unit" class="form-control mt-2" placeholder="unit" required/>
                                                <label for="unit">Unit Name</label>
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
