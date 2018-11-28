@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="POST" action="{{ route('sheet.store') }}">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs" id="myTab" role="tablist" style="padding-left: 30%;">
                          <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Datos Personales</a>
                          </li>
                          {{-- <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Descripciones</a>
                          </li> --}}
                          <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Ramas</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="atributos-tab" data-toggle="tab" href="#atributos" role="tab" aria-controls="atributos" aria-selected="false">Atributos</a>
                          </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="edad" class="col-md-4 col-form-label text-md-right">{{ __('Edad') }}</label>

                                <div class="col-md-6">
                                    <input id="edad" type="number" class="form-control{{ $errors->has('edad') ? ' is-invalid' : '' }}" name="edad" value="{{ old('edad') }}" required autofocus min="10" max="20">

                                    @if ($errors->has('edad'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('edad') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Aldea') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="aldea" value="{{ old('aldea') }}" required autofocus>
                                        <option value="1">Konohagakure no Sato</option>
                                        <option value="2">Sunagakure no Sato</option>
                                    </select>

                                    @if ($errors->has('aldea'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('aldea') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                          </div>
                          {{-- <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div> --}}
                          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                          <div class="tab-pane fade" id="atributos" role="tabpanel" aria-labelledby="atributos-tab">4</div>

                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-3">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Crear Ficha') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
