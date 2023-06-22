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
    @extends('template')
    @section('content')

    <style type="text/css">
        .paginate li{
            float: left:
            list-style-type:none ;
            margin: 10px
        }
    </style>

<a href="{{url('/portofolio/add')}}" class="btn btn_primary">Tambah Data</a>
<div class="card">
    <div class="card-body">
        <div class="table-responsive">

 <table class="table table-hover table-bordered table-striped">
    <tr>
        <th>no</th>
        <th>nama</th>
        <th>kategori</th>
        <th>deskripi</th>
        <th>foto</th>
        <th>aksi</th>
    </tr>

    <tr>
        @foreach ($portofolio as $key => $item)
        <td>{{ $key+1 }}</td>
        <td>{{ $item->nama_portofolio }}</td>
        <td>{{ $item->kategori}}</td>
        <td>{{ $item->deskripsi }}</td>
        <td>
            <img src="/storage/{{ $item->foto}}" alt="" width="100">
        </td>
        <td>
            <a href="/portofolio/hapus/{{ $item->id}}" class="btn btn-primary" onclick="return window.confirm('Hapus data ini?')">Hapus</a>
             <a href="/portofolio/edit/{{ $item->id}}" class="btn btn-primary">Edit</a>
        </td>
    </tr>
    @endforeach
 </table>           
        </div>
    </div>
</div>
</body>
</html>
@endsection