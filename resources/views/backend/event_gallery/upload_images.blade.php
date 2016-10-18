@extends('backend.layouts.layout')
@section('title','Gallery')
@section('small_title','Upload')
@section('event','active')
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
            <div class="col-md-2 col-md-offset-5" style="margin-top: 10px;">
                <button class="btn btn-primary btn-block btn-lg" onclick="window.location.href='{{url('event')}}'">Finish</button>
            </div>
			@else
			Event Id not Found
			@endif
	</div>
</div>
                @foreach($images as $col)
                    <div class="image col-lg-3 col-md-3 col-sm-6">
                        <img src="{{url('images/'.$col->name)}}" />
                        <div class="overlay text-center"><br>
                            <button class="btn_lg btn toggle_button_{{$col->id}} <?php if($col->deleted_at==null){echo 'btn-warning';}else{echo 'btn-success';} ?>" onclick="toggle({{$col->id}})">
                            <?php if($col->deleted_at==null){echo 'Disable';}else{echo 'Enable';} ?>
                            </button>
                            <form id="capt" action="{{url('caption/'.$col->id)}}" method="post">
                                {{csrf_field()}}
                                <input type="hidden" value="{{$eventid}}" name="event_id">
                                <input type="text" class="form-control" value="{{$col->caption}}" name="caption"> <br>
                                <input type="submit" value="Update Caption" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
				@endforeach
@endsection
@section('page_scripts')
<script>
    function toggle(id){
        var stat = $('.toggle_button_'+id).text();
            $.post('{{url('toggle')}}/'+id,
            {
                status:stat
            },
            function(response){
                if(response=='Enable'||response=='Disable'){
                    $('.toggle_button_'+id).text(response);
                    $('.toggle_button_'+id).toggleClass('btn-warning btn-success');
                }else{
                    alert('Failed to Update database!');
                }

            });
    }
</script>
@endsection