<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product Inventory | Edit Category</title>
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
            <div class="container border rounded p-5 mt-5" id="table">
                <div class="container">
                    <div class="mb-5">
                        <a href="{{ route('category') }}" class="back-arrow" title="BACK">
                            <i class="bi bi-arrow-left"></i>
                        </a>
                    </div>
                    <form method="post" action="{{ route('saveUpdate', ['id' => $tbl_units['id']]) }}">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <label for="name">Category Name</label>
                                <input type='text' name='category' value="{{ $tbl_category['category'] }}" id="category" class="form-control mb-3" required />
                            </div>
                        </div>
                        <div class="container mt-2">
                            <button class="btn-profile mt-3" type="submit">
                                <i class="bi bi-arrow-clockwise"></i>
                                &nbsp;Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
