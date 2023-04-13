@extends('layouts.kesiswaan.app')

@section('content')

<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col">
            <h1>Data Rayon</h1>
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
          <a class="btn btn-glass btn-success" href="{{ route('rayon.create')}}">Create</a>
            </div>
        </div>
        <div class="card-body">
          <table class="table table-bordered datatable">
            <tr>
            <th class="text-center">No</th>
            <th class="text-center" scope="col">Rayon</th>
              <th class="text-center" scope="col">Pembimbing</th>
              <th class="text-center" scope="col">Ruangan</th>
              <th class="text-center" scope="col">Aksi</th>
            </tr>
            @foreach ($rayons as $rayon)
            <tr>
              <th class="text-center" scope="row">{{ $loop->iteration }}</th>
              <td class="text-center" >{{ $rayon->rayon }}</td>
              <td class="text-center" >{{ $rayon->pembimbing }}</td>
              <td class="text-center" >{{ $rayon->ruangan }}</td>
                <td class="text-center">
              <form action="{{ route('rayon.destroy', $rayon->id)}}" method="POST">@csrf
                <a href="{{ route('rayon.edit', $rayon->id)}}" class="btn btn-primary">Edit</a>
          <button class="btn btn-danger" onClick="return confirm('Yakin Hapus Data?')">Delete</button>
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
