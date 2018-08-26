

    <div class="row m-0">
      <div class="col-xs-12 col-sm-8 col-md-6 col-lg-4">
        {{Form::label('origen', 'Origen:', array('class'=>'row m-0'))}}
        {{Form::text('origen', null, ['id'=>'origen', 'class'=>'col-xs-12  col-md-3', 'placeholder'=>'donde esta la carga ej.: 27000 TRC Torreon'])}}
        {{Form::select('origen',[
          'TRC' => ['Torreon' => '27000'],
          'CDMX' => ['CD. Mexico]' => '00100'],
        ])}}
        {{ Form::label('ZIPOrigen', null, array('class'=>'col-xs-12  col-md-4')) }}
      </div>
      <div class="col-xs-12 col-sm-8 col-md-6 col-lg-4">
        {{Form::label('destino', 'Destino:', array('class'=>'row m-0'))}}
        {{Form::text('destino', null, ['id'=>'destino','class'=>'col-xs-12  col-md-3', 'placeholder'=>'hacia donde va la carga ej.: 00100 CDMX Mexico'])}}
        {{Form::select('destino', [
        'DTRC' => ['Torreon' => '27000'],
        'DCDMX' => ['CD. Mexico]' => '00100'],
        ])}}
        {{ Form::label('ZIPDestino', null,  array('class'=>'col-xs-12  col-md-4')) }}
      </div>
      <div class="col-xs-12 col-sm-8 col-md-6 col-lg-4">
        {{Form::label('tipo', 'Tipo:', array('class'=>'row m-0'))}}
        {{Form::select('tipo',[
          'Caja Seca' => ['48 ft' => '48 ft'],['53 ft' => '53 ft'],
          'Plana' =>  ['48 ft' => '48 ft'],['53 ft' => '53 ft'],
        ], array('class'=>'col-xs-12  col-md-3'))}}
      </div>
    </div>
      <div class="eow m-0">
      <button class="btn btn-primary cargo-button" type="button" name="button">
        <img class="icon-cargo-button" src="src/images/transporta_icon.png" alt="" height="50" width="45" radius="20">
      </button>
      </div>
  </div>
