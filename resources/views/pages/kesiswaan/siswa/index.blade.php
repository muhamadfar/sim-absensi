@extends('layouts.kesiswaan.app')

@section('content')

<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col">
            <h1>Data Siswa</h1>
          <div class="col-sm-6">
       </div>
      </div>
    </div>
  </div>
    </div>
    <div class="content">
      <div class="card card-info card-outline">
      <div class="card-header">
        <div class="card-tools">
          <a class="btn btn-glass btn-success" href="{{ route('siswa.create')}}">Create</a>
            </div>
        </div>
        <div class="card-body">
          <table class="table table-bordered datatable">
            <tr>
            <th>No</th>
            <th scope="col">Nis</th>
              <th scope="col">Nama</th>
              <th scope="col">Rombel</th>
              <th scope="col">Rayon</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Aksi</th>
            </tr>
            @foreach ($datas as $siswa)
            <tr>
              <th scope="row">{{$siswa->id}}</th>
              <td>{{ $siswa->nis }}</td>
              <td>{{ $siswa->nama }}</td>
              <td>{{ $siswa->rombel }}</td>
              <td>{{ $siswa->rayon}}</td>
              <td>{{ $siswa->jk }}</td>
                <td>
              <form action="#" method="POST">@csrf
                <a href="#" class="btn btn-primary">Edit</a>
          <button class="btn btn-danger" onClick="return confirm('Are you sure you want to delete data?')">Delete</button>
        </form> 
              </td>
            </tr>
            @endforeach
          </table>

        </div>
        {{-- <div class="card-footer">
          {{$siswas->links('pagination::bootstrap-4')}}
        </div> --}}
      </div>
    </div>

    </div>
@endsection
