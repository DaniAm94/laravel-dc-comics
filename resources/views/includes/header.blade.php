<header id="main-header">
    <div class="container">

        <a class="header-logo" href="{{ route('home') }}">
            <figure><img src="{{ asset('images/dc-logo.png') }}" alt="DC logo"></figure>
        </a>
        <nav>
            <ul>
                @foreach (config('header') as $item)
                    <li>
                        <a href="{{ route("{$item['text']}") }}"
                            class="{{ Route::is("{$item['text']}") ? 'active' : '' }}"><?= strtoupper($item['text']) ?></a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>
