@extends('layouts.app')

@section('content')
    @foreach($departments as $department)
        <a href="{{ $department->link }}">{{ $department->name }}</a>
    @endforeach
@endsection