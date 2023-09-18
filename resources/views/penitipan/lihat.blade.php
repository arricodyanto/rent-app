@extends('layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Penitipan</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                {{-- <li class="breadcrumb-item"><a href="#">Database Test</a></li> --}}
                <li class="breadcrumb-item active">Penitipan</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="container mt-4">
        <div class=" d-flex flex-row-reverse">
          <a href="{{route('user.penitipan.create')}}">
            <button class="btn btn-primary btn-sm mb-4">Titipkan Kendaraan</button>
          </a>
        </div>
        <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th style="width: 15px">ID</th>
                <th class="text-center">Merk</th>
                <th class="text-center">Jenis Kendaraan</th>
                <th class="text-center">Nama Kendaraan</th>
                <th class="text-center">No. Polisi</th>
                <th class="text-center">Tanggal Dititipkan</th>
                <th class="text-center">Harga Sewa</th>
                <th class="text-center">Tanggal Ditarik</th>
                <th class="text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($titips as $titip)
                <tr>
                  <td>{{$titip->id_titip}}</td>
                  <td class="text-center">{{$titip->m_kendaraan->merk}}</td>
                  <td class="text-center">{{$titip->m_kendaraan->jenis}}</td>
                  <td class="text-center">{{$titip->m_kendaraan->nama}}</td>
                  <td class="text-center">{{$titip->m_kendaraan->nopol}}</td>
                  <td class="text-center">{{$titip->tgl_titip}}</td>
                  <td class="text-center">Rp. {{$titip->harga_sewa}}</td>
                  <td class="text-center">{{ date('d M Y', strtotime($titip->tgl_berakhir)) }}</td>
                  <td class="text-center">
                    <div class="btn-group">
                      <form action="{{route('user.penitipan.tarik', $titip->id_titip)}}" method="post" onsubmit="return confirm('Anda yakin ingin menarik kendaraan ini?');">
                        @csrf
                        @method('patch')
                        <input type="hidden" name="id_kendaraan" value="{{$titip->m_kendaraan->id_titip}}">
                        <button class="btn btn-warning btn-sm">Tarik Sekarang</button>                      </form>
                    </div>
                  </td>
                </tr>
              @empty
                <tr>Tidak ada data kendaraan.</tr>
              @endforelse
            </tbody>
          </table>
    </div>
    
@endsection