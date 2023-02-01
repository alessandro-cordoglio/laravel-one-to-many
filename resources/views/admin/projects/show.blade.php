@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>{{$project->title}}</h1>
        <h3>Tipologia : {{$project->type?->name ? $project->type->name : 'Nessuna tipologia' }}</h3>
        @if ($project->cover_image)
            <div>
                <img src="{{asset("storage/$project->cover_image")}}" alt="{{$project->title}}">
            </div>
        @endif
        <p>{{$project->description}}</p>
    </div>

@endsection