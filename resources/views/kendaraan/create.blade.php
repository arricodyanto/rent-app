@extends('layouts.app')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0">Tambah Kendaraan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.kendaraan.lihat')}}">Data Kendaraan</a></li>
                        <li class="breadcrumb-item active">Tambah Kendaraan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="container mt-4">
        <form action="{{route('admin.kendaraan.new')}}" method="post">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="merk">Merk Pabrikan Kendaraan</label>
                <input name="merk" type="text" class="form-control" id="merk"  placeholder="Masukkan merk pabrikan kendaraan" required>
              </div>
              <div class="form-group">
                <label for="jenis">Jenis Kendaraan</label>
                <input name="jenis" type="text" class="form-control" id="jenis" placeholder="Masukkan jenis kendaraan" required>
              </div>
              <div class="form-group">
                <label for="nama">Nama Kendaraan</label>
                <input name="nama" type="text" class="form-control" id="nama" placeholder="Masukkan nama kendaraan" required>
              </div>
              <div class="form-group">
                <label for="nopol">No. Kendaraan</label>
                <input name="nopol" type="text" class="form-control" id="nopol" placeholder="Masukkan nopol kendaraan" required>
              </div>
            </div>

            <button type="submit" class="btn btn-primary">Tambahkan</button>
        </form>
    </div>
    
@endsection