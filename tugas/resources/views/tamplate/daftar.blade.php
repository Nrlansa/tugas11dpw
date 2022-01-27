<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/styleRegister.css">
    <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">

    <title>Pakpok Store</title>
  </head>
  <body>
      <!--nama dan password-->
        <div class="container">
           <div class="form-container">
               <h3 class="text-judul">Daftar</h3>
                <div class="row mt-5">
                    <div class="col-md-7">
                    <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                        <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user-edit"></i></span>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap">
                        </div>        
                    </div>
                    </div>

                    <div class="col-md-5">
                    <div class="mb-4">
                        <label for="exampleInputpassword" class="form-label">Password</label>
                        <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                        <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password">
                        </div>
                    </div>
                    </div>
                </div>

        <!--e-mail dan ulangi password-->
                <div class="row">
                    <div class="col-md-7">
                    <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label">E-mail</label>
                        <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="far fa-envelope"></i></span>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail">
                        </div>
                    </div>
                    </div>

                    <div class="col-md-5">
                    <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label">Ulangi Password</label>
                        <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-unlock-alt"></i></span>
                        <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ulangi Password">
                        </div>
                    </div>
                    </div>
                </div>

        <!--no.hp dan alamat-->
                <div class="row">
                    <div class="col-md-4">
                    <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label">No. HP</label>
                        <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-phone-alt"></i></span>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No. HP">
                        </div>
                    </div>
                    </div>

                    <div class="col-md-8">
                    <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label">Alamat</label>
                        <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="far fa-address-card"></i></span>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat">
                        </div>
                    </div>
                    </div>
                </div>
        
        <!--syarat dan tombol-->
                
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Saya Menyetujui <span class="text-danger fw-bold">Syarat & Ketentuan</span> Yang Berlaku <span class="text-danger fw-bold">*</span></label>
                </div>

              <div class="mt-5">
                <div class="row">
                    <div class="col-md-6 d-grid">
                        <button type="submit" class="btn btn-outline-primary"> Daftar</button>
                    </div>
                    <div class="col-md-6 d-grid">
                        <button type="reset" class="btn btn-outline-danger"> Hapus data</button>
                    </div>
                </div>
              </div>
    <!--login-->
              <div class="mt-3">
                  <label>Kamu Sudah Punya Akun? <a href="login" class="text-link">Login Disini</a></label>
              </div>

        </div> 
            </form> 
        </div>
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