@extends('layouts.default')

@section('content')
	<p>Hello World; this is content section ;)</p>

	@foreach ($data as $d)
		<div class="data">
			<h3>{{$d->id}}. {{$d->title}}</h3>
			<p>{{$d->text}}</p>
		</div>
	@endforeach

@stop
