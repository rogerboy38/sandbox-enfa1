<div class="form-group">

    <?php echo e(Form::label('origen', 'Origen:')); ?>

    <?php echo e(Form::text('origen', null, ['id'=>'origen', 'class'=>'form-control', 'placeholder'=>'donde esta la carga ej.: 27000 TRC Torreon'])); ?>

    <?php echo e(Form::select('origen',[
      'TRC' => ['Torreon' => '27000'],
      'CDMX' => ['CD. Mexico]' => '00100'],
    ])); ?>

    <UL>
      <?php echo e(Form::label('destino', 'Destino:')); ?>

        <?php echo e(Form::text('destino', null, ['id'=>'destino', 'class'=>'form-control', 'placeholder'=>'hacia donde va la carga ej.: 00100 CDMX Mexico'])); ?>

        <div class="form-group">
          <?php echo e(Form::label('zip', null, ['class' => 'control-label'])); ?>

        </div>
          <?php echo e(Form::select('destino', [
          'DTRC' => ['Torreon' => '27000'],
          'DCDMX' => ['CD. Mexico]' => '00100'],
          ])); ?>

    <div class="checkbox">

      <?php echo e(Form::checkbox('Recordarme', 'value', true)); ?>

    </div>

      <?php echo e(Form::text('zip2', null, ['id'=>'zip2','class' => 'form-control', 'placeholder'=>'zip2'])); ?>

    <div>

      <?php echo e(Form::submit('Enviar', ['class'=>'form-control'])); ?>

    </div>
</div>
