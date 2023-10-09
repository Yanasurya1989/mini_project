@extends('backend.layout.master')

@section('title', 'dashboard')
    @section('content')
        {{-- drop the main content in master here! --}}
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h2 class="h3 mb-0 text-gray-800">Selamat datang {{Auth::user()->name}}</h2><br>
                <a href="{{ url('inv/export/excel') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Export Excel</a>
            </div>
            <h4 class="h5 mb-0 text-gray-800">anda login sebagai <a href="/logout">{{Auth::user()->role->name}}</a></h4>
            <a href="/inv/create" class="btn btn-primary mb-2">Add</a><br>

            <!-- Content Row -->
            <div class="row">
              {{-- <div class="mb-3"><a class="btn btn-primary" href="{{ url('inv/export/excel') }}">Export</a></div> --}}
                @include('backend.inventories.table',$inv)
                
            </div>

        </div>
        <!-- /.container-fluid -->
        {{-- end of the main content in master --}}
@endsection
        