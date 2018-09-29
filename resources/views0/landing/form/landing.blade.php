<div class="form-group">

    {{Form::label('origen', 'Origen:')}}
    {{Form::text('origen', null, ['id'=>'origen', 'class'=>'form-control', 'placeholder'=>'donde esta la carga ej.: 27000 TRC Torreon'])}}
    {{Form::select('origen',[
      'TRC' => ['Torreon' => '27000'],
      'CDMX' => ['CD. Mexico]' => '00100'],
    ])}}
    <UL>
      {{Form::label('destino', 'Destino:')}}
        {{Form::text('destino', null, ['id'=>'destino', 'class'=>'form-control', 'placeholder'=>'hacia donde va la carga ej.: 00100 CDMX Mexico'])}}
        <div class="form-group">
          {{ Form::label('zip', null, ['class' => 'control-label']) }}
        </div>
          {{Form::select('destino', [
          'DTRC' => ['Torreon' => '27000'],
          'DCDMX' => ['CD. Mexico]' => '00100'],
          ])}}
    <div class="checkbox">

      {{ Form::checkbox('Recordarme', 'value', true) }}
    </div>

      {{ Form::text('zip2', null, ['id'=>'zip2','class' => 'form-control', 'placeholder'=>'zip2'])}}
    <div>

      {{ Form::submit('Enviar', ['class'=>'form-control'])}}
    </div>
</div>
