@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('No es posible') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Esta accion solo la puede realizar el administrador ') }}
                </div>
                <button type="button" class= "btn btn-primary btn-lg" onclick="location.href = '{{ route('dashboard') }}'">Regresar</button>
            </div>
        </div>
    </div>
</div>
@endsection
