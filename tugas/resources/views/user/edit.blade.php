@extends('tamplate.base')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    Edit Data User
                </div>
            <!---isi data produk--->
            <div class="card-body">
                    <form action="{{url('user', $model->id)}}" method="POST">

                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="" class="control-label">Nama</label>
                        <input type="text" class="form-control" name="Nama" value="{{$model->Nama}}">
                    </div>

                    <div class="form-group">
                                    <label for="" class="control-label">Username</label>
                                    <input type="text" class="form-control" name="Username" value="{{$model->Username}}">
                    </div>

                    <div class="form-group">
                                    <label for="" class="control-label">Email</label>
                                    <input type="Email" class="form-control" name="Email" value="{{$model->Email}}">
                    </div>

                    <div class="form-group">
                                    <label for="" class="control-label">Password</label>
                                    <input type="Password" class="form-control" name="Password" >
                    </div>
                    <div class="form-group">
                                    <label for="" class="control-label">No Hp</label>
                                    <input type="text" class="form-control" name="no_handphone" >
                    </div>
            <button type="submit" class="btn btn-dark mt-4 float-end"><i class="fas fa-save" ></i>Simpan</button>
                    </form>
                </div>
            </div>

        </div>

    </div>

</div>



@endsection
