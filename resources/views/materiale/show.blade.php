@extends('layouts.app')

@section('template_title')
    {{ $materiale->name ?? 'Show Materiale' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Materiale</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('materiales.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Peso:</strong>
                            {{ $materiale->peso }}
                        </div>
                        <div class="form-group">
                            <strong>Tamaño:</strong>
                            {{ $materiale->tamaño }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $materiale->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $materiale->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Idtipofk:</strong>
                            {{ $materiale->idTipoFK }}
                        </div>
                        <div class="form-group">
                            <strong>Idmarcafk:</strong>
                            {{ $materiale->idMarcaFK }}
                        </div>
                        <div class="form-group">
                            <strong>Idproveedorfk:</strong>
                            {{ $materiale->idProveedorFK }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
