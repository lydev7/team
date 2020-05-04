@extends('layouts.app')
@section('content')
    <div id="content-list-users">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Members</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Members</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="card card-solid">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <div class="row">
                                <div class="col-3">
                                    <select name="office" title="Offices"
                                            class="form-control"
                                            id="office">
                                        <option selected disabled>Office</option>
                                        @foreach($offices as $office)
                                            <option value="{{ $office->id }}">{{ $office->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-3">
                                    <select name="position" title="Position"
                                            class="form-control"
                                            id="position">
                                        <option selected disabled>Position</option>
                                        @foreach($positions as $position)
                                            <option value="{{ $position->id }}">{{ $position->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-3">
                                    <select name="country" title="Country"
                                            class="form-control"
                                            id="country">
                                        <option selected disabled>Country</option>
                                        @foreach($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{ route('user.create') }}" class="btn btn-primary">
                                <i class="fa fa-user-plus"></i> Add New Member</a>
                        </div>
                    </div>

                </div>
                <div class="card-body pb-0">
                    <div class="row d-flex align-items-stretch">
                        @foreach($users as $user)
                            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                                <div class="card bg-light">
                                    <div class="card-header text-muted border-bottom-0">
                                        <i class="fa fa-user-alt text-success"></i> {{ $user->position->position }}
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-7">
                                                <h2 class="lead"><b>{{ $user->full_name }}</b></h2>
                                                <p class="text-muted text-sm">
                                                    <small>About:</small>
                                                    <b>{{ $user->office->name }}</b>
                                                </p>
                                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                                    <li class="small">
                                                        <span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>
                                                        Phone #: {{ $user->phone }}
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-5 text-center">
                                                <img src="{{ asset('storage/' . $user->avatar) }}"
                                                     title="{{ $user->full_name }}" alt="{{ $user->full_name }}"
                                                     class="img-circle img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="text-right">
                                            <a href="#" class="btn btn-sm bg-teal">
                                                <i class="fas fa-comments"></i>
                                            </a>
                                            <a href="{{ route('user.show',compact('user')) }}"
                                               class="btn btn-sm btn-primary">
                                                <i class="fas fa-user"></i> View Profile
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>

@endsection
@push('script')
    <script>
        (function(){
            let $url = '{{ route('user.index') }}';
            let $body = $('body');

                alert($url)
        })(jQuery)
    </script>

@endpush