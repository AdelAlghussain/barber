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

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">

            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Worktimes Table</h3>

                            <div class="card-tools">


                                <div class="input-group-append">
                                    <a href="/edit-worktimes" class="btn btn-secondary">Edit Schedule</a>

                                </div>
                            </div>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Day</th>
                                        <th>Start Time</th>
                                        <th>Close Time</th>
                                        {{-- <th>Proccess</th> --}}
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($worktimes as $item)
                                        <tr>
                                            <td>{{ $item->day }}</td>
                                            <td>{{ $item->start_time }}</td>
                                            <td>{{ $item->close_time }}</td>

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
