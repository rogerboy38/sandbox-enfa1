@extends("web.adminlayoutlogin")

@section('content')
{{ Form::open(array('url'=> '/admin/login', 'method'=>'POST', 'class'=>"row m-0" ))}}
@include('auth.loginAdmin2')
{{ Form::close()}}

@stop
