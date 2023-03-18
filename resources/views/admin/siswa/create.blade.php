@extends('layouts.master')
    @section('content')

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.js"></script>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h1>Data Siswa</h1>

                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <form method="post" action="{{ route('siswa.store')}}">
                                @csrf
                                <table class="table align-items-center mb-0">
                                    <thead>
                                    <form>
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">NISN</label>
                                            <input class="form-control" type="number" name="nisn" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">NIS</label>
                                            <input class="form-control" type="number" name="nis" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Nama</label>
                                            <input class="form-control" type="text" name="nama" id="example-text-input">
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
                                            <label for="example-text-input" class="form-control-label">Alamat</label>
                                            <input class="form-control" type="text" name="alamat" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Nomor Telfon</label>
                                            <input class="form-control" type="number" name="no_telp" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">ID SPP</label>
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