@extends('dashboard.layout')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Products</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item active">products</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">

            <!-- /.row -->
            <div class="row">
                
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Products Table</h3>

                            <div class="card-tools">


                                <div class="input-group-append">
                                    <a href="/add-product" class="btn btn-primary">
                                        Add product
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Price</th>
                                        <th>Description</th>

                                        {{-- <th>Proccess</th> --}}
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($products as $item)
                                        <tr>
                                            <td>
                                                <img class="img-fluid" src="{{ $item->product_photo_path }}">
                                            </td>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>{{ $item->description }}</td>

                                            <td>
                                                <a href="/edit-product/{{ $item->id }}"
                                                    class="btn btn-secondary">Edit</a>
                                                <a href="/delete-product/{{ $item->id }}" type="button"
                                                    class="btn btn-danger" onclick="return confirm('delete')">Delete</a>
                                            </td>
                                            {{-- <td>{{$item->comment}}</td> --}}
                                            {{-- <td><span class="tag tag-success">Approved</span></td> --}}
                                        </tr>
                                        
                                    @endforeach

                                </tbody>
                            </table>
                            
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>

            <!-- /.row -->
        </div><!-- /.container-fluid -->
        <div class="float-right"> {!! $products->links() !!}</div>

    </section>
    
@endsection
