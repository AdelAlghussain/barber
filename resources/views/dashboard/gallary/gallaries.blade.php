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

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">

            <!-- /.row -->
            <div class="row">
                <div class="col-9">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Gallary Table</h3>
                            <div class="card-tools">


                                <div class="input-group-append">
                                    <a href="/add-gallary" class="btn btn-primary">Add Photo</a>

                                </div>
                            </div>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-5">
                            <table class="table  text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Photos</th>

                                        {{-- <th>Proccess</th> --}}
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($gallaries as $item)
                                        
                                
                                    <tr>
                                        <td> <img class="img-fluid" src="{{ $item->gallary_photo_path }}"></td>

                                        <td>
                                            <a href="/edit-gallary/{{ $item->id }}" class="btn btn-secondary">Edit</a>
                                            <a href="/delete-gallary/{{ $item->id }}" type="button"
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

    </section>
@endsection
