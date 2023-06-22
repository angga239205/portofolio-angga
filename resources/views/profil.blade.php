@extends('template')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <form action="{{ $action }}" method="post" enctype="multipart/form-data">
        @csrf
        <h4>Setting profil</h4>
        <div class="mb-2">
            <label for="" class="form-label">nis</label>
            <input type="text" name="nis" id="nis" class="form-control" value="{{ $nis }}" placeholder="masukan nis">
        </div>
        <div class="mb-2">
            <label for="" class="form-label">nama</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{ $nama }}" placeholder="masukan nama">
        </div>
        <div class="mb-2">
            <label for="" class="form-label">tempat tanggal lahir</label>
            <input type="text" name="ttl" id="ttl" class="form-control" value="{{ $ttl }}" placeholder="masukan tempat tangggal lahir">
        </div>
        <div class="mb-2">
            <label for="" class="form-label">sekolah</label>
            <input type="text" name="sekolah" id="sekolah" class="form-control" value="{{ $sekolah }}" placeholder="masukan sekolah">
        </div>
        <div class="mb-2">
            <label for="" class="form-label">alamat</label>
            <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $alamat }}" placeholder="masukan alamat">
        </div>
        <div class="mb-2">
            <label for="" class="form-label">foto</label>
            <img src="/storage/{{ $foto }}" alt="" width="100">
            <input type="file" name="foto" id="foto" class="form-control" value="foto">
        </div>
        <div class="mb-2">
            <input type="submit" value="simpan" class="btn btn-primary form-control">
        </div>
    </form>    
</body>
</html>
@endsection