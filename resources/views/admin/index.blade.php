@extends('admin.layout.admin')
@section('content')
    <h3>Hai, {{Auth::user()->name}}</h3>
@endsection
