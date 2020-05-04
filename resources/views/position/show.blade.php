@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ $position->name }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('position.index') }}">List of Positions</a></li>
                        <li class="breadcrumb-item active">{{ $position->name }}</li>
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
                <h3 class="card-title">{{ $position->name }}</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="maximize">
                        <i class="fas fa-expand"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th style="width: 20%">
                            User Name
                        </th>
                        <th style="width: 30%">
                            Office Name
                        </th>
                        <th class="text-center">
                            Country Name
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($position->users as $user)
                        <tr>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item text-center">
                                       <img alt="{{ $user->full_name }}"
                                            style="width: 70px"
                                            src="{{ asset('storage/'. $user->avatar) }}">
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <a>
                                    {{ $user->full_name }}
                                </a>
                                <br/>
                                <small>
                                    Created {{ $user->created_at }}
                                </small>
                            </td>
                            <td>
                                {{ $user->office->name }}
                            </td>

                            <td class="project-state">
                                {{ ucwords($user->office->country->name) }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>#</td>
                            <td colspan="5">No User Position</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
@stop
