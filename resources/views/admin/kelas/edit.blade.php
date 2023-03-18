@extends('layouts.master')
    @section('content')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Edit Data Kelas</h6>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <form action="{{ route('kelas.update', $kelas->id_kelas) }}" method="POST">
                                @csrf
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <form>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Nama Kelas</label>
                                                <input class="form-control" type="tel" value="{{ $kelas->tahun }}" name="nama_kelas" id="example-text-input">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Kompetensi Keahlian</label>
                                                <input class="form-control" type="tel" value="{{ $kelas->nominal }}" name="kompetensi_keahlian" id="example-text-input">
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