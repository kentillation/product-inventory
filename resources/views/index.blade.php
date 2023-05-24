<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product Inventory</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo asset('storage/css/style.css') ?>" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo asset('storage/bootstrap-icons/bootstrap-icons.css') ?>" />
    <link rel="stylesheet" href="<?php echo asset('storage/bootstrap/js/bootstrap.min.js') ?>" />
    <script src="<?php echo asset('storage/main.js') ?>"></script>
</head>
<body>
    <main>
        <div class="container mt-5 mb-5">
            <div class="container border rounded p-5 reports">
                <h1 class="heading1 text-center mb-5"><strong>PRODUCT INVENTORY</strong></h1>
                <div class="container mb-4">
                    <div class="table-responsive">
                        <table class="table table-hover text-center" id="table">
                            <thead class="text-bg-secondary">
                                <tr>
                                    <th>NAME</th>
                                    <th>PRICE</th>
                                    <th>DESCRIPTION</th>
                                    <th>UNIT</th>
                                    <th>AVAILABILITY</th>
                                    <th>QUANTITY</th>
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
    </main>
</body>
</html>
