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
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Kelas</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Bulan</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nominal</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 px-7">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($tunggakan as $item)
                   <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{ $item->nama }}</h6>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0">{{ $item->nama_kelas }}</p>
                    </td>
                    <td class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0">{{ $item->bulan }}</p>
                    </td>
                    <td class="align-middle text-center">
                        <p class="text-xs font-weight-bold mb-0">{{ $item->nominal }}</p>
                    
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
