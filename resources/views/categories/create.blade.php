@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Création d'une catégorie</div>

                <div class="card-body">

                    <a href="{{ route('home') }}" class="btn btn-danger" title="Retour a la home">Retour a la home</a>

                    <form action="{{ route('categories.store') }}" method="POST">
                        @csrf
                        <label for="name">Nom</label>
                        <input id="name" type="text" name="name">
                        <br>
                        <button type="submit">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
