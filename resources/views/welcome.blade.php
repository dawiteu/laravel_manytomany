@extends('layouts.index')

@section('content')
    <h1>Bienvenu sur le site: </h1>

    <div class="container row row-cols-4 mx-auto ">{{-- bg-danger  --}}
        
        @foreach ($arts as $art)

            <div class="col my-2" style="width: 100%;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$art->titre }} </h5>
                            <p class="card-text">
                                {{ substr($art->description, 0, 70) }}... 
                                <a href="{{route('show.article', $art->id)}}" class="card-link">Lire plus</a>
                            </p>
                            <p>
                                TAGS : <br/> 
                                @if (count($art->tags) <= 0)
                                    <span class="text-secondary">
                                        pas de tags pour cet article. 
                                    </span>
                                @else
                                    @foreach ($art->tags as $tag)
                                        <a href="{{route('show.tag', $tag->id)}}">
                                            <span class="text-primary">{{ "#" .$tag->nom }}</span> 
                                        </a> 
                                    @endforeach
                                @endif
                            </p>
                    </div>
                </div>
            </div>

        @endforeach
    </div>
@endsection