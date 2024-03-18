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
                            <div class="d-flex btn-on-card align-item-center">
                                <a class="update-btn tooltip-parent d-flex align-items-center justify-content-center"
                                    href="{{ route('comics.edit', $comic->id) }}">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                    <span class="my-tooltip">Update</span>
                                </a>
                                <form action="{{ route('comics.destroy', $comic->id) }}"
                                    class=" tooltip-parent d-flex align-items-center delete-form" method="POST"
                                    data-title="{{ $comic->title }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn trash-btn"><i class="fa-solid fa-trash-can"></i></button>
                                    <span class="my-tooltip">Delete</span>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- Modal --}}
                @include('includes.comics.modal')
            </div>
            {{-- Pagination --}}
            {{ $comics->links() }}
            {{-- Add comic button --}}
            <a href="{{ route('comics.create') }}" class="load-btn">Load More</a>
        </div>
    </section>
@endsection

@section('scripts')
    @vite('resources/js/delete-confirmation.js')
@endsection
