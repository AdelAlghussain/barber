@extends('dashboard.layout')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Employees</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item active">employees</li>
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
                            <h3 class="card-title">Employees Table</h3>

                            <div class="card-tools">


                                <div class="input-group-append">
                                    <a href="/add-employee" class="btn btn-primary">
                                        Add Employee
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
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Years of Experience</th>
                                        <th>Twitter Account</th>
                                        <th>Facebook Account</th>
                                        <th>Description</th>
                                        {{-- <th>Proccess</th> --}}
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($employees as $item)
                                        <tr>
                                            <td>
                                                <img class="img-fluid" src="{{ $item->profile_photo_path }}">
                                            </td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->age }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->phone }}</td>
                                            <td>{{ $item->location }}</td>
                                            <td>{{ $item->experience }}</td>
                                            <td>{{ $item->twitter }}</td>
                                            <td>{{ $item->facbook}}</td>
                                            <td>{{ $item->description }}</td>

                                            <td>
                                                <a href="/edit-employee/{{ $item->id }}"
                                                    class="btn btn-secondary">Edit</a>
                                                <a href="/delete-employee/{{ $item->id }}" type="button"
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
        <div class="float-right"> {!! $employees->links() !!}</div>
    </section>
    
@endsection
