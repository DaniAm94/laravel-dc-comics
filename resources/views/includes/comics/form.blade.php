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
    <input name="title" type="text" class="form-control" id="input-title" value="{{ old('title', $comic->title) }}">
</div>
<div class="col-md-6">
    <label for="input-series" class="form-label">Series</label>
    <input name="series" type="text" class="form-control" id="input-series"
        value="{{ old('series', $comic->series) }}">
</div>
<div class="col-12">
    <label for="input-description" class="form-label">Description</label>
    <textarea name="description" class="form-control" id="input-description" cols="30" rows="5">{{ old('description', $comic->description) }}</textarea>
</div>
<div class="col-11 d-flex flex-column justify-content-center">
    <label for="input-thumb" class="form-label">Thumb</label>
    <input type="url" name="thumb" class="form-control" id="input-thumb" placeholder="http..."
        value="{{ old('thumb', $comic->thumb) }}">
</div>
<div class="col-1 d-flex justify-content-center align-items-center">
    <figure class="mb-0" id="preview-container">
        <img src="{{ $comic->thumb ?? 'https://media.istockphoto.com/id/1147544807/vector/thumbnail-image-vector-graphic.jpg?s=612x612&w=0&k=20&c=rnCKVbdxqkjlcs3xH87-9gocETqpspHFXu5dIGB4wuM=' }}"
            alt="comic cover" class="img-fluid" id="preview">
    </figure>
</div>
<div class="col-md-6">
    <label for="input-price" class="form-label">Price</label>
    <input type="text" name="price" class="form-control" id="input-price" value="{{ old('price', $comic->price) }}"
        placeholder="0.00">
</div>
<div class="col-md-4">
    <label for="input-type" class="form-label">Type</label>
    <select id="input-type" name="type" class="form-select">
        <option selected>Choose...</option>
        <option @if (old('type', $comic->type) === 'graphic novel') selected @endif value="graphic novel">Graphic Novel</option>
        <option @if (old('type', $comic->type) === 'comic book') selected @endif value="comic book">Comic Book</option>
    </select>
</div>
<div class="col-md-2">
    <label for="input-date" class="form-label">Sale date</label>
    <input type="date" name="sale_date" class="form-control" id="input-date"
        value="{{ old('sale_date', $comic->sale_date ?? date('Y-m-d')) }}">
</div>
<div class="col-md-6">
    <label class="form-label" for="input-artists">Artists</label>
    <textarea name="artists" class="form-control" id="input-artists" cols="30" rows="3">{{ old('artists', $comic->artists) }}</textarea>
</div>
<div class="col-md-6">
    <label class="form-label" for="input-writers">Writers</label>
    <textarea name="writers" class="form-control" id="input-writers" cols="30" rows="3">{{ old('writers', $comic->writers) }}</textarea>
</div>
<div class="col-12 d-flex justify-content-center">
    <button type="submit" class="add-btn">Save</button>
    <button type="reset" class="reset-btn bg-warning">Reset</button>
</div>
</form>
