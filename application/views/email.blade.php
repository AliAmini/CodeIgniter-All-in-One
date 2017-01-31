@extends('layouts.default')

@section('content')
	<h3>Send Mail</h3>
	{!!var_dump($this)!!}
	{{$this->session->userdata('email_sent')}}
	{!! form_open('/email/sendMail') !!}

	<input type = "email" name = "email" required /> 
	<input type = "submit" value = "SEND MAIL"> 

	{!! form_close() !!}
@stop
