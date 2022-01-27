<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../css/stylehome.css" rel="stylesheet" type="text/css">
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
                <a class="nav-link active" aria-current="page" href="/Singleproduk">Keranjang</a>
                <a class="nav-link" href="#">Notifikasi</a>
                <a class="nav-link" href="#">bantuan</a>
                <a class="nav-link" href="daftar">Daftar</a>
                <a class="nav-link" href="in">Masuk</a>
            </div>
            </div>
        </div>
        </nav>
    <!--akhir navbar-->

    <!--carousel-->
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide mt-4" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="../asset/welcome to our shope!.png" class="d-block img-fluid" alt="...">
            </div>
            <div class="carousel-item">
            <img src="../asset/Pakpok Store.png" class="d-block img-fluid" alt="..." >
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </div>

    <!--kategori-->
    <div class="container mt-5">
        <div class="judul-kategori" style="background-color: #ffffff; padding: 5px 10px;">
            <h5 class="text-center" style="margin-top: 5px;">KATEGORI</h5>
        </div>
        <div class="row text-center row-container mt-2">
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="menu-kategori">
                    <a href="#"><img src="../asset/kategori/android.png" class="img-categori mt-3"></a>
                    <p class="mt-2">Smartphone</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="menu-kategori">
                    <a href="#"><img src="../asset/kategori/camera.png" class="img-categori mt-3"></a>
                    <p class="mt-2">Fotografi</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="menu-kategori">
                    <a href="#"><img src="../asset/kategori/hobby.png" class="img-categori mt-3"></a>
                    <p class="mt-2">Hobby</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="menu-kategori">
                    <a href="#"><img src="../asset/kategori/laptop.png" class="img-categori mt-3"></a>
                    <p class="mt-2">Komputer & Aksesoris</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="menu-kategori">
                    <a href="#"><img src="../asset/kategori/wristwatch.png" class="img-categori mt-3"></a>
                    <p class="mt-2">Jam Tangan</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="menu-kategori">
                    <a href="#"><img src="../asset/kategori/tv.png" class="img-categori mt-3"></a>
                    <p class="mt-2">Elektronik</p>
                </div>
            </div>

        </div>
    </div>


<!--barang-->
 <section class="product_section layout_padding">
    <div class="container mt-5">
      <div class="heading_container heading_center" style="background-color: #ffffff; padding: 5px 10px">
          <h4 class="text-center" style="margin-top: 5px;"> PRODUK </h4>
      </div>
      <div class="row">
        <div class="col-sm-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="../asset/jam-tangan.jpg" alt="">
              <a href="/Singleproduk" class="add_cart_btn">
                <span>
                  Masukkan keranjang
                </span>
              </a>
            </div>
            <div class="detail-box">
              <h4>
                Jam Tangan Pria SKMEI Digital Sport
              </h4>
              <div class="product_info">
                <h5>
                  <span>Rp.</span>89.000
                </h5>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="far fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="../asset/anderson-AI-168E-26-2.jpg" alt="">
              <a href="" class="add_cart_btn">
                <span>
                  Masukkan keranjang
                </span>
              </a>
            </div>
            <div class="detail-box">
              <h4>
                GITAR AKUSTIK ELEKTRIK ANDERSON AI-168E 36 INCH
              </h4>
              <div class="product_info">
                <h5>
                  <span>Rp.</span> 1.599.000
                </h5>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="../asset/kamera.jpg" alt="">
              <a href="" class="add_cart_btn">
                <span>
                  Masukkan keranjang
                </span>
              </a>
            </div>
            <div class="detail-box">
              <h4>
                Canon EOS 600D
              </h4>
              <div class="product_info">
                <h5>
                  <span>Rp.</span> 2.988.000
                </h5>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="../asset/gambar 4.jpg" alt="">
              <a href="" class="add_cart_btn">
                <span>
                  Masukkan keranjang
                </span>
              </a>
            </div>
            <div class="detail-box">
              <h4>
                ASUS VivoBook X441BA
              </h4>
              <div class="product_info">
                <h5>
                  <span>Rp.</span>4.576.000.
                </h5>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="../asset/gambar 2.jpg" alt="">
              <a href="" class="add_cart_btn">
                <span>
                  Masukkan keranjang
                </span>
              </a>
            </div>
            <div class="detail-box">
              <h4>
                Lenovo IdeaPad S145 (14)
              </h4>
              <div class="product_info">
                <h5>
                  <span>Rp.</span> 4.299.000
                </h5>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>

          </div>
        </div>
          </div>
        </div>
      </div>

    </div>
  </section>
<!--tutup produk-->

<!--footer-->
<footer class="p-5 mt-5" style="background-color:#B0C4DE;">
    <div class="container">
        <div class="row mt-2">
            <div class="col-md-6 text-md-start text-center pt-2 pb-2">
                <a href="#" style="text-decoration: none;">
                    <img src="../asset/shopping-cart.png" style="width: 40px; height: 40px;">
                </a>
                <span class="ps-1">Copyright &copy; 2021 @if(date("Y") > '2021') - {{date("Y")}} @endif |Created by <a href="https://www.instagram.com/nrlansi/" class="text-decoration-none text-black fw-bold">NurulAnnisa</a></span>
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
