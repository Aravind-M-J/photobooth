@extends('backend.layouts.layout')
@section('home','active')
@section('body')
 @include('flash')

<?php
    $user = \Illuminate\Support\Facades\Auth::user();
?>

<div class="jumbotron">
        <h1>Admin Page</h1>
        <p>This page is  admins only!</p>
    </div>
    
@endsection