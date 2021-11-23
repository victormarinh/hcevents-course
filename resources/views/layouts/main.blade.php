<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonte do Google -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- CSS Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <!-- Meu CSS -->
        {{-- <link rel="stylesheet" href="./css/styles.css"> --}}
        <link href="{{URL::asset('/css/styles.css')}}" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="./js/scripts.js">
        </script>
    </head>
    <body>
      <header>
        <nav class="navbar navbar-expand-lg navbar-lights">
          <div class="collapse navbar-collapse" id="navbar">
            <a href="/" class="navbar-brand">
              <img src="{{URL::asset('/img/hdcevents_logo.svg')}}" alt="HDC Events">
            </a>
            <ul class="navbar-nav">
              <li class="nav item">
                <a href="/" class="nav-link">Eventos</a>
              </li>
              <li class="nav item">
                <a href="/events/create" class="nav-link">Criar Eventos</a>
              </li>
              <li class="nav item">
                <a href="/" class="nav-link">Entrar</a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <main class="container-fluid">
        <div class="row">
          @if(session('msg'))
            <p class="msg">{{ session('msg') }}</p>
          @endif
          @yield('content')
        </div>
      </main>
        <footer>
            <p>HDC Events &copy; 2021</p>
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>
