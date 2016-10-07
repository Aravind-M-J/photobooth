@extends('backend.layouts.layout')
@section('title','Gallery')
@section('small_title','Upload')
@section('body')
<div class="box box-success">
	<div class="box-body">
      <div class="container">
        <div class="row">
            <div class="col-md-12">                
				<form action="{{route('image.store')}}" enctype="multipart/form-data" class="dropzone" id="book-image">
					{{csrf_field()}}
				 <div>
                    <h3>Upload Images</h3>
                </div>
				</form>
            </div>
        </div>
      </div>
	</div>
</div>
@endsection 
