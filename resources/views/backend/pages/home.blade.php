@extends('backend.master')

@section('main')
    <h5>Hello, {{Auth()->user()->name}}</h5>
@stop
