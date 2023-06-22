<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
  <div class="navbar navbar-expand-lg navbar-dark bg-primary text-white">
    <div class="container-fluid">
        PORTOFOLIO
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar" aria-label=" toggle navigation" aria controls="mynavbar" aria-expended="false">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="profil" class="nav-link {{ Request::segment(1)=='profil'?'active':'' }}">profil</a>
                </li>
                <li class="nav-item">
                    <a href="portofolio" class="nav-link {{ Request::segment(1)=='portofolio'?'active':'' }}">portofolio</a>
                </li> <li class="nav-item">
                    <a href="user/logout" class="nav-link">keluar</a>
                </li>
            </ul>
        </div>
    </div>
  </div> 
  <div class="container mt-4">
    @yield('content')
  </div> 
</body>
</html>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>