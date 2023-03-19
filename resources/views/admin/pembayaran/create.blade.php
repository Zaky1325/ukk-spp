@extends('layouts.master')
    @section('content')

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.js"></script>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-5">
                    <h1>Pembayaran</h1>

                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive pb-12">
                            <form enctype="multipart/form-data" method="post" action="{{ route('pembayaran.store')}}">
                                @csrf
                                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                                <table class="table align-items-center mb-0">
                                    <thead>
                                    <form>
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Nama Petugas</label>
                                            <input class="form-control" readonly type="string" name="id_petugas" value="{{ Auth::user()->name }}" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">NISN</label>
                                            <select class="form-control" type="string"  name="siswa_id" id="example-text-input">
                                                @foreach ($siswa as $data)
                                                <option value="{{$data->id}}">{{$data->nisn}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Nama</label>
                                            <select class="form-control" type="string"  name="tunggakan" id="example-text-input">
                                                @foreach ($tunggakan as $data)
                                                <option {{ $data->id == old('tunggakan') ? 'selected' : '' }} value="{{$data->id}}">{{$data->siswa->nama}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        {{-- <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Tanggal Bayar</label>
                                            <input class="form-control" type="date" name="tgl_bayar" id="example-text-input">
                                        </div> --}}
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Nominal SPP</label>
                                            <select class="form-control" type="number" name="id_spp" id="example-text-input">
                                                @foreach ($spp as $data)
                                                <option value="{{$data->nominal}}">{{$data->nominal}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Bulan</label>
                                            <input class="form-control" type="text" name="bulan" id="example-text-input">
                                            {{-- <select class="form-control" type="text" name="bulan" id="example-text-input">
                                                <option>Januari</option>
                                                <option>Februari</option>
                                                <option>Maret</option>
                                                <option>April</option>
                                                <option>Mei</option>
                                                <option>Juni</option>
                                                <option>Juli</option>
                                                <option>Agustus</option>
                                                <option>September</option>
                                                <option>Oktober</option>
                                                <option>November</option>
                                                <option>Desember</option>
                                            </select> --}}
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Bulan Dibayar</label>
                                            <input class="form-control" type="string" name="bulan_dibayar" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Jumlah Bayar</label>
                                            <input class="form-control" type="number" name="jumlah_bayar" id="example-text-input">
                                        </div>
                                    </form>
                                    </thead>
                                    <tbody>
                                    <button type="submit" class="btn btn-primary">Create</button>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 

    @endsection