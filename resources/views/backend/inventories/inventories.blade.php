@extends('backend.layout.master')

@section('title', 'dashboard')
    @section('content')
        {{-- drop the main content in master here! --}}
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
            </div>
            <a href="/inv/create" class="btn btn-primary mb-2">Add</a><br>

            <!-- Content Row -->
            <div class="row">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Code</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Create at</th>
                        <th scope="col">updated at</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($inv as $list)
                        <tr>
                          <th scope="row">1</th>
                          <td>{{$list->code}}</td>
                          <td>{{$list->name}}</td>
                          <td>{{$list->price}}</td>
                          <td>{{$list->stock}}</td>
                          <td>{{$list->created_at}}</td>
                          <td>{{$list->updated_at}}</td>
                          <td>
                              <a href="#" class="btn btn-primary">detil</a>
                              <a href="/inv/edit/{{$list->id}}" class="btn btn-warning">update</a>
                              <a href="/inv/delete/{{$list->id}}" class="btn btn-danger" onclick="return confirm('Are you sure?')">delete</a>
                          </td>
                        </tr>
                      @endforeach
                      
                    </tbody>
                  </table>
            </div>

        </div>
        <!-- /.container-fluid -->
        {{-- end of the main content in master --}}
@endsection
        