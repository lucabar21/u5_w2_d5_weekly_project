<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','Epizon')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="main.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Epizon</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/products">Prodotti</a>
              </li>
              @auth
              <li class="nav-item">
                <x-responsive-nav-link class="nav-link" :href="route('products.create')" :active="request()->routeIs('products.create')">
                  {{ __('Aggiungi prodotto') }}
              </x-responsive-nav-link>
              </li>
              @endauth
            </ul>
         <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
             @guest
             <li class="nav-item">
              <x-responsive-nav-link class="nav-link" :href="route('login')" :active="request()->routeIs('login')">
                {{ __('Login') }}
            </x-responsive-nav-link>
      </li>
             @endguest
            @auth
            <li class="nav-item">
              <x-responsive-nav-link class="nav-link" :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                  {{ __('Dashboard') }}
              </x-responsive-nav-link>
          </li>
            <li class="nav-item">
                  <x-responsive-nav-link class="nav-link" :href="route('profile.edit')">
                    {{ Auth::user()->name }}
                  </x-responsive-nav-link>
          </li>
          <li class="nav-item">
                  <form method="POST" action="{{ route('logout') }}">
                      @csrf
  
                      <x-responsive-nav-link class="nav-link" :href="route('logout')"
                              onclick="event.preventDefault();
                                          this.closest('form').submit();">
                          {{ __('Log Out') }}
                      </x-responsive-nav-link>
                  </form>
          </li>
          @endauth
         </ul>
          </div>
        </div>
      </nav>

      <div class="container-fluid">
        <div class="row justify-content-center my-3">
            <div class="col-10">@yield('main-content')</div>
        </div>
      </div>

      <footer class="text-center p-4 bg-dark text-white">Tutti i diritti sono riservati &copy;</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>