@extends('layouts.default')

@section('content')
	<h2>{{$title}}</h2>

	@foreach ($news as $news_item)

	    <h3>{{$news_item->title}}</h3>
	    <div class="main">
	            {{$news_item->text}}
	    </div>
	    <p><a href="{{site_url('news/'.$news_item->slug)}}">View article</a></p>

	@endforeach

@stop
