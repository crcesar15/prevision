@extends('layout')

@section('navigation')
    @include('partials/navbar', $user = session()->get('user'))
@endsection

@section('sidebar')
    @include('partials/sidebar', $user = session()->get('user'))
@endsection