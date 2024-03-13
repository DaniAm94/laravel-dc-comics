@extends('layouts.main')

@section('main-content')
    <section id="products">
        <div class="container">
            <h2>Current Series</h2>
            <div class="card-container">
                @foreach (config('comics') as $comic)
                    <div class="prod-card">
                        <a href="{{ route('comic', $loop->index) }}">
                            <figure>
                                <img src="{{ $comic['thumb'] }}" :alt="comic cover">
                            </figure>
                            <span>{{ $comic['series'] }}</span>
                        </a>
                    </div>
                @endforeach
            </div>
            <button role="button" id="load-btn">Load More</button>
        </div>
    </section>
@endsection
