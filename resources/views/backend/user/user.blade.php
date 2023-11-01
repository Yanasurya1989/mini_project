@extends('backend.layout.master')

@section('title', 'User')
    @section('content')
    <h1>Ini adalah halaman user</h1>
    <h3>User List : </h3>
    <button class="btn btn-primary">Add</button>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Role</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($user as $list)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$list->name}}</td>
                    <td>{{$list->role_id}}</td>
                    {{-- <td>{{$list->seles->name}}</td> --}}
                    <td>{{$list->created_at}}</td>
                    <td>{{$list->updated_at}}</td>
                    <td>
                        <a href="#" class="btn btn-warning">Update</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
        
@endsection
        