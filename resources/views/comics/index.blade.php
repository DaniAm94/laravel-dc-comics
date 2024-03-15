@extends('layouts.main')

@section('main-content')
    <section id="products">
        <div class="container">
            <h2>Current Series</h2>
            <div class="row row-cols-3 row-gap-5 mb-5 ">
                @foreach ($comics as $comic)
                    <div class="col">
                        <div class="prod-card">
                            <a href="{{ route('comics.show', $comic) }}">
                                <figure class="cover">
                                    <img src="{{ $comic->thumb }}" :alt="comic cover">
                                </figure>
                                <span>{{ $comic->series }}</span>
                            </a>
                            <a class="btn btn-on-card tooltip-parent" href="{{ route('comics.edit', $comic->id) }}">
                                <i class="fa-solid fa-pen-to-square"></i>
                                <span class="my-tooltip">Update</span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $comics->links() }}
            <a href="{{ route('comics.create') }}" class="load-btn">Load More</a>
        </div>
    </section>
@endsection
