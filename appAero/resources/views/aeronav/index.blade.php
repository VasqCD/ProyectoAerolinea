@extends('layouts.app')

@section('template_title')
    Aeronav
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Aeronav') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('aeronavs.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Idaerolinea</th>
										<th>Idfabricante</th>
										<th>Nombreaeronave</th>
										<th>Serie</th>
										<th>Estatus</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($aeronavs as $aeronav)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $aeronav->idAerolinea }}</td>
											<td>{{ $aeronav->idFabricante }}</td>
											<td>{{ $aeronav->nombreAeronave }}</td>
											<td>{{ $aeronav->serie }}</td>
											<td>{{ $aeronav->estatus }}</td>

                                            <td>
                                                <form action="{{ route('aeronavs.destroy',$aeronav->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('aeronavs.show',$aeronav->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('aeronavs.edit',$aeronav->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $aeronavs->links() !!}
            </div>
        </div>
    </div>
@endsection
