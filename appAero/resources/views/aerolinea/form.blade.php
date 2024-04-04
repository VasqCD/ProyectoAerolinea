<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre_aerolinea" class="form-label">{{ __('Nombreaerolinea') }}</label>
            <input type="text" name="nombreAerolinea" class="form-control @error('nombreAerolinea') is-invalid @enderror" value="{{ old('nombreAerolinea', $aerolinea?->nombreAerolinea) }}" id="nombre_aerolinea" placeholder="Nombreaerolinea">
            {!! $errors->first('nombreAerolinea', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estatus" class="form-label">{{ __('Estatus') }}</label>
            <input type="text" name="estatus" class="form-control @error('estatus') is-invalid @enderror" value="{{ old('estatus', $aerolinea?->estatus) }}" id="estatus" placeholder="Estatus">
            {!! $errors->first('estatus', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>