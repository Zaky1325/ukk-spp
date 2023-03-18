@extends('layouts.master')
@section('content')
 

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-5">
                    <h1>Data User</h1>
                    <a href="{{ route('user.create') }}" class="btn btn-sm text-white bg-success"><i class='fa fa-edit'> Create</i></a>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive pb-12">
                            @csrf
                                <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Role</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                @foreach($user as $item)
                        
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->role}}</td>
                                        <td>
                                            <a href="{{ route('user.edit',  $item->id) }}" class="btn btn-sm text-white bg-warning" data-id="{{ $item->id }}"><i class='fa fa-edit'> Edit</i></a>
                                            <a href="{{ route('user.destroy', $item->id) }}" data-toggle="modal" data-target="#exampleModal{{$item->id}}" class="btn btn-sm text-white bg-danger"><i class='fa fa-trash'> Delete</i></i></a>
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