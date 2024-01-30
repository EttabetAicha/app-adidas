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
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('assets/' . $product->images) }}" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->product_name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <p class="card-text"><strong>Price: ${{ $product->price }}</strong></p>
                            <p class="card-text"><strong>Category: </strong>{{ $product->category ? $product->category->category_name : 'N/A' }}</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
    </div>

    <!-- Include Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
