@extends('template')
    
    @section('contenu')
        <br>
        <div class="container">
            <div class="row card text-white bg-dark">
                <h4 class="card-header">Contactez-moi</h4>
                <div class="card-body">
                    <form action="{{ url('contact') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control  @error('nom') is-invalid @enderror" name="nom" id="nom" placeholder="Votre nom" value="{{ old('nom') }}">
                            @error('nom')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control  @error('email') is-invalid @enderror" name="email" id="email" placeholder="Votre email" value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control  @error('message') is-invalid @enderror" name="message" id="message" placeholder="Votre message">{{ old('message') }}</textarea>
                            @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-secondary">Envoyer !</button>
                    </form>
                </div>
            </div>
        </div>
    @endsection