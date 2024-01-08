<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Techsoft</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="/">TechSoft</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link text-light" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light" href="/service">Service</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light" href="/gallery">Gallery</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light" href="/faq">Faq</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light" href="/about">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light" href="/contact">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
    </header>

    <div>
        @yield('content')
    </div>

    <footer class="bg-dark p-3 text-center text-light">
        &copy; All Rights Reserved by KDIT.
    </footer>
</body>
</html>

