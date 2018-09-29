@extends("user.layoutlogin")

@section('content')
{{ Form::open(array('url'=> '/userLogin', 'method'=>'POST', 'class'=>"row m-0" ))}}
@include('user.login2')
{{ Form::close()}}

@stop
