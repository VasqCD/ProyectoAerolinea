<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_aerolinea" class="form-label">{{ __('Idaerolinea') }}</label>
            <input type="text" name="idAerolinea" class="form-control @error('idAerolinea') is-invalid @enderror" value="{{ old('idAerolinea', $aeronav?->idAerolinea) }}" id="id_aerolinea" placeholder="Idaerolinea">
            {!! $errors->first('idAerolinea', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_fabricante" class="form-label">{{ __('Idfabricante') }}</label>
            <input type="text" name="idFabricante" class="form-control @error('idFabricante') is-invalid @enderror" value="{{ old('idFabricante', $aeronav?->idFabricante) }}" id="id_fabricante" placeholder="Idfabricante">
            {!! $errors->first('idFabricante', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre_aeronave" class="form-label">{{ __('Nombreaeronave') }}</label>
            <input type="text" name="nombreAeronave" class="form-control @error('nombreAeronave') is-invalid @enderror" value="{{ old('nombreAeronave', $aeronav?->nombreAeronave) }}" id="nombre_aeronave" placeholder="Nombreaeronave">
            {!! $errors->first('nombreAeronave', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="serie" class="form-label">{{ __('Serie') }}</label>
            <input type="text" name="serie" class="form-control @error('serie') is-invalid @enderror" value="{{ old('serie', $aeronav?->serie) }}" id="serie" placeholder="Serie">
            {!! $errors->first('serie', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estatus" class="form-label">{{ __('Estatus') }}</label>
            <input type="text" name="estatus" class="form-control @error('estatus') is-invalid @enderror" value="{{ old('estatus', $aeronav?->estatus) }}" id="estatus" placeholder="Estatus">
            {!! $errors->first('estatus', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>