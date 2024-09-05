@extends('layouts.app')

@section('template_title')
    {{ $entreprise->name ?? __('Show') . " " . __('Entreprise') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Entreprise</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('entreprises.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Raison Sociale:</strong>
                                    {{ $entreprise->raison_sociale }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Ifu:</strong>
                                    {{ $entreprise->ifu }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
