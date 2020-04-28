@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Office Details</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('office.index') }}">Offices</a></li>
                        <li class="breadcrumb-item active">Office Detail</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card card-dark">
            <div class="card-header">
                <h3 class="card-title">Projects Detail</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                        <div class="row">
                            <div class="col-4">
                                <div class="info-box">
                                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-copyright"></i></span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Suppliers</span>
                                        <span class="info-box-number">30</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <div class="info-box mb-3">
                                    <span class="info-box-icon bg-danger elevation-1"><i
                                                class="fas fa-store"></i></span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Brands</span>
                                        <span class="info-box-number">500</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->

                            <!-- fix for small devices only -->
                            <div class="clearfix hidden-md-up"></div>

                            <div class="col-4">
                                <div class="info-box mb-3">
                                    <span class="info-box-icon bg-success elevation-1"><i
                                                class="fas fa-box-open"></i></span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Products</span>
                                        <span class="info-box-number">1,300</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-dark">
                                    <div class="card-header">
                                        <h5 class="card-title">Monthly Recap Report</h5>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="maximize"><i
                                                        class="fas fa-expand"></i></button>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <p class="text-center">
                                                    <strong>Activity: 1 Jan, 2020 - 30 Dec, 2020</strong>
                                                </p>

                                                <div class="chart">
                                                    <!-- Sales Chart Canvas -->
                                                    <canvas id="salesChart" height="180"
                                                            style="height: 180px;"></canvas>
                                                </div>
                                                <!-- /.chart-responsive -->
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-md-4">
                                                <p class="text-center">
                                                    <strong>Goal Completion</strong>
                                                </p>

                                                <div class="progress-group">
                                                    Add Products
                                                    <span class="float-right"><b>180k</b>/210.6k</span>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-primary" style="width: 80%"></div>
                                                    </div>
                                                </div>
                                                <!-- /.progress-group -->

                                                <div class="progress-group">
                                                    Suppliers
                                                    <span class="float-right"><b>200</b>/1000</span>
                                                    <div class="progress progress-sm bg-dark">
                                                        <div class="progress-bar"
                                                             style="width: 20%;background-color: rgba(210, 214, 222, 1)"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- ./card-body -->
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="description-block border-right">
                                                    <span class="description-percentage text-primary">
                                                        <i class="fas fa-caret-up"></i> 12%</span>
                                                    <h5 class="description-header">300</h5>
                                                    <span class="description-text">Add Products</span>
                                                </div>
                                                <!-- /.description-block -->
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-4">
                                                <div class="description-block border-right">
                                                    <span class="description-percentage text-warning"><i
                                                                class="fas fa-caret-left"></i> 0%</span>
                                                    <h5 class="description-header">7</h5>
                                                    <span class="description-text">Add Supplier</span>
                                                </div>
                                                <!-- /.description-block -->
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-4">
                                                <div class="description-block border-right">
                                                    <span class="description-percentage text-success"><i
                                                                class="fas fa-caret-up"></i> 20%</span>
                                                    <h5 class="description-header">5</h5>
                                                    <span class="description-text">Add Brands</span>
                                                </div>
                                                <!-- /.description-block -->
                                            </div>
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.card-footer -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                        <div class="row">
                            <!-- TO DO List -->
                            <div class="card card-dark col-12">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="ion ion-clipboard mr-1"></i>
                                        To Do List
                                    </h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <ul class="todo-list" data-widget="todo-list">
                                        <li>
                                            <!-- drag handle -->
                                            <span class="handle">
                                                <i class="fas fa-ellipsis-v"></i>
                                                <i class="fas fa-ellipsis-v"></i>
                                            </span>
                                            <!-- checkbox -->
                                            <div class="icheck-primary d-inline ml-2">
                                                <input type="checkbox" value="" name="todo1" id="todoCheck1">
                                                <label for="todoCheck1"></label>
                                            </div>
                                            <!-- todo text -->
                                            <span class="text">Design a nice theme</span>
                                            <!-- Emphasis label -->
                                            <small class="badge badge-danger"><i class="far fa-clock"></i> 2
                                                mins</small>
                                            <!-- General tools such as edit or delete-->
                                            <div class="tools">
                                                <i class="fas fa-edit"></i>
                                                <i class="fas fa-trash-o"></i>
                                            </div>
                                        </li>
                                        <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                                            <div class="icheck-primary d-inline ml-2">
                                                <input type="checkbox" value="" name="todo2" id="todoCheck2" checked>
                                                <label for="todoCheck2"></label>
                                            </div>
                                            <span class="text">Make the theme responsive</span>
                                            <small class="badge badge-info"><i class="far fa-clock"></i> 4 hours</small>
                                            <div class="tools">
                                                <i class="fas fa-edit"></i>
                                                <i class="fas fa-trash-o"></i>
                                            </div>
                                        </li>
                                        <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                                            <div class="icheck-primary d-inline ml-2">
                                                <input type="checkbox" value="" name="todo3" id="todoCheck3">
                                                <label for="todoCheck3"></label>
                                            </div>
                                            <span class="text">Let theme shine like a star</span>
                                            <small class="badge badge-warning"><i class="far fa-clock"></i> 1
                                                day</small>
                                            <div class="tools">
                                                <i class="fas fa-edit"></i>
                                                <i class="fas fa-trash-o"></i>
                                            </div>
                                        </li>
                                        <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                                            <div class="icheck-primary d-inline ml-2">
                                                <input type="checkbox" value="" name="todo4" id="todoCheck4">
                                                <label for="todoCheck4"></label>
                                            </div>
                                            <span class="text">Let theme shine like a star</span>
                                            <small class="badge badge-success"><i class="far fa-clock"></i> 3
                                                days</small>
                                            <div class="tools">
                                                <i class="fas fa-edit"></i>
                                                <i class="fas fa-trash-o"></i>
                                            </div>
                                        </li>
                                        <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                                            <div class="icheck-primary d-inline ml-2">
                                                <input type="checkbox" value="" name="todo5" id="todoCheck5">
                                                <label for="todoCheck5"></label>
                                            </div>
                                            <span class="text">Check your messages and notifications</span>
                                            <small class="badge badge-primary"><i class="far fa-clock"></i> 1
                                                week</small>
                                            <div class="tools">
                                                <i class="fas fa-edit"></i>
                                                <i class="fas fa-trash-o"></i>
                                            </div>
                                        </li>
                                        <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                                            <div class="icheck-primary d-inline ml-2">
                                                <input type="checkbox" value="" name="todo6" id="todoCheck6">
                                                <label for="todoCheck6"></label>
                                            </div>
                                            <span class="text">Let theme shine like a star</span>
                                            <small class="badge badge-secondary"><i class="far fa-clock"></i> 1
                                                month</small>
                                            <div class="tools">
                                                <i class="fas fa-edit"></i>
                                                <i class="fas fa-trash-o"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer clearfix">
                                    <button type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i>
                                        Add item
                                    </button>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                        <!-- info Office -->
                        <div class="col-12 text-center">
                            <img width="150px" src="{{ asset('storage/' . $office->logo) }}" alt="Logo">
                        </div>
                        <h3 class="text-primary">
                            <i class="fas fa-home"></i> {{ $office->name }}</h3>
                        <p class="text-muted">
                            {{ $office->full_address }}<br>
                            <span class="text-muted">{{ $office->country->name }}</span>
                        </p>
                        <br>
                        <!-- CEO and Manager -->
                        <div class="text-muted">
                            <p class="text-sm">Office CEO
                                <b class="d-block">Deveint Inc</b>
                            </p>
                            <p class="text-sm">Office Manager
                                <b class="d-block">Tony Chicken</b>
                            </p>
                        </div>
                        <!-- PHONE -->
                        <h5 class="mt-5 text-muted">Phone :</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="" class="btn-link text-secondary">
                                    <i class="fa fa-phone"></i>
                                    {{ $office->phone }}</a>
                            </li>
                        </ul>
                        <!-- LIST users -->
                        <div class="card card-dark col-12 mt-5">
                            <div class="card-header">
                                <h3 class="card-title">Team</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="user-block col-12 mb-2">
                                    <div class="float-left">
                                        <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg"
                                             alt="user image">
                                        <span class="username">
                                    <a href="#">Jonathan Burke Jr.</a>
                                </span>
                                        <span class="description">Shared publicly - 7:45 PM today</span>
                                    </div>
                                    <div class="float-right">
                                        <i class="fa fa-dot-circle text-success"></i>
                                    </div>
                                </div>
                                <div class="user-block col-12 mb-2">
                                    <div class="float-left">
                                        <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg"
                                             alt="user image">
                                        <span class="username">
                                    <a href="#">Jonathan Burke Jr.</a>
                                </span>
                                        <span class="description">Shared publicly - 7:45 PM today</span>
                                    </div>
                                    <div class="float-right">
                                        <i class="fa fa-dot-circle text-warning"></i>
                                    </div>
                                </div>
                                <div class="user-block col-12 mb-2">
                                    <div class="float-left">
                                        <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg"
                                             alt="user image">
                                        <span class="username">
                                    <a href="#">Jonathan Burke Jr.</a>
                                </span>
                                        <span class="description">Shared publicly - 7:45 PM today</span>
                                    </div>
                                    <div class="float-right">
                                        <i class="fa fa-dot-circle text-danger"></i>
                                    </div>
                                </div>
                                <div class="user-block col-12 mb-2">
                                    <div class="float-left">
                                        <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg"
                                             alt="user image">
                                        <span class="username">
                                    <a href="#">Jonathan Burke Jr.</a>
                                </span>
                                        <span class="description">Shared publicly - 7:45 PM today</span>
                                    </div>
                                    <div class="float-right">
                                        <i class="fa fa-dot-circle text-success"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- /. card-body -->
                            <div class="card-footer text-center">
                                <a href="javascript:void(0)" class="uppercase">View All Team</a>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- PRODUCT LIST -->
                        <div class="card card-dark col-12 mt-5">
                            <div class="card-header">
                                <h3 class="card-title">Recently Added Products</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <ul class="products-list product-list-in-card pl-2 pr-2">
                                    <li class="item">
                                        <div class="product-img">
                                            <img src="{{ asset('dist/img/default-150x150.png') }}" alt="Product Image"
                                                 class="img-size-50">
                                        </div>
                                        <div class="product-info">
                                            <a href="javascript:void(0)" class="product-title">Samsung TV
                                                <span class="badge badge-warning float-right">$1800</span></a>
                                            <span class="product-description">
                        Samsung 32" 1080p 60Hz LED Smart HDTV.
                      </span>
                                        </div>
                                    </li>
                                    <!-- /.item -->
                                    <li class="item">
                                        <div class="product-img">
                                            <img src="{{ asset('dist/img/default-150x150.png') }}" alt="Product Image"
                                                 class="img-size-50">
                                        </div>
                                        <div class="product-info">
                                            <a href="javascript:void(0)" class="product-title">Bicycle
                                                <span class="badge badge-info float-right">$700</span></a>
                                            <span class="product-description">
                        26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                      </span>
                                        </div>
                                    </li>
                                    <!-- /.item -->
                                    <li class="item">
                                        <div class="product-img">
                                            <img src="{{ asset('dist/img/default-150x150.png') }}" alt="Product Image"
                                                 class="img-size-50">
                                        </div>
                                        <div class="product-info">
                                            <a href="javascript:void(0)" class="product-title">
                                                Xbox One <span class="badge badge-danger float-right">
                        $350
                      </span>
                                            </a>
                                            <span class="product-description">
                        Xbox One Console Bundle with Halo Master Chief Collection.
                      </span>
                                        </div>
                                    </li>
                                    <!-- /.item -->
                                    <li class="item">
                                        <div class="product-img">
                                            <img src="{{ asset('dist/img/default-150x150.png') }}" alt="Product Image"
                                                 class="img-size-50">
                                        </div>
                                        <div class="product-info">
                                            <a href="javascript:void(0)" class="product-title">PlayStation 4
                                                <span class="badge badge-success float-right">$399</span></a>
                                            <span class="product-description">
                        PlayStation 4 500GB Console (PS4)
                      </span>
                                        </div>
                                    </li>
                                    <!-- /.item -->
                                </ul>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer text-center">
                                <a href="javascript:void(0)" class="uppercase">View All Products</a>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
@stop
@push('stylesheet')
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
@endpush
@push('script')
    <!-- ChartJS -->
    <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>

    <!-- PAGE SCRIPTS -->
    <script src="{{ asset('app/office.js') }}"></script>
@endpush