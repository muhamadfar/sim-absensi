@extends('layouts.kesiswaan.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Input Data Rombel</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
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
       <form action="{{ route('rombel.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="form-group">
            <input type="number" id="nis" name="nis" class="form-control" placeholder="Nis">
          </div>

          <div class="form-group">
            <input type="text" id="jurusan" name="jurusan" class="form-control" placeholder="Jurusan">
          </div>
          
           <div class="form-group">
            <input type="text" id="rombel" name="rombel" class="form-control" placeholder="Rombel">
          </div>

            <div class="form-group mb-3">
                <button type="submit" class="btn btn-success">Input</button>
                <a class="btn btn-danger" href="{{route('rombel.index')}}">Cancel</a>
            </div>
        </form>
      </div>

      @endsection
