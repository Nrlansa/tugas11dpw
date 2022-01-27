<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../css/styleProduk.css" rel="stylesheet" type="text/css">
     <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">

    <title>Pakpok Store</title>
  </head>
  <body>
      <!--navbar-->
        <nav class="navbar navbar-expand-lg navbar-light " style="background-color:#B0C4DE">
        <div class="container">
            <a class="navbar-brand" href="/homePage">
      <img src="../asset/shopping-cart.png" alt="" width="40" height="40" class="me-2">
      Pakpok <strong>Store</strong>
    </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <!--search-->
             <form class="d-flex ms-auto my-4 my-lg-0">
                <input class="form-control me-2" type="search" placeholder="Cari.." aria-label="Search">
                <button class="btn btn-light" type="submit"><i class="fas fa-search"></i></button>
            </form>
                <div class="navbar-nav ms-auto">
                <a class="nav-link active" aria-current="page" href="#">Keranjang</a>
                <a class="nav-link" href="#">Notifikasi</a>
                <a class="nav-link" href="#">bantuan</a>
                <a class="nav-link" href="/register">Daftar</a>
                <a class="nav-link" href="i/">Masuk</a>
            </div>
            </div>
        </div>
        </nav>
<!--akhir navbar-->

<!--Breadcrumb-->
<div class="container">
    <nav aria-label="breadcrumb" style="background-color: #ffffff;" class="mt-3">
        <ol class="breadcrumb p-3">
            <li class="breadcrumb-item"><a href="homePage.html" class="text-decoration-none">Home</a></li>
            <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Kategori</a></li>
            <li class="breadcrumb-item active" aria-current="page">Produk</li>
        </ol>
    </nav>
</div>

<!--akhir Breadcrumb-->

<!--SingleProduk-->
 <div class="container">
     <div class="row row-produk">
         <div class="col-lg-5">
            <figure class="figure">
                <img src="../asset/jam-tangan.jpg" class="figure-img img-fluid" style="border-radius: 5px; width: 325px;">
                <figcaption class="figure-caption d-flex justify-content-evenly">
                    <a href="#"><img src="../asset/jam-tangan.jpg" class="figure-img img-fluid" style="border-radius: 5px; width: 50px;"></a>

                    <a href="#"><img src="../asset/jam-tangan.jpg" class="figure-img img-fluid" style="border-radius: 5px; width: 50px;"></a>

                    <a href="#"><img src="../asset/jam-tangan.jpg" class="figure-img img-fluid" style="border-radius: 5px; width: 50px;"></a>

                    <a href="#"><img src="../asset/jam-tangan.jpg" class="figure-img img-fluid" style="border-radius: 5px; width: 50px;"></a>
 
                    <a href="#"><img src="../asset/jam-tangan.jpg" class="figure-img img-fluid" style="border-radius: 5px; width: 50px;"></a>
                </figcaption>
            </figure>
         </div>

         <div class="col-lg-7">
            <h4 style="font-size: 22px;" class="fw-bold">Jam Tangan Pria SKMEI Digital Sport</h4>
            <div class="garis-nama"></div>
            <h3 class="text-muted mb-3">Rp.89.000</h3>

            <button type="button" class="btn btn-dark btn-sm"><i class="fas fa-minus"></i></button>
            <span class="mx-2">2</span>
            <button type="button" class="btn btn-warning btn-sm"><i class="fas fa-plus text-white me-2"></i></button>
            <span class="mx-2">Tersisa 12 buah</span>

            <div class="btn-produk mt-3">
                <a href="#" class="btn btn-dark text-white btn-lg mt-2 btn-custom" ><i class="fas fa-shopping-cart fs-6 me-2"></i>Masukkan Keranjang</a>
                <a href="#" class="btn btn-warning text-white btn-lg mt-2 btn-custom" >Beli Sekarang</a>
            </div>

            <!--deskripsi-->
                    <div class="card mt-3 mb-4">
                        <div class="card-body">
                            <h1 class="h2">Jam Tangan Pria SKMEI Digital Sport</h1>
                            <p class="h3 py-2">Rp.89.000</p>
                            <p class="py-2">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-secondary"></i>
                                <span class="list-inline-item text-dark">Rating 4.8 | 36 Comments</span>
                            </p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Brand:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>SKMEI</strong></p>
                                </li>
                            </ul>

                            <h6>Description:</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse. Donec condimentum elementum convallis. Nunc sed orci a diam ultrices aliquet interdum quis nulla.</p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Avaliable Color :</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>White / Black</strong></p>
                                </li>
                            </ul>

                            <h6>Specification:</h6>
                            <ul class="list-unstyled pb-3">
                                <li>Lorem ipsum dolor sit</li>
                                <li>Amet, consectetur</li>
                                <li>Adipiscing elit,set</li>
                                <li>Duis aute irure</li>
                                <li>Ut enim ad minim</li>
                                <li>Dolore magna aliqua</li>
                                <li>Excepteur sint</li>
                            </ul>
                    </div>    
            <!--akhir deskripsi-->
        </div>
     </div>
 </div>
<!--akhir SingleProduk-->

   
<!--footer-->
<footer class="p-5 mt-5" style="background-color:#B0C4DE;">
    <div class="container">
        <div class="row mt-2">
            <div class="col-md-6 text-md-start text-center pt-2 pb-2">
                <a href="#" style="text-decoration: none;">
                    <img src="../asset/shopping-cart.png" style="width: 40px; height: 40px;">
                </a>
                <span class="ps-1">Copyright &copy; 2021|Created by <a href="https://www.instagram.com/nrlansi/" class="text-decoration-none text-dark fw-bold">NurulAnnisa</a></span>
            </div>

            <div class="col-md-6 text-md-end text-center pt-2 pb-2">
                <a href="#" style="text-decoration: none;">
                    <img src="../asset/sosial media/instagram.png" class="ms-2" style="width: 30px; height: 30px;">
                </a>

                <a href="#" style="text-decoration: none;">
                    <img src="../asset/sosial media/linkedin.png" class="ms-2" style="width: 30px; height: 30px;">
                </a>

                <a href="#" style="text-decoration: none;">
                    <img src="../asset/sosial media/twitter.png" class="ms-2" style="width: 30px; height: 30px;">
                </a>
                
            </div>

        </div>
    </div>
  </footer>
<!--akhir footer-->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>