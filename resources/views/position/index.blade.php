@extends('layouts.app')
@section('content')
    <a href="{{ route('position.create') }}">Create New Position</a><br>
    List positions
    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>Taken</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        @forelse($positions as $position)
            <tr>
                <th>{{ $position->name }}</th>
                <th>0</th>
                <th><a href="{{ route('position.show',compact('position')) }}">View</a></th>
                <th><a href="{{ route('position.edit',compact('position')) }}">Edit</a></th>
            </tr>
        @empty
            <tr>
                <th colspan="2">List position is Empty</th>
            </tr>
            @endforelse
        </tbody>
    </table>
@stop