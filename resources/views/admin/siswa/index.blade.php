@extends('layouts.master')
@section('content')
 

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-5">
                    <h1>Data Siswa</h1>
                    <a href="{{ route('siswa.create') }}" class="btn btn-sm text-white bg-success"><i class='fa fa-edit'> Create</i></a>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive pb-12">
             
                            <form action="{{ route('siswa.store') }}" method="post">
                            @csrf
                                <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NISN</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NIS</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID Kelas</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nomor Telfon</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID SPP</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                @foreach($siswa as $item)
                        
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{$item->nisn}}</td>
                                        <td>{{$item->nis}}</td>
                                        <td>{{$item->nama}}</td>
                                        <td>{{$item->id_kelas}}</td>
                                        <td>{{$item->alamat}}</td>
                                        <td>{{$item->no_telp}}</td>
                                        <td>{{$item->id_spp}}</td>
                                        <td>
                                            <a href="{{ route('siswa.edit',  $item->nisn) }}" class="btn btn-sm text-white bg-warning" data-id="{{ $item->nisn }}"><i class='fa fa-edit'> Edit</i></a>
                                            <a href="{{ route('siswa.destroy', $item->nisn) }}" data-toggle="modal" data-target="#exampleModal{{$item->nisn}}" class="btn btn-sm text-white bg-danger"><i class='fa fa-trash'> Delete</i></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 

    @endsection