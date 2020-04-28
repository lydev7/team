@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>New Office</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('office.index') }}">Offices</a></li>
                        <li class="breadcrumb-item active">New Office</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title">Add New Office</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="maximize">
                            <i class="fas fa-expand"></i>
                        </button>
                    </div>
                </div>
                <form action="{{ route('office.store') }}" method="POST"
                      enctype="multipart/form-data">
                @csrf
                <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="name">Name :</label>
                                    <input id="name" name="name" class="form-control" placeholder="Name :"
                                           value="{{ old('name') }}" required/>
                                </div>
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="address1">Address Ling 1 :</label>
                                    <input id="address1" name="address1" class="form-control"
                                           placeholder="Address Ling 1 :"
                                           value="{{ old('address1') }}" required/>
                                </div>
                                <!-- /.form-group -->
                                @error('address1')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <!-- /.col -->
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="address2">Address Ling 2 :</label>
                                    <input id="address2" name="address2" class="form-control"
                                           placeholder="Address Ling 2 :" value="{{ old('address2') }}"/>
                                </div>
                                <!-- /.form-group -->
                                @error('address2')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <!-- /.col -->
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="country">Choose Country :</label>
                                    <select id="country" name="country" class="form-control select2 select2-purple"
                                            data-dropdown-css-class="select2-purple" style="width: 100%;" required>
                                        <option disabled selected>Choose One</option>
                                        @foreach($countries as $country)
                                            <option value="{{ $country->id }}">{{ ucwords($country->name) }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('country')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="customFile">Choose Logo :</label>
                                    <div class="custom-file">
                                        <input type="file" name="logo_" class="custom-file-input"
                                               id="customFile" required>
                                        <label class="custom-file-label" for="customFile">Choose Logo</label>
                                    </div>
                                </div>
                                @error('logo_')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <!-- /.col -->
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="phone">Phone :</label>
                                    <input id="phone" name="phone" class="form-control" placeholder="Phone :"
                                           value="{{ old('phone') }}" required/>
                                </div>
                                <!-- /.form-group -->
                                @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-12 text-right">
                                <button type="submit" class="btn btn-primary">Add Office</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </section>
@stop
@push('stylesheet')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
@endpush
@push('script')
    <!-- Select2 -->
    <script type="text/javascript" src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
    <!-- bs-custom-file-input -->
    <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script type="text/javascript">
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2();

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            });
            // costum File
            bsCustomFileInput.init();
        })
    </script>
@endpush
