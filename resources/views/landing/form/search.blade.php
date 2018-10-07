@extends("web.layoutenviar")
<!--

-->
@section('content')
{{ Form::open(array('url'=> '/quieroEnviar', 'method'=>'POST', 'class'=>"row m-0" ))}}
@if (count($origen) === 0)
... html showing no articles found
@elseif (count($origen) >= 1)
... print out results

    @foreach($destino as $destino)
    <h1>{{'DESTINO' . $destino}}</h1>
    @endforeach

@endif
{{ Form::close()}}


@stop
