@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>{{ $project->name }}</h1>

        <h2>{{ $project->type }}</h2>

        <p>{{ $project->description }}</p>

        <p>{{ $project->date->format('d/m/Y') }}</p>

        <div>
            <img src="{{ asset('/storage/' . $project->image) }}" alt="" class="img-fluid" style="width: 200px">
        </div>

        <a href="{{ $project->github_link }}">GitHub Link</a>

        <div class="d-flex py-3">

            <a class="btn btn-warning" href="{{ route('admin.projects.edit', ['project' => $project->id]) }}">Modifica</a>

            <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mx-3">Elimina</button>
            </form>

        </div>

        <a class="btn btn-primary" href="{{ route('admin.projects.index') }}">Indietro</a>

    </div>
    
@endsection
