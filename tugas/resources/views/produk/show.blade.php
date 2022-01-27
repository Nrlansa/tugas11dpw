@extends('tamplate.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    Detail Data Produk
                </div>

                <div class="card-body">
                  <h5>{{$model->nama}}</h5>
                  <hr>
                  <p>
                      {{ $model->harga }} |
                     Stok : {{ $model->stok}} |
                     Berat : {{ $model->berat}}gr |
                     Tanggal Produk : {{ $model->created_at->format("d F Y")}}
                  </p>
                  <p>
                      {!! nl2br($model->deskripsi) !!}
                  </p>
                </div>
             </div>
        </div>
    </div>
</div>

@endsection
