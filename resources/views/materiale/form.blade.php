<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('peso') }}
            {{ Form::text('peso', $materiale->peso, ['class' => 'form-control' . ($errors->has('peso') ? ' is-invalid' : ''), 'placeholder' => 'Peso']) }}
            {!! $errors->first('peso', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tamaño') }}
            {{ Form::text('tamaño', $materiale->tamaño, ['class' => 'form-control' . ($errors->has('tamaño') ? ' is-invalid' : ''), 'placeholder' => 'Tamaño']) }}
            {!! $errors->first('tamaño', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad') }}
            {{ Form::text('cantidad', $materiale->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $materiale->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idTipoFK') }}
            {{ Form::text('idTipoFK', $materiale->idTipoFK, ['class' => 'form-control' . ($errors->has('idTipoFK') ? ' is-invalid' : ''), 'placeholder' => 'Idtipofk']) }}
            {!! $errors->first('idTipoFK', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idMarcaFK') }}
            {{ Form::text('idMarcaFK', $materiale->idMarcaFK, ['class' => 'form-control' . ($errors->has('idMarcaFK') ? ' is-invalid' : ''), 'placeholder' => 'Idmarcafk']) }}
            {!! $errors->first('idMarcaFK', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idProveedorFK') }}
            {{ Form::text('idProveedorFK', $materiale->idProveedorFK, ['class' => 'form-control' . ($errors->has('idProveedorFK') ? ' is-invalid' : ''), 'placeholder' => 'Idproveedorfk']) }}
            {!! $errors->first('idProveedorFK', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>