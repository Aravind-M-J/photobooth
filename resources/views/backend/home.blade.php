@extends('backend.layouts.layout')
@section('home','active')
@section('body')
<?php
    $user = \Illuminate\Support\Facades\Auth::user();
?>
    <h1>Welcome {{$user->name}}!!</h1>
@endsection