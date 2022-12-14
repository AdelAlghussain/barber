@extends('dashboard.layout')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Settings</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">

                            <a href="/">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">settings</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">Edit</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="/reset-password" accept-charset="UTF-8" enctype="multipart/form-data">
                @csrf
                @if (session()->has('password_message'))
                    <div class="alert alert-success">
                        {{ session()->get('password_message') }}
                    </div>
                @endif

                @if ($errors->has('old_password'))
                    <span class="text-danger">{{ $errors->first('old_password') }}</span>
                @endif

                <div class="card-body">
                    <div class="form-group">
                        <label for="old_password">Old Password</label>
                        <input type="text" class="form-control" required name="old_password" id="old_password"
                            placeholder="old password">
                    </div>

                    @if ($errors->has('new_password'))
                        <span class="text-danger">{{ $errors->first('new_password') }}</span>
                    @endif

                    <div class="form-group">
                        <label for="new_password">New Password</label>
                        <input type="text" class="form-control" required name="new_password" id="new_password"
                            placeholder="new password">
                    </div>

                    @if ($errors->has('confirm_password'))
                        <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
                    @endif

                    <div class="form-group">
                        <label for="confirm_password">Confirm Password</label>
                        <input type="text" required class="form-control" name="confirm_password" id="confirm_password"
                            placeholder="confirm password">
                    </div>


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary float-right col-3">Reset password</button>
                </div>
            </form>

            <form method="POST" action="/change-color" accept-charset="UTF-8" enctype="multipart/form-data">
                @csrf
                @if (session()->has('color_message'))
                    <div class="alert alert-success">
                        {{ session()->get('color_message') }}
                    </div>
                @endif
                <div class="card-body">
                    <div class="form-group">
                        <label for="color">Color</label>
                        <input type="color" class="form-control" required name="color" id="color" value="{{$color}}">
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary float-right col-3">Change</button>
                </div>
            </form>
        </div>
    </div>
@endsection
