@extends("web.layoutenfa")

@section('content')
{{ Form::open(array('url'=> '/create2', 'method'=>'POST', 'class'=>"row m-0" ))}}
@include('landing.form.content')
{{ Form::close()}}
{!! Form::open(['method'=>'GET','url'=>'offices','class'=>'navbar-form navbar-left','role'=>'search'])  !!}
@stop
