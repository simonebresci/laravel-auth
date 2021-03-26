@extends('layouts.base')

@section('title','Pizza create')

@section('content')
  @include('layouts.form', ['edit' => false]);
@endsection
