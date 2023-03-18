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
                    <h1>Data User</h1>

                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive pb-12">
                            <form method="post" action="{{ route('user.store')}}">
                                @csrf
                                <table class="table align-items-center mb-0">
                                    <thead>
                                    <form>
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Name</label>
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Email</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Password</label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Role</label>
                                            <select class="form-control" type="integer" name="role" id="example-text-input">
                                                <option value="">Role</option>
                                                <option value="admin">Admin</option>
                                                <option value="petuags">Petugas</option>
                                                <option value="siswa">Siswa</option>
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