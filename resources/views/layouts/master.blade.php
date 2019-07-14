<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Event planning suggestion app</title>
    <link rel="stylesheet" href="{{asset('dist/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap.css')}}">
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar  navbar-dark bg-primary">
            <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header" style="background-color: #FF9E1F!important;">
            </button>
            <div class="collapse navbar-toggleable-xs" id="navbar-header">
                <a class="navbar-brand" href="#">Event App</a>

                <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
             Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
               
        </nav>
        <!-- /navbar -->
        <!-- main content -->
        @yield('content')
    <!-- /container -->

    <script src="{{asset('dist/js/jquery3.min.js')}}"></script>
    <script src="{{asset('dist/js/bootstrap.js')}}"></script>
</body>

</html>

