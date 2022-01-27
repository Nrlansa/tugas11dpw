@extends('tamplate.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    Detail Data User
                </div>

                <div class="card-body">
                  <h5>{{$model->Nama}}</h5>
                  <hr>
                  <p>
                      {{ "@". $model->Username }} |
                     Email : {{ $model->Email }}
                  </p>
                  <p>
                     No HP: {{ $model->detail->no_handphone }}
                  </p>
                </div>
             </div>
        </div>
    </div>
</div>

@endsection
