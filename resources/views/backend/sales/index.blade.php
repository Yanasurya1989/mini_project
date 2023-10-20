@extends('backend.layout.master')

@section('title', 'sales')
    @section('content')
        <div class="container-fluid">
            @include('backend.sales.table')
        </div>
@endsection
        