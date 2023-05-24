<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product Inventory | Edit Product</title>
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
                        <a href="{{ route('unit') }}" class="back-arrow" title="BACK">
                            <i class="bi bi-arrow-left"></i>
                        </a>
                    </div>
                    <form method="post" action="{{ route('saveUpdate', ['id' => $tbl_products['id']]) }}">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <label for="name">Product Name</label>
                                <input type='text' name='name' value="{{ $tbl_products['name'] }}" id="name" class="form-control mb-3" required />
                            </div>
                            <div class="col-12">
                                <label for="name">Price</label>
                                <input type='text' name='price' value="{{ $tbl_products['price'] }}" id="price" class="form-control mb-3" required />
                            </div>
                            <div class="col-12">
                                <label for="name">Description</label>
                                <input type='text' name='description' value="{{ $tbl_products['description'] }}" id="description" class="form-control mb-3" required />
                            </div>
                            <div class="col-12">
                                <label for="name">Unit Name</label>
                                <input type='text' name='unit' value="{{ $tbl_products['unit_id'] }}" id="unit" class="form-control mb-3" required />
                            </div>
                            <div class="col-12">
                                <label for="name">Availability</label>
                                <input type='text' name='availability' value="{{ $tbl_products['availability'] }}" id="availability" class="form-control mb-3" required />
                            </div>
                            <div class="col-12">
                                <label for="name">Quantity</label>
                                <input type='number' name='quantity' value="{{ $tbl_products['quantity_id'] }}" id="quantity" class="form-control mb-3" required />
                            </div>
                            <div class="col-12">
                                <label for="name">Category</label>
                                <input type='text' name='category' value="{{ $tbl_products['category_id'] }}" id="category" class="form-control mb-3" required />
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
