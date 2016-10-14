@extends('backend.layouts.layout')
@section('title','ListEvent')
@section('small_title','New')
@section('body')


<div class="box box-success">
	<div class="box-body">


<table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Sl.No</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>CoverImage</th>
					<th>Gallery</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
			<?php $i=1 ?>
                @foreach( $allevent as $event )
                <tr>
                    <td>{{ $i }}</td>
                    <td>{!! $event->name !!}</td>
                    <td>{{ $event->description }}</td>
					<td><img src="{{ asset("images/$event->image") }}" alt="{{ $event->image }}" height="50px" width="100px" ></td>
					<td>{{ $event->gallery }}</td>
                    
                
     
				<td class=center>
                       
                        <a href='Event/{{ $event->id }}/edit' class='btn btn-primary'>Edit</a>
                    </td>
                    
                    <td class=center>
                        {!! Form::open(['route' => ['EventGallery.destroy', $event->id], 'method' => 'POST', 'class' => 'delete']) !!}
                        {!! csrf_field() !!}
                        <input type="hidden" name="_method" value="delete">
                        <input type="hidden" name="id" value="{{$event->id}}">
                        <button type="submit" class="btn btn-danger">Delete</button>
                        {!! Form::close() !!}
                    </td>
                </tr>
                <?php $i++ ?>
                @endforeach
            </tbody>



</table>
</div>
</div>
@stop
@section('confirmDelete')
<script>
    $(".delete").on("submit", function(){
        return confirm("Do you want to delete this item?");
    });
</script>
@stop
@endsection