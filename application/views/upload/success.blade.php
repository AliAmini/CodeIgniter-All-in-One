@extends('layouts.default')

@section('content')
	<h3>Your file was successfully uploaded!</h3>  
		
	<ul> 
		@foreach ($upload_data as $item => $value)
		<li>{{$item}}: {{$value}}</li> 
		@endforeach
	</ul>  

	<p>{!!anchor('upload', 'Upload Another File!')!!}</p> 
@stop
