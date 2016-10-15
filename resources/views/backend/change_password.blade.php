@extends('backend.layouts.layout')
@section('title','Blog')
@section('small_title','New')
@section('body')
<div class="box box-success">
    <div class="box-body">
        <form role="form" action="{{url('changePassword')}}" method="post">
            <div class="form-group">
                <label for="password" class="control-label">Password</label>
                <input class="form-control" type="password" name="password">
            </div>
            <div class="form-group">
                <label for="changePassword" class="control-label">Change Password</label>
                <input class="form-control" type="password" name="password_confirmation">
            </div>
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="submit" value="Submit" class="btn btn-primary">
        </form>
    </div>
</div>
@endsection