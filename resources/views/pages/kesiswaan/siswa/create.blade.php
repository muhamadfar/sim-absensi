@extends('layouts.kesiswaan.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Input Data Siswa</h1>
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
       <form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="form-group">
            <input type="number" id="nis" name="nis" class="form-control" placeholder="Nis">
          </div>

          <div class="form-group">
            <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama">
          </div>

          <div class="form-group">
           <select name="rombel_id" class="form-control" id="rombel">
            @foreach($rombels as $item)
            <option value="{{$item->id}}">{{$item->rombel}}</option>
            @endforeach
          </select>
          </div>
          
           <div class="form-group">
           <select name="rayon_id" class="form-control" id="rayon">
            @foreach($datas as $rayon)
            <option value="{{$rayon->id}}">{{$rayon->rayon}}</option>
            @endforeach
          </select>
          </div>

           <div class="form-group">
             <p>Jenis Kelamin</p>
              <p><input type='radio' name="jk" value='laki-laki' checked='checked'/> Laki - Laki</p>
              <p><input type='radio' name="jk" value='perempuan'/> Perempuan</p>
            </label>
          </div>

            <div class="form-group mb-3">
                <button type="submit" class="btn btn-success">Input</button>
                <a class="btn btn-danger" href="{{route('siswa.index')}}">Cancel</a>
            </div>
        </form>
      </div>

      @endsection
