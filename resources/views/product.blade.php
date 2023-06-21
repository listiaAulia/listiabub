@extends('template')
@section('content')
<a href="{{ url('product/add') }}" class="btn btn-success mb-3">Tambah Data</a>
<table class="table table-hover table-bordered table table-triped" border="1">
<tr>
        <th>No</th>
        <th>Foto</th>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Deskripsi</th>
        <th>Aksi</th>
    </tr>
    
    @foreach ($product as $key => $item)
    <tr>
        <td>{{ $key + 1 }}</td>
    
        <td>
            <img src="/storage/{{ $item->foto}}" alt="" width="100">
        </td>
        <td>{{ $item->nama_barang }}</td>
        <td>{{ $item->harga }}</td>
        <td>{{ $item->deskripsi }}</td>
        <td>
            <a href="/product/hapus/{{ $item->id }}" onclick="return window.confirm('hapus data ini?')" class="btn btn-danger">Hapus</a>
            <a href="/product/edit/{{ $item->id }}" class="btn btn-info">Edit</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection
