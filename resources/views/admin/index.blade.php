@extends('layouts.adminbase')

@section('title', 'Title')

@section('sidebar')
    @parent
@stop

@section('content')
    @include('admin.content')
@endsection
