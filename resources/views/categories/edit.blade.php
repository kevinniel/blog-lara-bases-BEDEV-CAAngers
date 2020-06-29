@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Modification d'une catégorie</div>

                <div class="card-body">

                    <a href="{{ route('home') }}" class="btn btn-danger" title="Retour a la home">Retour a la home</a>
                    <form action="{{ route('categories.update', $category->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <label for="name">Nom</label>
                        @if(!is_null($category->name))
                            <input id="name" type="text" name="name" value="{{ $category->name }}">
                        @else
                            <input id="name" type="text" name="name">
                        @endif
                        <br>
                        <button type="submit">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
