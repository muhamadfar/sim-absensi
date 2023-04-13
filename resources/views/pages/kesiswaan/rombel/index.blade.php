@extends('layouts.kesiswaan.app')

@section('content')

<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col">
            <h1>Data Rombel</h1>
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
          <a class="btn btn-glass btn-success" href="{{ route('rombel.create')}}">Create</a>
            </div>
        </div>
        <div class="card-body">
          <table class="table table-bordered datatable">
            <tr>
            <th class="text-center">No</th>
            <th class="text-center" scope="col">Nis</th>
              <th class="text-center" scope="col">Jurusan</th>
              <th class="text-center" scope="col">Rombel</th>
              <th class="text-center" scope="col">Aksi</th>
            </tr>
            @foreach ($rombels as $item)
            <tr>
              <th class="text-center" scope="row">{{ $loop->iteration }}</th>
              <td class="text-center">{{ $item->nis }}</td>
              <td class="text-center">{{ $item->jurusan }}</td>
              <td class="text-center">{{ $item->rombel }}</td>
                <td>
              <form class="text-center" action="{{ route('rombel.destroy', $item->id)}}" method="POST">@csrf
                <a href="{{ route('rombel.edit', $item->id)}}" class="btn btn-primary">Edit</a>
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
