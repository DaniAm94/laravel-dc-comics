@extends('layouts.main')

@section('main-content')
    <div class="container-sm mb-4">

        <form class="row g-3">
            <div class="col-md-6">
                <label for="input-title" class="form-label">Title</label>
                <input name="title" type="text" class="form-control" id="input-title">
            </div>
            <div class="col-md-6">
                <label for="input-series" class="form-label">Series</label>
                <input name="series" type="text" class="form-control" id="input-series">
            </div>
            <div class="col-12">
                <label for="input-description" class="form-label">Description</label>
                <textarea name="description" class="form-control" id="input-description" cols="30" rows="5"></textarea>
            </div>
            <div class="col-12">
                <label for="input-thumb" class="form-label">Thumb</label>
                <input type="url" name="thumb" class="form-control" id="input-thumb" placeholder="http...">
            </div>
            <div class="col-md-6">
                <label for="input-price" class="form-label">Price</label>
                <input type="text" name="price" class="form-control" id="input-price">
            </div>
            <div class="col-md-4">
                <label for="input-type" class="form-label">Type</label>
                <select id="input-type" name="type" class="form-select">
                    <option selected>Choose...</option>
                    <option value="graphic novel">Graphic Novel</option>
                    <option value="comic book">Comic Book</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">Sale date</label>
                <input type="date" class="form-control" id="inputZip">
            </div>
            <div class="col-md-6">
                <label class="form-label" for="input-artists">Artists</label>
                <textarea name="artists" class="form-control" id="input-artists" cols="30" rows="3"></textarea>
            </div>
            <div class="col-md-6">
                <label class="form-label" for="input-writers">Writers</label>
                <textarea name="writers" class="form-control" id="input-writers" cols="30" rows="3"></textarea>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <button type="submit" class="add-btn">Add</button>
                <button type="reset" class="reset-btn bg-warning">Reset</button>
            </div>
        </form>
    </div>
@endsection
