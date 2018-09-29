@extends("web.layoutenviar")

@section('content')
{{ Form::open(array('url'=> '/quieroEnviar', 'method'=>'POST', 'class'=>"row m-0" ))}}
@include('user.login2')
{{ Form::close()}}

@stop
