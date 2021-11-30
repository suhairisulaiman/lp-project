@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Main') }}</div>

                <div class="card-body">

                    @can('isLP')
                        <a class="btn btn-primary">
                            LP Admin
                        </a>
                    @endcan

                    @can('isPPD')
                        <a class="btn btn-warning">
                            PPD
                        </a>
                    @endcan

                    @can('isEjen')
                        <a class="btn btn-success">
                            Ejen
                        </a>
                    @endcan

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Anda telah log masuk!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
