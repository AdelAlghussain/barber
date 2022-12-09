

@extends('dashboard.layout')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Admin Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item active">profile</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="{{$profile->profile_photo_path}}"
                                    alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center">{{ $profile->name }}</h3>


                            <!-- /.card-header -->
                            <div class="card-body">
                                <strong><i class="far fa-id-card mr-1"></i> Age</strong>

                                <p class="text-muted">
                                    {{ $profile->age }}
                                </p>

                                <hr>

                                <strong><i class="fas fa-pencil-alt mr-1"></i> Experience</strong>

                                <p class="text-muted">{{ $profile->experience }}</p>


                                <hr>


                                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                                <p class="text-muted">{{ $profile->location }}</p>

                                <hr>



                                <strong><i class="fas fa-envelope mr-1"> Email</i></strong>

                                <p class="text-muted">
                                    {{ $profile->email }}
                                </p>

                                <hr>

                                <strong><i class="fas fa-book mr-1"> Phone</i></strong>

                                <p class="text-muted">
                                    {{ $profile->phone }}
                                </p>

                                <hr>

                                <strong><i class="fab fa-facebook-square mr-1"> Facebook</i></strong>

                                <p class="text-muted">
                                    {{ $profile->facbook }}
                                </p>

                                <hr>

                                <strong><i class="fab fa-twitter-square mr-1"> Twitter</i></strong>

                                <p class="text-muted">
                                    {{ $profile->twitter }}
                                </p>

                                <hr>

                                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                                <p class="text-muted">{{ $profile->description }}</p>
                            </div>

                            <a href="/edit-profile" class="btn btn-primary col-3 float-right"><b>Edit</b></a>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- /.card -->
                </div>

                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection
