@extends('layouts.master')
    @section('content')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Edit Data SPP</h6>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <form action="{{ route('user.update', $user->id) }}" method="POST">
                                @csrf
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <form>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Nama</label>
                                                <input class="form-control" type="text" value="{{ $user->name }}" name="name" id="example-text-input">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Email</label>
                                                <input class="form-control" type="text" value="{{ $user->email }}" name="email" id="example-text-input">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Password</label>
                                                <input class="form-control" type="text" value="{{ $user->password }}" name="password" id="example-text-input">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Role</label>
                                                <select class="form-control" type="text" name="role" id="example-text-input">
                                                    <option value="">Pilih role</option>
                                                    <option value="petugas">Petugas</option>
                                                    <option value="admin">Admin</option>
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