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

    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">Add Product</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST"  action="/add-product" accept-charset="UTF-8" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" required name="title" id="title" placeholder="title"
                            >
                    </div>

                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" step="0.01" class="form-control" required name="price" id="price" placeholder="price"
                            >
                    </div>



                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea  required class="form-control" name="description" id="description"
                            placeholder="Description" ></textarea>
                    </div>


                    <div class="form-group">
                        <label for="image">Product Image</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input class="form-control" required type="file" accept="image/*" name="image"
                                    id="image">
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">
                                    Please image is required.
                            </div>

                        </div>
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary float-right col-3">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
