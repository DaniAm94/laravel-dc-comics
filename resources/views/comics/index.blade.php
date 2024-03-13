@extends('layouts.main')

@section('main-content')
    <section id="products">
        <div class="container">
            <h2>Current Series</h2>
            <div class="row row-cols-3 row-gap-5 mb-5 ">
                @foreach ($comics as $comic)
                    <div class="col">
                        <div class="prod-card">
                            <a href="{{ route('comic.show', $comic) }}">
                                <figure class="cover">
                                    <img src="{{ $comic->thumb }}" :alt="comic cover">
                                </figure>
                                <span>{{ $comic->series }}</span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <button role="button" id="load-btn">Load More</button>
        </div>
    </section>
@endsection
