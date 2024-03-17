{{-- Se sono in edit --}}
@if ($comic->exists)
    <form class="row g-3" action="{{ route('comics.update', $comic->id) }}" method="POST">
        @method('PUT')

        {{-- Se sono in create --}}
    @else
        <form class="row g-3" action="{{ route('comics.store') }}" method="POST">
@endif

@csrf
<div class="col-md-6">
    <label for="input-title" class="form-label">Title</label>
    <input name="title" type="text"
        class="form-control @error('title') is-invalid @elseif(old('title')) is-valid  @enderror"
        id="input-title" value="{{ old('title', $comic->title) }}">
    @error('title')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @else
        <div class="form-text">
            Insert the title
        </div>
    @enderror
</div>
<div class="col-md-6">
    <label for="input-series" class="form-label">Series</label>
    <input name="series" type="text"
        class="form-control @error('series') is-invalid @elseif(old('series')) is-valid  @enderror"
        id="input-series" value="{{ old('series', $comic->series) }}">
    @error('series')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @else
        <div class="form-text">
            Insert the series
        </div>
    @enderror
</div>
<div class="col-12">
    <label for="input-description" class="form-label">Description</label>
    <textarea name="description" class="form-control" id="input-description" cols="30" rows="5">{{ old('description', $comic->description) }}</textarea>
    <div class="form-text">
        Insert a description
    </div>
</div>
<div class="col-11 d-flex flex-column justify-content-center">
    <label for="input-thumb" class="form-label">Thumb</label>
    <input type="url" name="thumb"
        class="form-control @error('thumb') is-invalid @elseif(old('thumb')) is-valid  @enderror"
        id="input-thumb" placeholder="http..." value="{{ old('thumb', $comic->thumb) }}">
    @error('thumb')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @else
        <div class="form-text">
            Insert the thumb's url
        </div>
    @enderror
</div>
<div class="col-1 d-flex justify-content-center align-items-center">
    <figure class="mb-0" id="preview-container">
        <img src="{{ $comic->thumb ?? 'https://media.istockphoto.com/id/1147544807/vector/thumbnail-image-vector-graphic.jpg?s=612x612&w=0&k=20&c=rnCKVbdxqkjlcs3xH87-9gocETqpspHFXu5dIGB4wuM=' }}"
            alt="comic cover" class="img-fluid" id="preview">
    </figure>
</div>
<div class="col-md-6">
    <label for="input-price" class="form-label">Price</label>
    <input type="text" name="price"
        class="form-control @error('price') is-invalid @elseif(old('price')) is-valid  @enderror"
        id="input-price" value="{{ old('price', $comic->price) }}" placeholder="0.00">
    @error('price')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @else
        <div class="form-text">
            Insert the price
        </div>
    @enderror
</div>
<div class="col-md-4">
    <label for="input-type" class="form-label">Type</label>
    <select id="input-type" name="type"
        class="form-select @error('type') is-invalid @elseif(old('type')) is-valid  @enderror">
        <option selected>Choose...</option>
        <option @if (old('type', $comic->type) === 'graphic novel') selected @endif value="graphic novel">Graphic Novel</option>
        <option @if (old('type', $comic->type) === 'comic book') selected @endif value="comic book">Comic Book</option>
    </select>
    @error('type')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @else
        <div class="form-text">
            Choose a type
        </div>
    @enderror
</div>
<div class="col-md-2">
    <label for="input-date" class="form-label">Sale date</label>
    <input type="date" name="sale_date"
        class="form-control @error('sale_date') is-invalid @elseif(old('sale_date')) is-valid  @enderror"
        id="input-date" value="{{ old('sale_date', $comic->sale_date ?? date('Y-m-d')) }}">
    @error('sale_date')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @else
        <div class="form-text">
            Select a valid date
        </div>
    @enderror
</div>
<div class="col-md-6">
    <label class="form-label" for="input-artists">Artists</label>
    <textarea name="artists"
        class="form-control @error('artists') is-invalid @elseif(old('artists')) is-valid  @enderror"
        id="input-artists" cols="30" rows="3">{{ old('artists', $comic->artists) }}</textarea>
    @error('artists')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @else
        <div class="form-text">
            Insert the artists
        </div>
    @enderror
</div>
<div class="col-md-6">
    <label class="form-label" for="input-writers">Writers</label>
    <textarea name="writers"
        class="form-control @error('writers') is-invalid @elseif(old('writers')) is-valid  @enderror"
        id="input-writers" cols="30" rows="3">{{ old('writers', $comic->writers) }}</textarea>
    @error('writers')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @else
        <div class="form-text">
            Insert the writers
        </div>
    @enderror
</div>
<div class="col-12 d-flex justify-content-center">
    <button type="submit" class="add-btn">Save</button>
    <button type="reset" class="reset-btn bg-warning">Reset</button>
</div>
</form>
