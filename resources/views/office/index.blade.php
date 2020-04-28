@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i class="fas fa-home fa-1x"></i> Offices</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Offices</li>
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
                <h3 class="card-title"><i class="fas fa-home fa-1x"></i> Offices</h3>

                <div class="card-tools">
                    <a href="{{ route('office.create') }}">
                        <button type="button" class="btn btn-primary" title="Add New Office">
                            <i class="fas fa-plus"></i>
                            <span>Add New Office</span>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                    </a>
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
                            Office Name
                        </th>
                        <th style="width: 30%">
                            Team Members
                        </th>
                        <th>
                            Suppliers
                        </th>
                        <th class="text-center">
                            Country Name
                        </th>
                        <th style="width: 20%">
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($offices as $office)
                        <tr>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item text-center">
                                        <img alt="logo" style="width: 70px" src="{{ asset('storage/'. $office->logo) }}">
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <a>
                                    {{ $office->name }}
                                </a>
                                <br/>
                                <small>
                                    Created {{ $office->created_at }}
                                </small>
                            </td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                                    </li>
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar2.png">
                                    </li>
                                </ul>
                            </td>
                            <td class="project_progress">
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-green" role="progressbar" aria-volumenow="47"
                                         aria-volumemin="0" aria-volumemax="100" style="width: 47%">
                                    </div>
                                </div>
                                <small>
                                    47% Complete
                                </small>
                            </td>
                            <td class="project-state">
                                {{ ucwords($office->country->name) }}
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="{{ route('office.show',compact('office')) }}">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-info btn-sm" href="{{ route('office.edit',compact('office')) }}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td>#</td>
                            <td colspan="5">No Offices</td>
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