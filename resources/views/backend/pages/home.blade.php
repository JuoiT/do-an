@extends('backend.master')

@section('main')
    <h5>Welcome, {{ Auth()->user()->name }}</h5>
@stop


