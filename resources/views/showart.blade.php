@extends('layouts.index')

@section('content')

    <h1>{{ $art->titre }} </h1>
    <p>{{ $art->description }} </p>
    <p>
        <div class="row">
            <div class="col-10">
                TAGS : <br/> 
                @if (count($art->tags) <= 0)
                    <span class="text-secondary">
                        pas de tags pour cet article. 
                    </span>
                @else
                    @foreach ($art->tags as $tag)
                        <a href="{{route('show.tag', $tag->id)}}">
                            <span class="text-dark">{{ "#" .$tag->nom }}</span> 
                        </a> 
                    @endforeach
                @endif
            </div>
            <div class="col-2">
                <button class="btn btn-secondary" onclick="javascript:window.history.back();">Retour</button>
            </div>
        </div>
    </p>
@endsection