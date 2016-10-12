@extends('backend.layouts.layout')
@section('title','Gallery')
@section('small_title','Upload')
@section('body')
<div class="box box-success">
	<div class="box-body">			
			@if(isset($eventid))
            <div class="col-md-12">                
				<form action="{{route('image.store')}}" enctype="multipart/form-data" class="dropzone" id="book-image" method="post">
					{{csrf_field()}}
					<input type="hidden" value="{{$eventid}}" name="eventid">
				<div>
                    <h3>Upload Images</h3>
                </div>
				</form>
            </div>
			@else
			Event Id not Found
			@endif
	</div>
</div>
@endsection 
