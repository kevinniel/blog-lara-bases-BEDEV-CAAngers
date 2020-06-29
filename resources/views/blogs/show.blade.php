@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Affichage de l'article</div>

                <div class="card-body">

                    <a class="btn btn-success" href="{{ route('blogs.index') }}">retour a la liste</a>

                    <a class="btn btn-warning" href="{{ route('blogs.edit', $blog->id) }}">modifier</a>

                    <form action="{{ route('blogs.destroy') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="id" value="{{ $blog->id }}">
                        <button class="btn btn-danger" type="submit">Supprimer</button>
                    </form>

                    <p>{{ $blog->content }}</p>

                    <br>

                    @if(!is_null($blog->category))
                        <p>
                            Cet article concerne la catégorie : <a href="{{ route('categories.show', $blog->category->id) }}">{{ $blog->category->name }}</a>
                        </p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
