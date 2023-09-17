@extends('layouts.app')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0">Titipkan Kendaraan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('user.penitipan.lihat')}}">Data Penitipan</a></li>
                        <li class="breadcrumb-item active">Titipkan Kendaraan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="container mt-4">
        <form action="{{route('user.penitipan.new')}}" method="post">
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
              <div class="form-group">
                <label for="tgl_titip">Tanggal Dititipkan</label>
                <input name="tgl_titip" type="date" class="form-control" id="tgl_titip" required>
              </div>
              <div class="form-group">
                <label for="harga_sewa">Harga Sewa</label>
                <input name="harga_sewa" type="number" class="form-control" id="harga_sewa" placeholder="Masukkan nominal harga sewa per hari" required>
              </div>
              <div class="form-group">
                <label for="tgl_berakhir">Tanggal Berakhir</label>
                <input name="tgl_berakhir" type="date" class="form-control" id="tgl_berakhir">
              </div>
            </div>

            <button type="submit" class="btn btn-primary mb-4">Titipkan Kendaraan</button>
        </form>
    </div>
    
@endsection