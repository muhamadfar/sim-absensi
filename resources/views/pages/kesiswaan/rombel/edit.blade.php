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
    <div class="content">
    <div class="card card-info card-outline">
        <div class="card-header">
        <h3>Edit</h3>
        </div>
        <div class="card-body">
       <form action="{{ route('rombel.update', $rombels->id) }}" method="POST">
        {{ csrf_field() }}
          <div class="form-group">
            <input type="number" id="nis" name="nis" class="form-control" placeholder="Nis" value="{{ $rombels->nis }}">
          </div>

          <div class="form-group">
            <input type="text" id="jurusan" name="jurusan" class="form-control" placeholder="Jurusan" value="{{ $rombels->jurusan }}">
          </div>
          
           <div class="form-group">
            <input type="text" id="rombel" name="rombel" class="form-control" placeholder="Rombel" value="{{ $rombels->rombel }}">
          </div>

            <div class="form-group mb-3">
                <button type="submit" class="btn btn-success">Edit</button>
                <a class="btn btn-danger" href="{{route('rombel.index')}}">Cancel</a>
            </div>
        </form>
      </div>

      @endsection
