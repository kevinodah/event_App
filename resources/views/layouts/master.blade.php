<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
  <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>

<body>
<div class="hero is-small is-primary is-bold">
    <nav class="navbar">
      <div class="container">
        <div class="navbar-brand">
          <a href="/home"class="navbar-item">
            <h1 class="title is-1">EventCrowd</h1>
          </a>
          <span class="navbar-burger burger" data-target="navbarMenuHeroB">
            <span></span>
            <span></span>
            <span></span>
          </span>
        </div>
        <div id="navbarMenuHeroB" class="navbar-menu">
          <div class="navbar-end">
            <span class="navbar-item">
              <a class="button is-warning">
                <span class="icon">
                  <i class="fas fa-sign-in-alt"></i>
                </span>
                <span href="{{ route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >sign-out</span>
              </a>
            </span>
          </div>

        </div>
      </div>
    </nav>
  </div>
  <br><br>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
               
        </nav>
        @yield('content')
</body>

</html>