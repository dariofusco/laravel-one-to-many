@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>Nuovo Progetto</h1>

        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
            @csrf()

            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Tipologia</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" name="type">
                @error('type')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description"></textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Data</label>
                <input type="date" class="form-control @error('date') is-invalid @enderror" name="date">
                @error('date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Immagine</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">GitHub Link</label>
                <input type="text" class="form-control @error('github_link') is-invalid @enderror" name="github_link">
                @error('github_link')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <a class="btn btn-primary" href="{{ route('admin.projects.index') }}">Indietro</a>

            <button class="btn btn-primary">Crea</button>

        </form>

    </div>
@endsection
