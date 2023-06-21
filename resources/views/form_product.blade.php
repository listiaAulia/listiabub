@extends('template')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <form action=" {{ $action }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-2">
            <label for="" class="form-label">foto</label>
            <input type="file" name="foto" id="foto" class="form_control">
        </div>
        <div class="mb-2">
            <label for="" class="form-label">nama_barang</label>
            <input type="text" name="nama_barang" id="nama_barang" class="form_control" value="{{ $product->nama_barang}}" placeholder="Masukan nama_barang">
        </div>
        <div class="mb-2">
            <label for="" class="form-label">harga</label>
            <input type="text" name="harga" id="harga" class="form_control" value="{{ $product->harga }}" placeholder="Masukan harga">
        </div>
        <div class="mb-2">
        <label for="" class="form-label">deskripsi</label>
            <input type="text" name="deskripsi" id="deskripsi" class="form_control" value="{{ $product->deskripsi }}" placeholder="Masukan deskripsi">
        </div>
        <div class="mb-2">
            <td colspan="2" align="center">
                <input type="submit" value="{{ $tombol }}">
            </td>
        </div>
    </form>
</form>
    
</body>
</html>
@endsection
        