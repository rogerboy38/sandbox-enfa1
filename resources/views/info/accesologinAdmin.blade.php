@extends("web.layoutlogin")

@section('content')
{{ Form::open(array('url'=> '/login/admin', 'method'=>'POST', 'class'=>"row m-0" ))}}
@include('user.loginAdmin')
{{ Form::close()}}

@stop
