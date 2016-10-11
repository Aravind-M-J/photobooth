@extends('admin.layouts.layout')
@section('title','Login')
@section('small_title','')
@section('body')
<div class="box box-success">
	<div class="box-body">
		<form role="form" action="" method="post">
        {{ csrf_field() }}
			<div class="form-group">
				<label for="title" class="control-label">E-mail ID</label>
				<input class="form-control" type="email" name="email" placeholder="Enter E-mail ID">
			</div>
			<div class="form-group">
				<label for="cont" class="control-label">Password</label>
				<input class="form-control" type="Password" name="pwd" placeholder="Enter Password">
			</div>
			<div class="form-group">
				<input type="submit" value="LOGIN" class="btn btn-primary" name="button"></button>
            </div>
            <div class="form-group">
    			<input type="checkbox" checked="checked" name="remember"> Remember Me				
			</div>
		</form>
	</div>
</div>
@endsection
@section('page_script')
<script>

</script>
@endsection