@extends("web.layoutlogin")

@section('content')
{{ Form::open(array('url'=> '/login', 'method'=>'POST', 'class'=>"row m-0" ))}}
@include('user.login2')
<input type="text" class="form-control" name="email" placeholder="E-Mail / Username" value="{{ old('email') }}" required autofocus>

{{ Form::close()}}

@stop
