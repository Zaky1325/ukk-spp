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
                    <h1>Tunggakan</h1>

                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive pb-12">
                            <form method="post" action="{{ route('tunggakan.store')}}">
                                @csrf
                                <table class="table align-items-center mb-0">
                                    <thead>
                                    <form>
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Nama</label>
                                            <select class="form-control" type="string"  name="nama" id="example-text-input">
                                                @foreach ($user as $data)
                                                <option value="{{$data->name}}">{{$data->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Nama Kelas</label>
                                            <select class="form-control" type="string"  name="id_kelas" id="example-text-input">
                                                @foreach ($kelas as $data)
                                                <option value="{{$data->nama_kelas}}">{{$data->nama_kelas}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Bulan Dibayar</label>
                                            <select class="form-control" type="integer" name="id_spp" id="example-text-input">
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
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Nominal SPP</label>
                                            <select class="form-control" type="integer" name="id_spp" id="example-text-input">
                                                @foreach ($spp as $data)
                                                <option value="{{$data->nominal}}">{{$data->nominal}}</option>
                                                @endforeach
                                            </select>
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