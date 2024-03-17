@if ($errors->any())
    <div class="alert alert-danger mt-3">
        <h4>Some fields are invalid!</h4>
        {{-- <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul> --}}
    </div>
@endif
