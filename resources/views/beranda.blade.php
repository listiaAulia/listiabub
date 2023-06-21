</section>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portopolio | Listia Aulia</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
      body {
        font-family: 'Times New Roman', Times, serif;
        background-color: rgb(22, 117, 241);
      }
      .form-label>span{
        color: Dark rgb(56, 23, 204);
      }
      </style>
</head>
<body>
  
  <!--Awal Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"> Asop Sopandi</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#Home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#About">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Shop
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
              
            </ul>
          </li>
          
          
        </ul>
        
      </div>
      <button class="btn btn-outline-light">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
          <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
          {{-- <a href="https://api.whatsapp.com/send?phone=082119641561&text=%22hallo%22" class="btn btn-outline-primary">views option</a> --}}
        </svg>
      </button>
    </div>
  </nav>
  <!--Akhir Navbar-->
  
  <!--Awal Home-->
  <section id="Home" class="bg-transparent py-4">
    <div class="container p-0 text-center pt-5 mb-3">
      <div class="row justify-content-center p-6">
        <img src="img/baner.jpeg" alt="Asop sopandi" width="100" height="300">
      </div>
    </div>
  </section>
  <!--Akhir Home-->
  <section>
    <div class="container mb-5 bg-transparent mt-5 " style="width: 80rem ;">
      <div class="container pt-4 px-1">
        <div class="row justify-content-center">
          @foreach ($product as $item)
        <div class="col col-md-3 mb-3 textr-center">
          <div class="card h-100" style="width: 16rem;">
            <img src="/storage/{{ $item->foto }}" class="card-img-top" alt="shop">
          <div class="card-body text-center">
            <div class="product">
            <h5 class="card-title">{{ $item->nama_barang }} </h5>
            <p class="card-tittle"> {{ number_format($item->harga) }}</p>
            <a href="product/detail/{{ $item->id }}" class="btn btn-outline-primary mt-auto">view option</a>
            </div>
          </div>
        </div>
          </div>
          @endforeach
    </div>
    </div>
    </section>
        

    <div class="container-fluid">
      <footer class="py-3 my-3 border-top">
        <p class="text-center">Copyright  &copy; Asop Sopandi <a href ="https://www.instagram.com/xxx" target="_blank" class="fw-bold text-decoration-none">2023</a></p>
      </footer>
    </div>
</body>
<script src="js/bootstrap.bundle.js"></script>
</html>