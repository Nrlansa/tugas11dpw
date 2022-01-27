@extends('tamplate.base')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    Tambah Data Produk
                </div>

                <div class="card-body">
                    <form action="{{url('produk',$model->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="" class="control-label mt-2">nama</label>
                        <input type="text" class="form-control" name="nama"  value="{{$model->nama}}">
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label mt-2">berat</label>
                                    <input type="text" class="form-control" name="berat" value="{{$model->berat}}">
                                </div>
                        </div>

                    <div class="col-md-3">
                            <div class="form-group">
                                <label for="" class="control-label mt-2">harga</label>
                                <input type="text" class="form-control" name="harga" value="{{$model->harga}}">
                            </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="" class="control-label mt-2">foto</label>
                            <input type="file" class="form-control" name="foto" >
                            <img src="{{ URL::to('/') }}/foto/{{ $model->foto }}" class="img-thumbnail" width="50px"/>
                            <input type="hidden" class="form-control" name="foto"  >

                        </div>
                </div>

                    <div class="col-md-3">
                            <div class="form-group">
                                <label for="" class="control-label mt-2">stok</label>
                                <input type="text" class="form-control" name="stok" value="{{$model->stok}}">
                            </div>
                    </div>

            </div>
            <div class="form-group">
                <label for="" class="control-label mt-2">deskripsi</label>
                <textarea name="deskripsi" class="form-control" >{{$model->deskripsi}}</textarea>
            </div>
            <button type="submit" class="btn btn-dark mt-4 float-end"><i class="fas fa-save" ></i>Simpan</button>
                    </form>
                </div>
            </div>

        </div>

    </div>

</div>



@endsection
