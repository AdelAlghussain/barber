@extends('dashboard.layout')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Comments</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item active">comments</li>
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
                            <h3 class="card-title">Comments Table</h3>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-wrap">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Date</th>
                                        <th>Comment</th>
                                        {{-- <th>Proccess</th> --}}
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($comments as $item)
                                        
                                
                                    <tr>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->created_at->format('Y:m:d')}}</td>
                                        <td>{{$item->comment}}</td>
                                        <td>
                                            <a href="/delete-comment/{{ $item->id }}" type="button"
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
    {{-- {!! $comments->links() !!} --}}

@endsection
