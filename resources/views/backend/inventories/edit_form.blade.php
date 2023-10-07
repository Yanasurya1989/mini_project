@include('backend.layout.header')
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('backend.layout.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('backend.layout.navbar')
    
                <div class="container p-5">
                    <h1>Tambah Data Product</h1>
                    <a href="/" class="btn btn-primary mb-5">Kembali ke list</a>
                    <form action="/inv/update/{{ $inventories_model->id }}" method="post" enctype="multipart/form-data">
                        @if(session('errors'))
                            <div class="alert alert-danger" role="alert">
                                {{ (session('errors'))->first() }}
                            </div>
                        @endif
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">id</label>
                            <input type="text" class="form-control" id="id" name="id" value="{{$inventories_model->id}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">code</label>
                            <input type="text" class="form-control" id="code" name="code" value="{{$inventories_model->code}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$inventories_model->name}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">price</label>
                            <input type="text" class="form-control" id="price" name="price" value="{{$inventories_model->price}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">stock</label>
                            <input type="text" class="form-control" id="stock" name="stock" value="{{$inventories_model->stock}}">
                        </div>                        
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
    
            </div>
            <!-- End of Main Content -->
@include('backend.layout.footer')