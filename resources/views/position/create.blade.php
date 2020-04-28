@extends('layouts.app')
@section('content')
    Create position
    <div class="container">
        <form action="{{ route('position.store') }}" method="POST">
            @csrf
            <div class="col-12">
                <div class="form-group">
                    <label for="name">Name Position :</label>
                    <input type="text" name="name" id="name" class="form-control"
                           placeholder="Name Position :"
                           value="{{ old('name') }}" required>
                </div>
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <div class="col-12 text-right">
                    <button type="submit" class="btn btn-primary">Add New Position</button>
                </div>
            </div>
        </form>
    </div>

@stop