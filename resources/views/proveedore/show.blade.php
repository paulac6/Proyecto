@extends('layouts.app')

@section('template_title')
    {{ $proveedore->name ?? 'Show Proveedore' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Proveedor</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('proveedores.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $proveedore->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $proveedore->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Tipodoc:</strong>
                            {{ $proveedore->tipodoc }}
                        </div>
                        <div class="form-group">
                            <strong>Numerodoc:</strong>
                            {{ $proveedore->numerodoc }}
                        </div>
                        <div class="form-group">
                            <strong>Telcelular:</strong>
                            {{ $proveedore->telcelular }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $proveedore->correo }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $proveedore->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
