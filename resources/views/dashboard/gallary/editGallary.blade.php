@extends('dashboard.layout')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Gallaries</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                    <li class="breadcrumb-item active">gallaries</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">Change Photo</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST"  action="/edit-gallary/{{$gallary->id}}" accept-charset="UTF-8" enctype="multipart/form-data">
                @csrf
                <div class="card-body">



                    <div class="form-group">
                        <label for="image">New Photo</label>
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
