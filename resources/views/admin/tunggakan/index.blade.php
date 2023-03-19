@extends('layouts.master')
@section('content')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-2">
            <h1>Tunggakan</h1>
            <a href="{{ route('tunggakan.create') }}" class="btn btn-sm text-white bg-success"><i class='fa fa-edit'> Create</i></a>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive pb-12">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NISN</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nominal</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Bulan Tunggakan</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Total Tunggakan</th>
                    {{-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 px-7">Action</th> --}}
                  </tr>
                </thead>
                <tbody>
                    @foreach ($tunggakan as $item)
                   <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->siswa->nama}}</td>
                    <td>{{ $item->siswa->nisn}}</td>
                    <td>{{ $item->id_spp }}</td>
                    <td>{{ $item->sisa_bulan}}</td>
                    <td>{{ $item->sisa_tunggakan }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
