@extends('layouts.app')

@section('template_title')
    {{ $obra->name ?? 'Show Obra' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Obra</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('obras.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $obra->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Fechainicio:</strong>
                            {{ $obra->fechaInicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fechaentrega:</strong>
                            {{ $obra->fechaEntrega }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $obra->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidadmaterial:</strong>
                            {{ $obra->cantidadMaterial }}
                        </div>
                        <div class="form-group">
                            <strong>Tipomaterial:</strong>
                            {{ $obra->tipoMaterial }}
                        </div>
                        <div class="form-group">
                            <strong>Idclientefk:</strong>
                            {{ $obra->idClienteFK }}
                        </div>
                        <div class="form-group">
                            <strong>Idcategoriafk:</strong>
                            {{ $obra->idCategoriaFK }}
                        </div>
                        <div class="form-group">
                            <strong>Idusuariofk:</strong>
                            {{ $obra->idUsuarioFK }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
