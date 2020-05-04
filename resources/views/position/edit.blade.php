@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Positions</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('position.index') }}">List of Positions</a></li>
                        <li class="breadcrumb-item active">Edit Position</li>
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
                <h3 class="card-title">Edit Position</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="maximize"><i
                                class="fas fa-expand"></i></button>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('position.update',compact('position')) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="col-12">
                        <div class="form-group">
                            <label for="name">Name Position :</label>
                            <input type="text" name="name" id="name" class="form-control"
                                   placeholder="Name Position :"
                                   value="{{ (old('name')) ?? $position->name }}" required>
                        </div>
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="col-12 text-right">
                            <button type="submit" class="btn btn-primary">Edit Name Position</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@stop
