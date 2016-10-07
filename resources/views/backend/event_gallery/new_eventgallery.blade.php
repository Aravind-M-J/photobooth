@extends('backend.layouts.layout')
@section('title','EventGallery')
@section('small_title','New')
@section('body')
<div class="box box-success">
	<div class="box-body">
		<form role="form" action="" method="post">
			<div class="form-group">
				<label for="title" class="control-label">Event-Name</label>
				<input class="form-control" type="text" name="evtname">
			</div>
			<div class="form-group">
				<label for="cont" class="control-label">Description</label>
				<input class="form-control" type="text area" name="descrp">
			</div>
			<div class="form-group">
				<label for="img" class="control-label">Featured image</label>
				<input id="img" name="img" type="file" class="filestyle">				
			</div>
			<input type="submit" value="Submit" class="btn btn-primary">
		</form>
	</div>
</div>
@endsection