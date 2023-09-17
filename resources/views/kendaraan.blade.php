@extends('layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Data Kendaraan</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                {{-- <li class="breadcrumb-item"><a href="#">Database Test</a></li> --}}
                <li class="breadcrumb-item active">Data Kendaraan</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="container mt-4">
        <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th style="width: 15px">No.</th>
                <th class="text-center">Merk</th>
                <th class="text-center">Jenis Kendaraan</th>
                <th class="text-center">Nama Kendaraan</th>
                <th class="text-center">No. Polisi</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($kendaraans as $kendaraan)
                <tr>
                  <td>{{$kendaraan->id_kendaraan}}</td>
                  <td class="text-center">{{$kendaraan->merk}}</td>
                  <td class="text-center">{{$kendaraan->jenis}}</td>
                  <td class="text-center">{{$kendaraan->nama}}</td>
                  <td class="text-center">{{$kendaraan->nopol}}</td>
                </tr>
              @empty
                  
              @endforelse
            </tbody>
          </table>
    </div>
    
@endsection