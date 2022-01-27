@extends('tamplate.base')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <br>
            <form  method="GET" action="{{ url('produk') }}">
                <input type="text" name="keyword" value="{{$keyword}}"/>
                <button type="submit">Search</button>
            </form>
            <br>
            <div class="card">
                <div class="card-header">
                    Data Produk
                    <a href="{{url('produk/create')}}" class="btn btn-dark float-end"><i class="fas fa-plus"></i>Tambah Data</a>
                </div>
                <div class="card-body">
                    <table  class="table-bordered table">
                        <tr>
                            <th>No</th>
                            <th colspan="1">AKSI</th>
                            <th>nama</th>
                            <th>Gambar</th>
                            <th>harga</th>
                            <th>stok</th>

                        </tr>

                        @foreach ($datas as $key=>$value )
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>
                                <div class="btn btn-group">
                                    <a class="btn btn-dark" href="{{ url ('produk/'. $value->id)}}"><i class="fas fa-info"></i></a>
                                    <a class="btn btn-info" href="{{ url ('produk/'.$value->id.'/edit')}}"><i class="fas fa-edit"></i></a>
                                    @include('tamplate.utils.Delete')
                                </div>
                            </td>
                            <td>{{ $value->nama}}</td>
                            <td><img src="{{ URL::to('/') }}/foto/{{ $value->foto }}" width="130px"> </td>
                            <td>{{ $value->harga}}</td>
                            <td>{{ $value->stok}}</td>
                        </tr>
                        @endforeach
                    </table>
                    {{ $datas->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
