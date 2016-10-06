@extends('backend.layouts.layout')
@section('title','Blog')
@section('small_title','New')
@section('body')
<div class="box box-success">
	<div class="box-body">
		<form role="form" action="" method="post">
			<div class="form-group">
				<label for="title" class="control-label">Title</label>
				<input class="form-control" type="text" name="title">
			</div>
			<div class="form-group">
				<label for="cont" class="control-label">Content</label>
				<input class="form-control" type="text area" name="cont">
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
@section('page_script')
<script>

</script>
@endsection