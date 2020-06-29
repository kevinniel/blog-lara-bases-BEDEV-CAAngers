@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Modification d'un article</div>

                <div class="card-body">

                    <a href="{{ route('home') }}" class="btn btn-danger" title="Retour a la home">Retour a la home</a>
                    <form action="{{ route('blogs.update', $blog->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <label for="name">Contenu</label>
                        @if(!is_null($blog->content))
                            <input id="name" type="text" name="content" value="{{ $blog->content }}">
                        @else
                            <input id="name" type="text" name="content">
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
