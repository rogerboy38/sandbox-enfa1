@extends("web.layoutregister")

@section('content')
{{ Form::open(array('url'=> '/userRegister', 'method'=>'POST', 'class'=>"row m-0" ))}}
@include('user.register2')
{{ Form::close()}}

@stop
