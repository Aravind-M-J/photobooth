@extends('backend.layouts.layout')
@section('title','Blog')
@section('small_title','New')
@section('body')
<div class="box box-success">
	<div class="box-body">
			<table id="blog" border='1'>
				<tr>
					<th>Title</th>
					<th>Content</th>
					<th>Image</th>					
				</tr>
			</table>
	 </div>
</div>
@endsection

@section('page_script')

<script>

$(function () {
$("#blog").DataTable();
});

</script>

@endsection
