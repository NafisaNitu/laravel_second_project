
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
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
                <li><a href="{{ route('student') }}" class="nav-link">Student</a></li>
            </ul>
        </div>
    </div>
</nav>

@yield('body')

<script src="{{ asset('/') }}assets/js/jquery-3.6.0.min.js"></script>
<script src="{{ asset('/assets/js/bootstrap.bundle.js') }}"></script>
</body>
</html>
