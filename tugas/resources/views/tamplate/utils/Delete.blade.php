<form action="{{url('produk/'.$value->id)}}" method="POST" class="from-inline" onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?')">
    @csrf
    <input type="hidden" name="_method" value="Delete">
    <div class="">
    <button class="btn btn-danger " type="submit"><i class="fas fa-trash-alt"></i></button>
    </div>
</form>
