<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home page</title>
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/bootstrap.css">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">Logo</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="">
            <ul class="navbar-nav ml-auto">
                <li><a href="{{ route('home')  }}" class="nav-link">Home</a></li>
                <li><a href="{{ route('fullName') }}" class="nav-link">Full Name</a></li>
                <li><a href="{{ route('calculator') }}" class="nav-link">Calculator</a></li>
            </ul>
        </div>
    </div>
</nav>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card card-body">
                    <form action="">
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label">First Name</label>
                            <div class="col-md-8">
                                <input type="text" name="first_name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label">Last Name</label>
                            <div class="col-md-8">
                                <input type="text" name="last_name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label">Result</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label"></label>
                            <div class="col-md-8">
                                <input type="submit" name="" class="btn btn-success btn-block" value="Get Full Name">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<h1 class="text-center">Hello BITM</h1>

<script src="{{ asset('/') }}assets/js/jquery-3.6.0.min.js"></script>
<script src="{{ asset('/assets/js/bootstrap.bundle.js') }}"></script>
</body>
</html>
