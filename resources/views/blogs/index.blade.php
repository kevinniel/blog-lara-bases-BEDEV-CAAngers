@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Articles</div>

                <div class="card-body">

                    <a href="{{ route('home') }}" class="btn btn-secondary" title="Retour sur la page d'accueil">Retour sur la page d'accueil</a>

                    <br>

                    <a href="{{ route('blogs.create') }}" class="btn btn-success" title="Ajouter un article">Ajouter un article</a>
                    
                    <br>

                    <ul>
                        @foreach($blogs as $blog)
                            <li>
                                <a href="{{ route('blogs.show', $blog->id) }}" title="{{ $blog->content }}">{{ $blog->content }}</a>
                            </li>
                        @endforeach
                    </ul>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
