<!-- resources/views/errors/403.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('403 Interdite') }}</div>

                    <div class="card-body">
                        <div class="alert alert-danger">
                            {{ __("Désolé, vous n'êtes pas autorisé à accéder à cette page.") }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
