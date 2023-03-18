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
                            <form method="post" action="{{ route('pembayaran.store')}}">
                                @csrf
                                <table class="table align-items-center mb-0">
                                    <thead>
                                    <form>
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Nama Petugas</label>
                                            <input class="form-control" readonly type="string" name="id_petugas" value="{{ Auth::user()->name }}" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">NISN</label>
                                            <select class="form-control" type="string"  name="nisn" value="{{$pembayaran->nisn}}" id="example-text-input">
                                                @foreach ($siswa as $data)
                                                <option value="{{$data->nisn}}">{{$data->nisn}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Tanggal Bayar</label>
                                            <input class="form-control" type="date" name="tgl_bayar" value="{{$pembayaran->tgl_bayar}}" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Bulan Dibayar</label>
                                            <input class="form-control" type="string" name="bulan_dibayar" value="{{$pembayaran->bulan_dibayar}}"  id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Tahun Dibayar</label>
                                            <input class="form-control" type="string" name="tahun_dibayar" value="{{$pembayaran->tahun_dibayar}}"  id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Nominal SPP</label>
                                            <select class="form-control" type="integer" name="id_spp" value="{{$pembayaran->id_spp}}" id="example-text-input">
                                                @foreach ($spp as $data)
                                                <option value="{{$data->id_spp}}">{{$data->nominal}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Jumlah Bayar</label>
                                            <input class="form-control" type="integer" name="jumlah_bayar" value="{{$pembayaran->jumlah_bayar}}"  id="example-text-input">
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