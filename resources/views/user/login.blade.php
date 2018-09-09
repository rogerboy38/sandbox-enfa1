@extends("web.layoutlogin")

@section('content')
{{ Form::open(array('url'=> '/login', 'method'=>'POST', 'class'=>"row m-0" ))}}
@include('user.login2')
{{ Form::close()}}

@stop
