@extends('backend.admin.layout.app')
@section('content')

    <!--Main Body Start-->
    <div class="main-body bg-light">
        <div class="wrapper p-3">
            <div class="breadcrumb-links">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i></a></li>
                    <li class="active ">&nbsp; Create Social Media</li>
                </ul>
            </div>
            <div class="row">
                <div class="text-end"><a href="{{ route('admin.socials.index') }}" class="btn btn-secondary"><i class="fas fa-arrow"></i> Back</a></div>
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <div class="card-title">Create Social Media</div>
                        <div class="card-content">
                            <div class="class-header">
                                <h2>Create Social Media</h2>
                            </div>
                            <form action="">
                                <div class="form-group col-lg-8">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Name">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Main Body End-->
@endsection
