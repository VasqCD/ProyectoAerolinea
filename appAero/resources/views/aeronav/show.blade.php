@extends('layouts.app')

@section('template_title')
    {{ $aeronav->name ?? __('Show') . " " . __('Aeronav') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Aeronav</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('aeronavs.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Idaerolinea:</strong>
                            {{ $aeronav->idAerolinea }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Idfabricante:</strong>
                            {{ $aeronav->idFabricante }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Nombreaeronave:</strong>
                            {{ $aeronav->nombreAeronave }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Serie:</strong>
                            {{ $aeronav->serie }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Estatus:</strong>
                            {{ $aeronav->estatus }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
