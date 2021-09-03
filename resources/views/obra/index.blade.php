@extends('layouts.app')

@section('template_title')
    Obra
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Obra') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('obras.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Fechainicio</th>
										<th>Fechaentrega</th>
										<th>Estado</th>
										<th>Cantidadmaterial</th>
										<th>Tipomaterial</th>
										<th>Idclientefk</th>
										<th>Idcategoriafk</th>
										<th>Idusuariofk</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($obras as $obra)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $obra->nombre }}</td>
											<td>{{ $obra->fechaInicio }}</td>
											<td>{{ $obra->fechaEntrega }}</td>
											<td>{{ $obra->estado }}</td>
											<td>{{ $obra->cantidadMaterial }}</td>
											<td>{{ $obra->tipoMaterial }}</td>
											<td>{{ $obra->idClienteFK }}</td>
											<td>{{ $obra->idCategoriaFK }}</td>
											<td>{{ $obra->idUsuarioFK }}</td>

                                            <td>
                                                <form action="{{ route('obras.destroy',$obra->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('obras.show',$obra->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('obras.edit',$obra->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $obras->links() !!}
            </div>
        </div>
    </div>
@endsection
