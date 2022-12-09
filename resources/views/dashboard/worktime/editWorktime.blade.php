@extends('dashboard.layout')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Worktimes</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item active">worktimes</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">Edit Worktimes</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="/edit-worktimes" accept-charset="UTF-8" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    @foreach ($worktimes as $worktime)
                        

                    <h5>{{$worktime->day}}:</h5>
                    <div class="form-group row">


                        <label for="{{$worktime->day}}">Start Time</label>&nbsp;
                        <input type="time" name="{{$worktime->day.'_start_time'}}"   value="{{$worktime->start_time}}">

                        &nbsp;<label for="{{$worktime->day}}">Close Time</label>&nbsp;&nbsp;&nbsp;
                        <input type="time" name="{{$worktime->day.'_close_time'}}" class="row" 
                            value="{{$worktime->close_time}}">
                    </div>

                  

                    @endforeach
        
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary float-right col-3">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
