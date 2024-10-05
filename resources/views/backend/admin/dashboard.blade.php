@extends('backend.admin.layout.app')
@section('content')
<div class="main-body bg-light">
    <div class="wrapper p-3">
        <div class="breadcrumb-links">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active">Dashboard</li>
            </ul>
        </div>
        <div class="icon-boxes">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <!--Icon Box Start-->
                    <div class="icon-box box2 bg-white">
                        <div class="icon-title mb-4">
                            <h4 class="text-secondary">Earning</h4>
                            <p class="text-success float-end">
                                <i class="fa-solid fa-location-arrow"></i> +16.24%
                            </p>
                        </div>
                        <div class="amount mb-3">
                            <h4 class="fs-3 fw-bold text-dark">$50,000</h4>
                        </div>
                        <div class="icon position-relative">
                            <a href="#">See More</a>
                            <i class="fas fa-dollar-sign text-secondary float-end position-absolute bottom-0 end-0"></i>
                        </div>
                    </div>
                    <!--Icon Box End-->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <!--Icon Box Start-->
                    <div class="icon-box box2 bg-white">
                        <div class="icon-title mb-4">
                            <h4 class="text-secondary">Total Stock</h4>
                            <p class="text-success float-end">
                                <i class="fa-solid fa-location-arrow"></i> +16.24%
                            </p>
                        </div>
                        <div class="amount mb-3">
                            <h4 class="fs-3 fw-bold text-dark">$50,000</h4>
                        </div>
                        <div class="icon position-relative">
                            <a href="#">See More</a>
                            <i class="fas fa-dollar-sign text-secondary float-end position-absolute bottom-0 end-0"></i>
                        </div>
                    </div>
                    <!--Icon Box End-->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <!--Icon Box Start-->
                    <div class="icon-box box2 bg-white">
                        <div class="icon-title mb-4">
                            <h4 class="text-secondary">Solded</h4>
                            <p class="text-success float-end">
                                <i class="fa-solid fa-location-arrow"></i> +16.24%
                            </p>
                        </div>
                        <div class="amount mb-3">
                            <h4 class="fs-3 fw-bold text-dark">$50,000</h4>
                        </div>
                        <div class="icon position-relative">
                            <a href="#">See More</a>
                            <i class="fas fa-dollar-sign text-secondary float-end position-absolute bottom-0 end-0"></i>
                        </div>
                    </div>
                    <!--Icon Box End-->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <!--Icon Box Start-->
                    <div class="icon-box box2 bg-white">
                        <div class="icon-title mb-4">
                            <h4 class="text-secondary">Total Due</h4>
                            <p class="text-success float-end">
                                <i class="fa-solid fa-location-arrow"></i> +16.24%
                            </p>
                        </div>
                        <div class="amount mb-3">
                            <h4 class="fs-3 fw-bold text-dark">$50,000</h4>
                        </div>
                        <div class="icon position-relative">
                            <a href="#">See More</a>
                            <i class="fas fa-dollar-sign text-secondary float-end position-absolute bottom-0 end-0"></i>
                        </div>
                    </div>
                    <!--Icon Box End-->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="card card-primary">
                    <div class="card-title">Our Statistics</div>
                    <div class="chart-container position-relative">
                        <canvas id="chart1"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card card-primary">
                    <div class="card-title">Latest Summery</div>
                    <canvas id="chart2"></canvas>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card card-primary">
                    <div class="card-title">Top Users</div>
                    <div class="card-content">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Image</th>
                                    <th>User Name</th>
                                    <th>Email Address</th>
                                    <th>Earning</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>01</th>
                                    <td><img class="width-40 round-img" src="images/users/1.jpg" alt="Image"></td>
                                    <td>Mojibur Rahman</td>
                                    <td>mojibur@domain.com</td>
                                    <td>$30,000</td>
                                    <td><span class="badge text-bg-success">Success</span></td>
                                </tr>
                                <tr>
                                    <th>02</th>
                                    <td><img class="width-40 round-img" src="images/users/2.jpg" alt="Image"></td>
                                    <td>Junayed Khan</td>
                                    <td>junayed@domain.com</td>
                                    <td>$70,000</td>
                                    <td><span class="badge text-bg-warning">Warning</span></td>
                                </tr>
                                <tr>
                                    <th>03</th>
                                    <td><img class="width-40 round-img" src="images/users/3.jpg" alt="Image"></td>
                                    <td>Md Dalwar</td>
                                    <td>dalwar@domain.com</td>
                                    <td>$80,000</td>
                                    <td><span class="badge text-bg-danger">Danger</span></td>
                                </tr>
                                <tr>
                                    <th>04</th>
                                    <td><img class="width-40 round-img" src="images/users/1.jpg" alt="Image"></td>
                                    <td>Arifur Rahman</td>
                                    <td>arifur@domain.com</td>
                                    <td>$20,000</td>
                                    <td><span class="badge text-bg-primary">Primary</span></td>
                                </tr>
                                <tr>
                                    <th>05</th>
                                    <td><img class="width-40 round-img" src="images/users/2.jpg" alt="Image"></td>
                                    <td>Rizuan Ahmed</td>
                                    <td>rizuan@domain.com</td>
                                    <td>$10,000</td>
                                    <td><span class="badge text-bg-secondary">Secondary</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
