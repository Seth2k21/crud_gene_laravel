@extends('layouts.app')

@section('content')
    <h1>{{ __('Edit Annex') }}</h1>

    <!-- Formulaire d'édition avec méthode PUT -->
    <form action="{{ route('annexes.update', $annex->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Indique que nous utilisons la méthode PUT pour la mise à jour -->

        <div class="row padding-1 p-1">
            <div class="col-md-12">

                <div class="form-group mb-2 mb20">
                    <label for="ville" class="form-label">{{ __('Ville') }}</label>
                    <input type="text" name="ville" class="form-control @error('ville') is-invalid @enderror" value="{{ old('ville', $annex->ville) }}" id="ville" placeholder="Ville">
                    {!! $errors->first('ville', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>

                <div class="form-group mb-2 mb20">
                    <label for="entreprise_id" class="form-label">{{ __('Entreprise') }}</label>
                    <select name="entreprise_id" class="form-control @error('entreprise_id') is-invalid @enderror" id="entreprise_id">
                        <option value="" disabled>{{ __('Select an entreprise') }}</option>
                        @foreach($entreprises as $entreprise)
                            <option value="{{ $entreprise->id }}" {{ old('entreprise_id', $annex->entreprise_id) == $entreprise->id ? 'selected' : '' }}>
                                {{ $entreprise->raison_sociale }}
                            </option>
                        @endforeach
                    </select>
                    {!! $errors->first('entreprise_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>

            </div>
            <div class="col-md-12 mt20 mt-2">
                <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
            </div>
        </div>
    </form>
@endsection
