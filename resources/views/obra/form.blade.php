<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $obra->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechaInicio') }}
            {{ Form::text('fechaInicio', $obra->fechaInicio, ['class' => 'form-control' . ($errors->has('fechaInicio') ? ' is-invalid' : ''), 'placeholder' => 'Fechainicio']) }}
            {!! $errors->first('fechaInicio', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechaEntrega') }}
            {{ Form::text('fechaEntrega', $obra->fechaEntrega, ['class' => 'form-control' . ($errors->has('fechaEntrega') ? ' is-invalid' : ''), 'placeholder' => 'Fechaentrega']) }}
            {!! $errors->first('fechaEntrega', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $obra->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidadMaterial') }}
            {{ Form::text('cantidadMaterial', $obra->cantidadMaterial, ['class' => 'form-control' . ($errors->has('cantidadMaterial') ? ' is-invalid' : ''), 'placeholder' => 'Cantidadmaterial']) }}
            {!! $errors->first('cantidadMaterial', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipoMaterial') }}
            {{ Form::text('tipoMaterial', $obra->tipoMaterial, ['class' => 'form-control' . ($errors->has('tipoMaterial') ? ' is-invalid' : ''), 'placeholder' => 'Tipomaterial']) }}
            {!! $errors->first('tipoMaterial', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idClienteFK') }}
            {{ Form::text('idClienteFK', $obra->idClienteFK, ['class' => 'form-control' . ($errors->has('idClienteFK') ? ' is-invalid' : ''), 'placeholder' => 'Idclientefk']) }}
            {!! $errors->first('idClienteFK', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idCategoriaFK') }}
            {{ Form::text('idCategoriaFK', $obra->idCategoriaFK, ['class' => 'form-control' . ($errors->has('idCategoriaFK') ? ' is-invalid' : ''), 'placeholder' => 'Idcategoriafk']) }}
            {!! $errors->first('idCategoriaFK', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idUsuarioFK') }}
            {{ Form::text('idUsuarioFK', $obra->idUsuarioFK, ['class' => 'form-control' . ($errors->has('idUsuarioFK') ? ' is-invalid' : ''), 'placeholder' => 'Idusuariofk']) }}
            {!! $errors->first('idUsuarioFK', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>