@extends('provider.providerLayout')

@section('content')

<div class="col-md-12 mt">

    @if(Session::has('message'))
    <div class="alert alert-{{ Session::get('type') }}">
        <b>{{ Session::get('message') }}</b>
    </div>
    @endif

    <?php if ($status == -1) { ?>
        <div class="alert alert-danger">
            <b>Por favor sube todos los documentos para que tu solicitud sea aprobada.</b>
        </div>
    <?php } elseif ($status == 0) { ?>
        <div class="alert alert-danger">
            <b>Gracias por subir tus documentos. Tu cuenta sera activada cuando verifiquemos tu documentaci&oacute;n.</b>
        </div>
    <?php } else { ?>
        <div class="alert alert-success">
            <b>Tu cuenta esta activa.</b>
        </div>
    <?php } ?>
    <div class="content-panel">
        <h4>Sube tus Documentos</h4><br>
        {{  Form::hidden('url',URL::previous())  }}
        <form class="form-horizontal style-form" method="post" action="{{ URL::Route('providerUpdateDocuments') }}" enctype="multipart/form-data">
            <?php foreach ($documents as $document) { ?>
              {{csrf_field()}}
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"><?= $document->name ?></label>
                    <div class="col-sm-1">
                        <?php
                        foreach ($walker_document as $walker_documents) {
                            if ($document->id == $walker_documents->document_id) {
                                ?>
                                <a href="<?= $walker_documents->url ?>" target="_blank">Ver Archivo</a>
                            <?php }
                        }
                        ?>
                    </div>
                    <div class="col-sm-5" style="">
                        <input id="doc" type="file" accept="application/pdf, image/*" class="form-control" name="<?= $document->id ?>" >
                    </div>
                </div>

<?php } ?>

            <span class="col-sm-2"></span>
            <button id="upload" type="submit" class="btn btn-info">Subir Documentos</button>
            <button type="reset" class="btn btn-info">Resetear</button>

        </form>
    </div>


</div>


@stop
