@extends('layouts.app')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0">Edit Kendaraan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('kendaraan.lihat')}}">Data Kendaraan</a></li>
                        <li class="breadcrumb-item active">Edit Kendaraan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="container mt-4">
        <form action="{{ route('kendaraan.store', $kendaraan->id_kendaraan) }}" method="post">
            @csrf
            @method('put')
            <div class="card-body">
              <div class="form-group">
                <label for="merk">Merk Pabrikan Kendaraan</label>
                <input name="merk" type="text" class="form-control" id="merk" value="{{$kendaraan->merk}}" placeholder="Masukkan merk pabrikan kendaraan" required>
              </div>
              <div class="form-group">
                <label for="jenis">Jenis Kendaraan</label>
                <input name="jenis" type="text" class="form-control" id="jenis" value="{{$kendaraan->jenis}}"" placeholder="Masukkan jenis kendaraan" required>
              </div>
              <div class="form-group">
                <label for="nama">Nama Kendaraan</label>
                <input name="nama" type="text" class="form-control" id="nama" value="{{$kendaraan->nama}}"" placeholder="Masukkan nama kendaraan" required>
              </div>
              <div class="form-group">
                <label for="nopol">No. Kendaraan</label>
                <input name="nopol" type="text" class="form-control" id="nopol" value="{{$kendaraan->nopol}}"" placeholder="Masukkan nopol kendaraan" required>
              </div>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
    
@endsection