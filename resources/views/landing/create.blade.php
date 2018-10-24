@extends("web.layoutenfa")

@section('content')
{{ Form::open(array('url'=> '/create2', 'method'=>'POST', 'class'=>"row m-0" ))}}
@include('landing.form.content')
{{ Form::close()}}

@stop
