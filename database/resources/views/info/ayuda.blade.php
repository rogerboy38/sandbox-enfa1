@extends("web.layoutayuda")

@section('content')
{{ Form::open(array('url'=> '/ayuda', 'method'=>'POST', 'class'=>"row m-0" ))}}
@include('user.login2')
{{ Form::close()}}

@stop
