@extends("web.layoutenfa")

@section('content')
{{ Form::open(array('url'=> '/', 'method'=>'POST' ))}}
@include('landing.form.landing')
@include('landing.form.boxrefresh')
{{ Form::close()}}
@endsection
@stop
