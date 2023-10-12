@extends('layouts.app')
@section('content')
    <div class="jumbotron p-5 mb-4 bg-light rounded-3">
        <div class="container">
            <h1 class="py-3">I Miei Progetti</h1>
            <div class="row">
                @foreach ($projects as $project)
                    <div class="col-3">
                        <div class="card text-center" style="width: 18rem;">
                            <img src="{{ asset('/storage/' . $project->image) }}" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">{{ $project->name }}<span
                                        class="badge text-bg-info mx-2">{{ $project->type->name }}</span></h5>
                                <p class="card-text">{{ $project->description }}</p>
                                <p class="card-subtitle mb-2 text-body-secondary">{{ $project->date->format('d/m/Y') }}</p>
                                <a class="card-link" href="{{ $project->github_link }}">GitHub Link</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
