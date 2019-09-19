<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Crowd Source</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">

        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="container is-fullhd">
        <section class="hero is-fullheight is-primary is-bold">
        <div class="hero-head">
      <nav class="navbar">
        <div class="container">
          <div class="navbar-brand">
            <a href="/" class="navbar-item">
              <h1 class="title is-1">EventCrowd</h1>
            </a>
            <span class="navbar-burger burger" data-target="navbarMenuHeroB">
              <span></span>
              <span></span>
              <span></span>
            </span>
            </div>
            @if (Route::has('login'))
                <div class="top-right links" >
                    @auth
                        <a class="button is-warning is-inverse" href="{{ url('/home') }}">Home</a>
                    @else
                    <div id="navbarMenuHeroB" class="navbar-menu">
                    <div class="navbar-end">
                    <span class="navbar-item">
                <a  href="{{ route('register') }}" class="button is-danger">
                <span class="icon">
                <i class="fas fa-user-plus"></i>
                  </span>  <span>Register</span>
                </a>
              </span>
                        @if (Route::has('register'))
                        <span class="navbar-item">
                <a href="{{ route('login') }}" class="button is-warning">
                <span class="icon">
                <i class="fas fa-sign-in-alt"></i>
                  </span>
                  <span>Login</span>
                </a>
              </span>
            </div>
            </div>
        </div>
      </nav>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="hero-body">
      <div class="container has-text-centered">
        <div class="columns">
          <div class="column is-6">
            <p class="title is-size-1">
              Welcome to the event crowd source app!
            </p>
            <p class="subtitle is-size-4">
              This app helps you to decide: where, when and the cost of an event!
            </p>
          </div>
          <div class="column clear-spaces">
            <img src="https://images.pexels.com/photos/1983046/pexels-photo-1983046.jpeg?cs=srgb&dl=audience-band-celebration-1983046.jpg&fm=jpg" alt="event" width="800">
          </div>
        </div>
      </div>
    </div>

  </section>
</div>
    </body>
</html>


