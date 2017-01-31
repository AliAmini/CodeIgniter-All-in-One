@extends('layouts.default')

@section('content')
	{!! $error !!}

	{!! form_open_multipart('upload/uploadFile') !!}
		<input type = "file" name = "userfile" size = "20" /> 
		<br /><br /> 
		<input type = "submit" value = "upload" /> 
	</form> 

@stop
