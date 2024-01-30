<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Adidas Management System</title>
    <!-- Include Bootstrap CSS (you can customize based on your preferences) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="jumbotron text-center">
            <h1 class="display-4">Welcome to Adidas Management System</h1>
            <p class="lead">Efficiently manage products, categories, and more.</p>
            <hr class="my-4">
            <p>Choose an option below to get started:</p>
            <div class="row">
                <div class="col-md-3">
                    <a href="{{ url('/category') }}" class="btn btn-primary btn-lg btn-block">Manage Categories</a>
                </div>
                <div class="col-md-3">
                    <a href="{{ url('/products') }}" class="btn btn-primary btn-lg btn-block">Manage Products</a>
                </div>
                <div class="col-md-3">
                    <a href="{{ url('/clients') }}" class="btn btn-primary btn-lg btn-block">Manage Clients</a>
                </div>
                <div class="col-md-3">
                    <a href="{{ url('/sales') }}" class="btn btn-primary btn-lg btn-block">Manage Sales</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
