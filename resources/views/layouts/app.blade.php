<!-- Authors: Miguel Jaramillo and Sergio Córdoba-->

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
  <script src="https://kit.fontawesome.com/be50e46cfb.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.4.0/font/bootstrap-icons.min.css">
  <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
  <title>@yield('title', 'Temporal Adventures')</title>
</head>


<body>

<nav class="navbar navbar-expand-sm bg-light navbar-light px-4">
  <div class="container-fluid d-flex justify-content-between">
    <a class="navbar-brand" href="{{route('home.index')}}">
      <img src="{{ url('/images/logo-no-bg.png') }}" alt="Logo" style="width:60px;" class="rounded-pill">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{route('travel.index')}}">@lang('app.navbar_items.travels')</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">@lang('app.navbar_items.community_posts')</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ route('cart.index') }}">
          <i class="fas fa-shopping-cart"></i>
        </a>
      </li>
        <div class="vr bg-black mx-2 d-none d-lg-block"></div>
        @guest
        <a class="nav-link active" href="{{ route('login') }}">@lang('app.navbar_items.login')</a>
        <a class="nav-link active" href="{{ route('register') }}">@lang('app.navbar_items.register')</a>
        @else
        <li class="nav-item dropdown">
          <div class="nav-link dropdown-toggle" role="button" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-user"></i>
          </div>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li>
              <div class="dropdown-header">
                <span>{{ Auth::user()->getFirstName() }}</span>

              </div>
              <div class="dropdown-divider"></div>
            </li>
            <span class="dropdown-item-text">${{ Auth::user()->getBalance() }}</span>
            <div class="dropdown-divider"></div>
            <li>
              <form id="logout" action="{{ route('logout') }}" method="POST">
                <button type="submit" class="dropdown-item">@lang('app.navbar_items.logout')</button>
                @csrf
              </form>
            </li>
          </ul>
        </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>

<main>
    @yield('content')
</main>


<footer class="footer mt-auto py-3 bg-light fixed-bottom">
    <div class="container">
      <div class="text-center">
        <p class="mb-0">@lang('app.footer.copyright') - <a href="https://github.com/mstermigol" class="link-dark">Miguel Jaramillo</a> - <a href="https://github.com/sergiocordobam" class="link-dark">Sergio Cordoba</a> - <a href="https://github.com/DavidFonsek" class="link-dark">David Fonseca</a></p>
      </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</body>
