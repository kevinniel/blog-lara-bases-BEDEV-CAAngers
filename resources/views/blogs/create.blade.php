@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Création d'un article</div>

                <div class="card-body">

                    <a href="{{ route('home') }}" class="btn btn-danger" title="Retour a la home">Retour a la home</a>

                    <form action="{{ route('blogs.store') }}" method="POST">
                        @csrf
                        <label for="name">contenu</label>
                        <input id="name" type="text" name="content">

                        <select name="category_id">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>

                        <br>
                        <button type="submit">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
