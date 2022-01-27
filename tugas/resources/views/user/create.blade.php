@extends('tamplate.base')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    Tambah Data User
                </div>
            <!---isi data produk--->
            <div class="card-body">
                    <form action="{{url('user')}}" method="POST">

                    @csrf

                    <div class="form-group">
                        <label for="" class="control-label">Nama</label>
                        <input type="text" class="form-control" name="Nama">
                    </div>

                    <div class="form-group">
                        <label for="" class="control-label">Username</label>
                        <input type="text" class="form-control" name="Username">
                    </div>

                    <div class="form-group">
                         <label for="" class="control-label">Email</label>
                        <input type="Email" class="form-control" name="Email">
                    </div>

                    <div class="form-group">
                         <label for="" class="control-label">Password</label>
                         <input type="Password" class="form-control" name="Password" >
                    </div>
                    <div class="form-group">
                         <label for="" class="control-label">No HP</label>
                         <input type="text" class="form-control" name="no_handphone" >
                    </div>
                    <!---akhir data user--->

                    <!---tombol simpan--->
                            <button type="submit" class="btn btn-dark mt-4 float-end"><i class="fas fa-save" ></i>Simpan</button>
                    <!---akhir tombol simpan--->
                    </form>
            </div>
        </div>
        </div>
    </div>
</div>

@endsection
