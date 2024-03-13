<header id="main-header">
    <div class="container">

        <a class="header-logo" href="{{ route('home') }}">
            <figure><img src="{{ asset('images/dc-logo.png') }}" alt="DC logo"></figure>
        </a>
        <nav>
            <ul>
                @foreach (config('header') as $item)
                    <li>
                        <a href="{{ route("{$item['name']}") }}"
                            class="{{ Route::is("{$item['name']}") ? 'active' : '' }}"><?= strtoupper($item['text']) ?></a>
                    </li>
                @endforeach
            </ul>
        </nav>
        <form action="{{ route('comics.index') }}" method="GET">
            <div class="input-group">
                <input type="search" class="form-control" placeholder="Search" name="search"
                    value="{{ $search ?? '' }}">
                <button class="btn"><i class="fa-brands fa-searchengin"></i></button>
            </div>
        </form>
    </div>
</header>
