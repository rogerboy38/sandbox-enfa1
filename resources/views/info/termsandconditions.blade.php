
@extends("web.layoutTermsandConditions")

@section('content')
{{ Form::open(array('url'=> '/termsandconditions', 'method'=>'POST', 'class'=>"row m-0" ))}}
@include('info.termsandconditions2')
{{ Form::close()}}

@stop
