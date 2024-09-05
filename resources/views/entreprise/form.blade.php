<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="raison_sociale" class="form-label">{{ __('Raison Sociale') }}</label>
            <input type="text" name="raison_sociale" class="form-control @error('raison_sociale') is-invalid @enderror" value="{{ old('raison_sociale', $entreprise?->raison_sociale) }}" id="raison_sociale" placeholder="Raison Sociale">
            {!! $errors->first('raison_sociale', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ifu" class="form-label">{{ __('Ifu') }}</label>
            <input type="text" name="ifu" class="form-control @error('ifu') is-invalid @enderror" value="{{ old('ifu', $entreprise?->ifu) }}" id="ifu" placeholder="Ifu">
            {!! $errors->first('ifu', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>