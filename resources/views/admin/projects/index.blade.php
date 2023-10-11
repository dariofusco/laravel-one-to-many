@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>I Miei Progetti</h1>

        <div class="bg-light my-2">
            <a href="{{ route('admin.projects.create') }}" class="btn btn-success">Nuovo Progetto</a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <td>Nome</td>
                    <td>Tipologia</td>
                    <td>Descrizione</td>
                    <td>Data</td>
                    <td>Immagine</td>
                    <td>GitHub Link</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </thead>

            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->type }}</td>
                        <td>{{ $project->description }}</td>
                        <td>{{ $project->date->format('d/m/Y') }}</td>
                        <td>{{ $project->image }}</td>
                        <td>{{ $project->github_link }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-info">Dettagli</a>
                        </td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('admin.projects.edit', ['project' => $project->id]) }}">Modifica</a>
                        </td>
                        <td>
                            <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Elimina</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>

        <a class="btn btn-primary" href="{{ url('/admin/dashboard') }}">Indietro</a>

    </div>
@endsection
