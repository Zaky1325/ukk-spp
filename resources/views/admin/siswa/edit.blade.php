@extends('layouts.master')
    @section('content')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-5">
                    <h6>Edit Data Siswa</h6>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive pb-12">
                            <form action="{{ route('siswa.update', $siswa->nisn) }}" method="POST">
                                @csrf
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <form>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">NISN</label>
                                                <input class="form-control" type="number" value="{{ $siswa->nisn }}" name="nisn" id="example-text-input">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">NIS</label>
                                                <input class="form-control" type="number" value="{{ $siswa->nis }}" name="nis" id="example-text-input">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Nama</label>
                                                <input class="form-control" type="tel" value="{{ $siswa->nama }}" name="nama" id="example-text-input">
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
                                                <input class="form-control" type="tel" value="{{ $siswa->alamat }}" name="alamat" id="example-text-input">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Nomor Telfon</label>
                                                <input class="form-control" type="number" value="{{ $siswa->no_telp }}" name="no_telp" id="example-text-input">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">ID SPP</label>
                                                <select class="form-control" type="integer" name="id_spp" id="example-text-input">
                                                    @foreach ($siswa as $data)
                                                    <option value="{{$data->nominal}}">{{$data->nominal}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </form>
                                    </thead>
                                    <tbody>
                                        <button type="submit" class="btn btn-primary">Edit</button>
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