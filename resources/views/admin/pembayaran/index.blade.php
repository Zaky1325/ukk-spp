@extends('layouts.master')
@section('content')
 

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h1>Data Pembayaran</h1>
                    <a href="{{ route('pembayaran.create') }}" class="btn btn-sm text-white bg-success"><i class='fa fa-edit'> Create</i></a>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
             
                            <form action="{{ route('pembayaran.store') }}" method="post">
                            @csrf
                                <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Petugas</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NISN</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Bayar</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Bulan Dibayar</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tahun Dibayar</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID SPP</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jumlah Bayar</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                @foreach($pembayaran as $item)
                        
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{$item->id_petugas}}</td>
                                        <td>{{$item->nisn}}</td>
                                        <td>{{$item->tgl_bayar}}</td>
                                        <td>{{$item->bulan_dibayar}}</td>
                                        <td>{{$item->tahun_dibayar}}</td>
                                        <td>{{$item->id_spp}}</td>
                                        <td>{{$item->jumlah_bayar}}</td>
                                        <td>
                                            <a href="{{ route('pembayaran.edit',  $item->nisn) }}" class="btn btn-sm text-white bg-warning" data-id="{{ $item->nisn }}"><i class='fa fa-edit'> Edit</i></a>
                                            <a href="{{ route('pembayaran.destroy', $item->nisn) }}" data-toggle="modal" data-target="#exampleModal{{$item->nisn}}" class="btn btn-sm text-white bg-danger"><i class='fa fa-trash'> Delete</i></i></a>
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