@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ route('categories.index') }}" class="btn btn-success" title="Gérer les catégories">Gérer les catégories</a>
                    
                    <a href="{{ route('blogs.index') }}" class="btn btn-success" title="Gérer les articles">Gérer les articles</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
