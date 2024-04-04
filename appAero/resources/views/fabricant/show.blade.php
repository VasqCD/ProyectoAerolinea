@extends('layouts.app')

@section('template_title')
    {{ $fabricant->name ?? __('Show') . " " . __('Fabricant') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Fabricant</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('fabricants.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Nombrefabricante:</strong>
                            {{ $fabricant->nombreFabricante }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Estatus:</strong>
                            {{ $fabricant->estatus }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
