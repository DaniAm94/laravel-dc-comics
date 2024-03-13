@extends('layouts.main')

@section('main-content')
    <section id="products">
        <div class="container">
            <h2>Current Series</h2>
            <div class="card-container">
                @foreach ($comics as $comic)
                    <div class="prod-card">
                        <a href="{{ route('comic.show', $comic) }}">
                            <figure>
                                <img src="{{ $comic->thumb }}" :alt="comic cover">
                            </figure>
                            <span>{{ $comic->series }}</span>
                        </a>
                    </div>
                @endforeach
            </div>
            <button role="button" id="load-btn">Load More</button>
        </div>
    </section>
@endsection
