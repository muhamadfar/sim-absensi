@extends('kesiswaan.index')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Data Siswa</li>
            </ol>
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
        <form action="{{ route('pages.kesiswaan.siswa.simpandata')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="input-group">
              <input type="file" class="form-control mb-3" name="image" id="image">
              <label class="input-group-text" for="image">Upload</label>
            </div>

          <div class="form-group">
            <input type="text" id="name" name="name" class="form-control" placeholder="Name Product">
          </div>

          <div class="form-group">
            <input type="number" id="price" name="price" class="form-control" placeholder="Price ">
          </div>

          <div class="form-group">
            <input type="number" id="stock" name="stock" class="form-control" placeholder="Stock">
          </div>

            <div class="form-group mb-3">
                <button type="submit" class="btn btn-success">Save Data</button>
                <a class="btn btn-danger" href="{{route('pages.admin.siswa.index')}}">Cancel</a>
            </div>
        </form>
      </div>

      @endsection
