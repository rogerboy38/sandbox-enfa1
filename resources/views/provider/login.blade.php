@extends("provider.layoutlogin")

@section('content')
{{ Form::open(array('url'=> '/providerLogin', 'method'=>'POST', 'class'=>"row m-0" ))}}
@include('provider.login2')
{{ Form::close()}}

@stop
