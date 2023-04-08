@extends('layouts.kesiswaan.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Input Data Rayon</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            {{-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Data Siswa</li>
            </ol> --}}
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
    <div class="card card-info card-outline">
        <div class="card-header">
        <h3>Create</h3>
        </div>
        <div class="card-body">
       <form action="{{ route('rayon.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="form-group">
            <input type="text" id="rayon" name="rayon" class="form-control" placeholder="Rayon">
          </div>

           <div class="form-group">
            <input type="text" id="pembimbing" name="pembimbing" class="form-control" placeholder="Pembimbing">
          </div>

          <div class="form-group">
            <input type="number" id="ruangan" name="ruangan" class="form-control" placeholder="ruangan">
          </div>

            <div class="form-group mb-3">
                <button type="submit" class="btn btn-success">Input</button>
                <a class="btn btn-danger" href="{{route('rayon.index')}}">Cancel</a>
            </div>
        </form>
      </div>

      @endsection
