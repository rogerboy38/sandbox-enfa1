@extends("web.layouttransportar")

@section('content')
{{ Form::open(array('url'=> '/quieroTransportar', 'method'=>'POST', 'class'=>"row m-0" ))}}
@include('user.login2')
{{ Form::close()}}

@stop
