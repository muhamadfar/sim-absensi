@extends('layouts.kurikulum.app')

@section('content')

<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col">
            <h1>Data Mapel</h1>
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
          <a class="btn btn-glass btn-success" href ="{{ route('mapel.create')}}">Create</a>
            </div>
        </div>
        <div class="card-body">
          <table class="table table-bordered">
            <tr>
            <th class="text-center">No</th>
            <th class="text-center" scope="col">Nama</th>
              <th class="text-center" scope="col">Jenis Kelamin</th>
              <th class="text-center" scope="col">Hari</th>
              <th class="text-center" scope="col" rowspan="1">Jam</th>
              <th class="text-center" scope="col">Mata Pelajaran</th>
              <th class="text-center" scope="col" rowspan="1">Rombel</th>
            </tr>
            @foreach ($mapels as $mapel)
            <tr>
              <th class="text-center" scope="row" rowspan=" 2">{{ $loop->iteration }}</th>
              <td class="text-center" rowspan=" 2">{{ $mapel->nama }}</td>
              <td class="text-center" rowspan=" 2">{{ $mapel->jk }}</td>
              <td class="text-center" rowspan=" 2">{{ $mapel->hari_id }}</td>
              <td class="text-center">{{ $mapel->jam }}</td>
              <td class="text-center" rowspan=" 2">{{ $mapel->mapel }}</td>
              <td class="text-center">{{ $mapel->rombel_id }}</td>
              <td>
              <form class="text-center" action="#" method="POST">@csrf
                <a href="#" class="btn btn-primary">Edit</a>
          <button class="btn btn-danger" onClick="return confirm('Yakin hapus data?')">Delete</button>
        </form>
              </td>
            </tr>
            <tr>
                <td class="text-center" rowspan="1" >{{ $mapel->jam }}</td>
                <td class="text-center" rowspan="1" >{{ $mapel->rombel_id }}</td>
                <td>
                    <form class="text-center" rowspan="1" action="#" method="POST">@csrf
                        <a href="#" class="btn btn-primary">Edit</a>
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
