@extends('layouts.app')

@section('template_title')
    Aerolinea
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Aerolinea') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('aerolineas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Nombreaerolinea</th>
										<th>Estatus</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($aerolineas as $aerolinea)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $aerolinea->nombreAerolinea }}</td>
											<td>{{ $aerolinea->estatus }}</td>

                                            <td>
                                                <form action="{{ route('aerolineas.destroy',$aerolinea->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('aerolineas.show',$aerolinea->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('aerolineas.edit',$aerolinea->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $aerolineas->links() !!}
            </div>
        </div>
    </div>
@endsection
