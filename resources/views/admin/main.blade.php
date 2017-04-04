@extends('template.default')

@section('styles')

@endsection

@section('contents')
<h1>Welcome to Admin Dashboard : {{Auth::user()->username}}</h1>
@endsection