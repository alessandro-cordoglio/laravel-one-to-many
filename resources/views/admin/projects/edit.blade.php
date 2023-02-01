@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Modifica "{{$project->title}}"</h1>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="p-5" action="{{route('admin.projects.update', $project)}}" method="POST">
    @csrf
    @method('PUT')
        <label for="title" class="form-label">Titolo</label>
        <input type="text" id="title" class="form-control" name="title" style="width:20rem" value="{{old('title',$project->title)}}">

        <label for="client" class="form-label mt-4">Nome Cliente</label>
        <input type="text" id="client" class="form-control" name="client" style="width:20rem" value="{{old('client',$project->client)}}">

        <label for="description" class="form-label mt-4">Descrizione Progetto</label>
        <textarea class="form-control" name="description" id="description" style="width: 30rem; height:10rem">{{old('description', $project->description)}}</textarea>

        <button type="submit" class="my-5 btn btn-success">Modifica</button>
    </form>
@endsection