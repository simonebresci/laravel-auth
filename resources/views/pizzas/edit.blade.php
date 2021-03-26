@extends('layouts.base')

@section('title','Pizza edit')

@section('content')
  @include('layouts.form', ['edit' => true]);
@endsection
