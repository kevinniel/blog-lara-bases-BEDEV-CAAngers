@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Catégories</div>

                <div class="card-body">

                    <a href="{{ route('home') }}" class="btn btn-secondary" title="Retour sur la page d'accueil">Retour sur la page d'accueil</a>

                    <br>

                    <a href="{{ route('categories.create') }}" class="btn btn-success" title="Ajouter une catégorie">Ajouter une catégorie</a>
                    
                    <br>

                    <ul>
                        @foreach($categories as $category)
                            <li>
                                <a href="{{ route('categories.show', $category->id) }}" title="{{ $category->name }}">{{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
