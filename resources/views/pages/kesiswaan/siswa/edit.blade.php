@extends('layouts.kesiswaan.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Data Siswa</h1>
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
       <form action="{{ route('siswa.update', $datas->id) }}" method="POST">
        {{ csrf_field() }}
            <div class="form-group">
            <input type="number" id="nis" name="nis" class="form-control" placeholder="Nis" value="{{ $datas->nis }}">
          </div>

          <div class="form-group">
            <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" value="{{ $datas->nama }}">
          </div>

          <div class="form-group">
            <input type="text" id="rombel" name="rombel" class="form-control" placeholder="Rombel"  value="{{ $datas->rombel }}">
          </div>
          
           <div class="form-group">
            <input type="text" id="rayon" name="rayon" class="form-control" placeholder="Rayon" value="{{ $datas->rayon }}">
          </div>

           <div class="form-group" value="{{ $datas->jk }}">
             <p>Jenis Kelamin</p>
              <p><input type='radio' name="jk" value='laki-laki' {{ $datas->jk == 'laki-laki' ? 'checked' : ''}}/> Laki - Laki</p>
              <p><input type='radio' name="jk" value='perempuan' {{ $datas->jk == 'perempuan' ? 'checked' : ''}}/> Perempuan</p>
            </label>
          </div>

            <div class="form-group mb-3">
                <button type="submit" class="btn btn-success">Edit Data</button>
                <a class="btn btn-danger" href="{{route('siswa.index')}}">Cancel</a>
            </div>
        </form>
      </div>

      @endsection
