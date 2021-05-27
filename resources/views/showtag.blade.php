@extends('layouts.index')

@section('content')
    <h1>
        Tout les articles sous le tag: <br/> 
        <span class="text-danger">{{ $tag->nom }}</span> <br/>
        Corresspondances: {{ $tag->article->count() }} </h1>

        <ol>
            @foreach ($tag->article as $art)    
            <li>
                <a href="{{ route('show.article', $art->id)}}" class="text-dark">
                    {{ $art->titre }}
                </a> 
            </li>
            @endforeach
        </ol>
        
        
@endsection