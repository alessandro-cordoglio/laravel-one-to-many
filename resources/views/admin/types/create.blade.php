@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Aggiungi una tipologia</h1>
    </div>

    <form class="p-5" action="{{route('admin.types.store')}}" method="POST">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    @csrf
        <label for="name" class="form-label">Nome</label>
        <input type="text" id="name" class="form-control" name="name" style="width:20rem" value="{{old('name')}}">
        <button type="submit" class="my-5 btn btn-success">Crea</button>
    </form>
@endsection