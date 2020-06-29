@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Affichage de la catégorie : {{ $category->name }}</div>

                <div class="card-body">

                    <a class="btn btn-success" href="{{ route('categories.index') }}">retour a la liste</a>

                    <a class="btn btn-warning" href="{{ route('categories.edit', $category->id) }}">modifier</a>

                    <form action="{{ route('categories.destroy') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="id" value="{{ $category->id }}">
                        <button class="btn btn-danger" type="submit">Supprimer</button>
                    </form>

                    @if(!is_null($category->blogs))
                    <h3>liste des articles liés à cette catégorie</h3>

                    <ul>

                        @foreach($category->blogs as $blog)
                            <li>
                            <a href="{{ route('blogs.show', $blog->id) }}">{{ $blog->content }}</a>
                            </li>
                        @endforeach

                    </ul>
                    @endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
