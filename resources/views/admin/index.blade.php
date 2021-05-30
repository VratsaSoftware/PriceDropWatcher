@extends('layouts.admin')
@section('content')

    <!-- ============================================================== -->
    <!-- Sales chart -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-md-flex align-items-center">
                        <div>
                            <h4 class="card-title">Site Analysis</h4>
                            <h5 class="card-subtitle">Overview of Latest Month</h5>
                        </div>
                    </div>
                    <div class="row">
                        <!-- column -->
                        <div class="col-lg-9">
                            <div class="flot-chart">
                                <div class="flot-chart-content" id="flot-line-chart"></div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="row">
                                <div class="col-6">
                                    <div class="bg-dark p-10 text-white text-center">
                                        <i class="fa fa-user m-b-5 font-16"></i>
                                        <h5 class="m-b-0 m-t-5">{{$userCount}}</h5>
                                        <small class="font-light">Total Users</small>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="bg-dark p-10 text-white text-center">
                                        <i class="fa fa-plus m-b-5 font-16"></i>
                                        <h5 class="m-b-0 m-t-5">120</h5>
                                        <small class="font-light">New Users</small>
                                    </div>
                                </div>
                                <div class="col-6 m-t-15">
                                    <div class="bg-dark p-10 text-white text-center">
                                        <i class="fa fa-cart-plus m-b-5 font-16"></i>
                                        <h5 class="m-b-0 m-t-5">656</h5>
                                        <small class="font-light">Total Shop</small>
                                    </div>
                                </div>
                                <div class="col-6 m-t-15">
                                    <div class="bg-dark p-10 text-white text-center">
                                        <i class="fa fa-tag m-b-5 font-16"></i>
                                        <h5 class="m-b-0 m-t-5">9540</h5>
                                        <small class="font-light">Total Orders</small>
                                    </div>
                                </div>
                                <div class="col-6 m-t-15">
                                    <div class="bg-dark p-10 text-white text-center">
                                        <i class="fa fa-table m-b-5 font-16"></i>
                                        <h5 class="m-b-0 m-t-5">100</h5>
                                        <small class="font-light">Pending Orders</small>
                                    </div>
                                </div>
                                <div class="col-6 m-t-15">
                                    <div class="bg-dark p-10 text-white text-center">
                                        <i class="fa fa-globe m-b-5 font-16"></i>
                                        <h5 class="m-b-0 m-t-5">8540</h5>
                                        <small class="font-light">Online Orders</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- column -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Sales chart -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Recent comment and chats -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- column -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Latest Links</h4>
                </div>
                <div class="comment-widgets scrollable">
                    <!-- Comment Row -->
                    <div class="d-flex flex-row comment-row m-t-0">
                        <div class="p-2"><img src="../../assets/images/users/1.jpg" alt="user" width="50"
                                              class="rounded-circle"></div>
                        <div class="comment-text w-100">
                            <h6 class="font-medium">James Anderson</h6>
                            <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                            <div class="comment-footer">
                                <span class="text-muted float-right">April 14, 2016</span>
                                <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                                <button type="button" class="btn btn-danger btn-sm">Delete</button>
                            </div>
                        </div>
                    </div>
                    <!-- Comment Row -->
                    <div class="d-flex flex-row comment-row">
                        <div class="p-2"><img src="../../assets/images/users/4.jpg" alt="user" width="50"
                                              class="rounded-circle"></div>
                        <div class="comment-text active w-100">
                            <h6 class="font-medium">Michael Jorden</h6>
                            <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                            <div class="comment-footer">
                                <span class="text-muted float-right">May 10, 2016</span>
                                <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                                <button type="button" class="btn btn-danger btn-sm">Delete</button>
                            </div>
                        </div>
                    </div>
                    <!-- Comment Row -->
                    <div class="d-flex flex-row comment-row">
                        <div class="p-2"><img src="../../assets/images/users/5.jpg" alt="user" width="50"
                                              class="rounded-circle"></div>
                        <div class="comment-text w-100">
                            <h6 class="font-medium">Johnathan Doeting</h6>
                            <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                            <div class="comment-footer">
                                <span class="text-muted float-right">August 1, 2016</span>
                                <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                                <button type="button" class="btn btn-danger btn-sm">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    ZL

    <!-- ============================================================== -->
    <!-- Recent comment and chats -->
    <!-- ============================================================== -->

@endsection

