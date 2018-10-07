@extends("web.layoutenviar")

@section('content')
{{ Form::open(array('url'=> '/quieroEnviar', 'method'=>'POST', 'class'=>"row m-0" ))}}

{{ Form::close()}}
{{ Form::open(array('url'=> '/test', 'method'=>'POST', 'class'=>"row m-0" ))}}

{{ Form::close()}}

@stop
