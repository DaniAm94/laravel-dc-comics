<footer>
    <div class="footer-top">
        <div class="container">

            <nav class="links-container">
                @foreach (config('links_group') as $item)
                    <div class="links-list">
                        <h3>{{ $item['title'] }}</h3>
                        <ul>
                            @foreach ($item['links'] as $link)
                                <li>
                                    <a href="#">{{ $link['text'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </nav>
            <figure>
                <img src="{{ asset('images/dc-logo-bg.png') }}" alt="big dc logo">
            </figure>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <a href="#" id="register-btn">Sign-Up now!</a>
            <nav>
                <ul>
                    <li>
                        <h3>Follow us</h3>
                    </li>
                    @foreach (config('socials') as $social)
                        <li>
                            <a href="#">
                                <figure>

                                    <img src="{{ asset("images/$social") }}" alt="icona social">
                                </figure>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>
</footer>
