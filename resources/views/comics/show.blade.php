@extends('layouts.main')

@section('cdns')
    {{-- Fontawesome --}}
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css'
        integrity='sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=='
        crossorigin='anonymous' />
@endsection

@section('main-content')
    <section id="show">
        <header class="section-header">
            <div class="container">
                <div class="prod-card-sm">
                    <div class="top-label">Comic book</div>
                    <figure>
                        <img src="{{ $comic->thumb }}" :alt="comic cover">
                    </figure>
                    <div class="bottom-label">view gallery</div>
                </div>
            </div>
        </header>
        <div class="top-info">
            <div class="container">
                <div class="large-side">
                    <div class="d-flex justify-content-between ">
                        <h2><?= $comic['title'] ?></h2>
                        <a class="btn" href="{{ route('comics.edit', $comic->id) }}"><i
                                class="fa-solid fa-pen-to-square"></i></a>
                    </div>
                    <div class="green-bar">
                        <div class="green-info">
                            <span><strong>U.S. Price: </strong><?= $comic->price ?></span>
                            <span><strong>AVAILABLE</strong></span>
                        </div>
                        <button role="button">Check Availability <i class="fas fa-caret-down"></i></button>
                    </div>
                    <p>{{ $comic->description }}</p>
                </div>
                <div class="small-side">
                    <h5>ADVERTISEMENT</h5>
                    <figure>
                        <img src="{{ asset('images/adv.jpg') }}" alt="advertisement image">
                    </figure>
                </div>
            </div>
        </div>
        <div class="bottom-info">
            <div class="container">
                <div class="talents">
                    <h3>Talent</h3>
                    <div class="artists">
                        <strong>Art by:</strong>
                        <p>{{ $comic->artists }}</p>
                    </div>
                    <div class="writers">
                        <strong>Written by:</strong>
                        <p>{{ $comic->writers }}</p>
                    </div>
                </div>
                <div class="specs">
                    <h3>Specs</h3>
                    <div>
                        <strong>Series:</strong>
                        <span class="comic">{{ $comic->series }}</span>
                    </div>
                    <div>
                        <strong>U.S. Price:</strong>
                        <span>{{ $comic->price }}</span>
                    </div>
                    <div>
                        <strong>On Sale Date:</strong>
                        <span>{{ $comic->sale_date }}</span>
                    </div>

                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ul>
                    <li>
                        <a href="#">
                            digital comics
                            <img src="{{ asset('images/pad.png') }}" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            shop dc
                            <img src="{{ asset('images/cards.png') }}" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            comic shop locator
                            <img src="{{ asset('images/locator.png') }}" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            subscriptions
                            <img src="{{ asset('images/shirt.png') }}" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>
@endsection
