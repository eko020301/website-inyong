<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <title>Website Inyong | @yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-danger bg-gradient navbar-dark fixed-top">
        <div class="container">
          <a class="navbar-brand" href="/">INYONG</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item dropdown">
                <button class="btn btn-danger btn-gradient dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  About
                </button>
                <ul class="dropdown-menu dropdown-menu-danger">
                  <li><a class="dropdown-item" href="#sambutan">Sambutan</a></li>
                  <li><a class="dropdown-item" href="#biodata">Biodata</a></li>
                </ul>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
</body>
</html>