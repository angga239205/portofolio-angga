<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> My Portopolio | angga</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body{
            font-family: 'Times New Roman', Times, serif;
            background-color: rgb(122, 185, 27);

        }
        
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
          <a class="navbar-brand" href="#">Angga Saeful Azhar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::segment(1)=='profil'?'active':'' }}" aria-current="page" href="#profil">profil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::segment(1)=='about'?'active':'' }}" href="#about">about me</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::segment(1)=='portofolio'?'active':'' }}" href="#portofolio">portofolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::segment(1)=='contact'?'active':'' }}" href="#contact">contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>  
      <!--Akhir Navbar-->
      <!--Home-->
      <section id="profil">
        <div class="container-fluid p-0">
          <div class="text-light text-center p-5">
            <img src="/storage/{{ $profil->foto }}" alt="" width="400" height="400">
              <h2 class="fw-bold mt-3">{{ $profil->nis }}</h2>
              <p class="fs-5">{{ $profil->nama }}</p>
              <p class="fs-5">{{ $profil->ttl }}</p>
              <p class="fs-5">{{ $profil->sekolah }}</p>
              <p class="fs-5">{{ $profil->alamat }}</p>
          </div>

        </div>

      </section>

      <!--About-->
        <section id="about" class="pt-5">
          <div class="container">
              <div class="p-5 text-center">
                <h3 class="fw-bold mb-3">About me</h3>
                <div class="row justify-content-center">
                  <div class="col-md-4">
                    <p>jika solat tidak kau dirikan berati hidup mu pun akan berlahan hancur
                  </div>
                  <div class="col-md-4">
                    <p>di balik seseorang yang full problems,lonely,sebenarnya tuhan sedang membentuk manusia yang 
                      unbeatabel
                </div>

              </div>
          </div>

        </section>
      <!--Akhir About-->
      <section id="home" class="pt-5">
        <div class="container">
          <div class="pt-5 text-center">
            <div class="fw-bold mb-3">
              <p>rahasiaaa
            </div>

          </div>

        </div>

      </section>

      <!--Project-->
        <section id="portofolio" class="pt-5">
          <div class="container">
            <div class="p-5 text-bg-light text-center">
              <h3 class="fw-bold mb-3">My Project</h3>
              <div class="row justify-content-center">
                <div class="col-md-4 mb-3">
                  <div class="card">
                    @foreach ($portofolio as $item)
                    <img src="/storage/{{ $item->foto}}" class="card-img-top" alt="project">
                    <div class="card-body">
                      <p class="card-text">nama portofolio :{{ $item->nama_portofolio }} </p>
                      <p class="card-text">nama kategori :{{ $item->kategori }} </p>
                      <p class="card-text">nama deskripi :{{ $item->deskripi }} </p>
                    </div>
                  </div>
                </div>
                @endforeach
                
      <!--Akhir Project-->
      <!--CONTACT ME-->
      <section id="contact">
        <div class="container p-5">
          <h3 class="fw-bold text-center mb-3">Contact Me</h3>
          <div class="row-justify-content-center">
            <div class="col-md-6">
              <from action=""method="post">
           </div>
            <div class="mb-3">
              <label for="" class="form-label">Nama Lengkap <span>*</span></label>
              <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Email <span>*</span></label>
                <input type="text" name="email" id="email" class="form-control">
                </div>  
                <div class="mb-3">
                  <label for="" class="form-label">Pesan <span>*</span></label>
                  <input type="text" name="pesan" id="pesan" class="form-control">
                  </div>
          <div class="mb-3">
            <input type="submit" value="kirim" class="btn btn-primary">
          </div>
          </div>
          </from>
          </div>
        </div>

      </section>
      <!--akhir contact me-->
      <div class="container-fluid">
        <footer class="py-3 my-3 border-top">
          <p class="text-center">&copy;2023 <a href="" class="fw-bold text-decoration-none">Angga saeful azhar</a></p>

        </footer>

      </div>
</body>
<script src="js/bootstrap.bundle.js" ></script>
</html>