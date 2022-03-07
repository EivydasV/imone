@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Company') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('companies.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('name') }}</label>

                            <div class="col-md-6">
                                <input id="name" value="{{ old('name') }}" type="text" class="form-control @error('name') is-invalid @enderror" name="name" >

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="code" class="col-md-4 col-form-label text-md-end">{{ __('code') }}</label>

                            <div class="col-md-6">
                                <input id="code" value="{{ old('code') }}" type="number" class="form-control @error('name') is-invalid @enderror" name="code" >

                                @error('code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="pvm_code" class="col-md-4 col-form-label text-md-end">{{ __('pvm_code') }}</label>

                            <div class="col-md-6">
                                <input id="pvm_code" value="{{ old('pvm_code') }}" type="text" class="form-control @error('pvm_code') is-invalid @enderror" name="pvm_code" >

                                @error('pvm_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('address') }}</label>

                            <div class="col-md-6">
                                <input id="address" value="{{ old('address') }}" type="text" class="form-control @error('address') is-invalid @enderror" name="address" >

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="telephone"  class="col-md-4 col-form-label text-md-end">{{ __('telephone') }}</label>

                            <div class="col-md-6">
                                <input id="telephone" value="{{ old('telephone') }}" type="text" class="form-control @error('telephone') is-invalid @enderror" name="telephone" >

                                @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="CEO"  class="col-md-4 col-form-label text-md-end">{{ __('CEO') }}</label>

                            <div class="col-md-6">
                                <input id="CEO" value="{{ old('CEO') }}" type="text" class="form-control @error('CEO') is-invalid @enderror" name="CEO" >

                                @error('CEO')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create Company') }}
                                </button>


                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
