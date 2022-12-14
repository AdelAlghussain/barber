@extends('dashboard.layout')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item active">dashboard</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small Box (Stat card) -->
            <div class="row">
                <div class="col-lg-4 col-6">
                    <!-- small card -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $employees }}</h3>

                            <p>Employees</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                    <!-- small card -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $gallaries }}</h3>

                            <p>Gallaries</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-photo-video"></i>
                        </div>

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                    <!-- small card -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ $results }}</h3>

                            <p>Results</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-photo-video"></i>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 col-6">
                    <!-- small card -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ $products }}</h3>

                            <p>Products</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>

                    </div>
                </div>


                <div class="col-lg-4 col-6">
                    <!-- small card -->
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3>{{ $offers }}</h3>

                            <p>Offers</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-gift"></i>
                        </div>

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                    <!-- small card -->
                    <div class="small-box bg-secondary">
                        <div class="inner">
                            <h3>{{ $comments }}</h3>

                            <p>Comments</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-comment-dots"></i>
                        </div>

                    </div>
                </div>




            </div>



        </div>

       

    </section>
    <!-- /.content -->
@endsection
