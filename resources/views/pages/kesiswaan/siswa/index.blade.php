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
        <div class ="card-tools">
          <a class="btn btn-glass btn-success" href ="{{ route('siswa.create')}}">Create</a>
            </div>
        </div>
        <div class="card-body">
          <table class="table table-bordered">
            <tr>
            <th class="text-center">No</th>
            <th class="text-center" scope="col">Nis</th>
              <th class="text-center" scope="col">Nama</th>
              <th class="text-center" scope="col">Rombel</th>
              <th class="text-center" scope="col">Rayon</th>
              <th class="text-center" scope="col">Jenis Kelamin</th>
              <th class="text-center" scope="col">Aksi</th>
            </tr>
            @foreach ($datas as $siswa)
            <tr>
              <th class="text-center" scope="row">{{ $loop->iteration }}</th>
              <td class="text-center">{{ $siswa->nis }}</td>
              <td class="text-center">{{ $siswa->nama }}</td>
              <td class="text-center">{{ $siswa->rombel->rombel }}</td>
              <td class="text-center">{{ $siswa->rayon->rayon}}</td>
              <td class="text-center">{{ $siswa->jk }}</td>
                <td>
              <form class="text-center" action="{{ route('siswa.destroy', $siswa->id)}}" method="POST">@csrf
                <a href="{{route('siswa.edit', $siswa->id)}}" class="btn btn-primary">Edit</a>
          <button class="btn btn-danger" onClick="return confirm('Yakin hapus data?')">Delete</button>
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
