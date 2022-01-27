@extends('tamplate.base')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    Data User
                    <a href="{{url('user/create')}}" class="btn btn-dark float-end"><i class="fas fa-plus"></i>Tambah Data</a>
                </div>
                <div class="card-body">
                    <table  class="table-bordered table">
                        <tr>
                            <th>No</th>
                            <th colspan="1">AKSI</th>
                            <th>Username</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Email</th>
                        </tr>

                        @foreach ($datas as $data)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>
                                <div class="btn btn-group">
                                    <a class="btn btn-dark" href="{{ url ('user/'. $data->id)}}"><i class="fas fa-info"></i></a>
                                    <a class="btn btn-info" href="{{ url ('user/'.$data->id.'/edit')}}"><i class="fas fa-edit"></i></a>
                                    @include('user.delete')
                                </div>
                            </td>
                            <td>{{ $data->Username}}</td>
                            <td>{{ $data->Nama}}</td>
                            <td>{{ $data->jenis_kelamin_string }}</td>
                            <td>{{ $data->Email}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
