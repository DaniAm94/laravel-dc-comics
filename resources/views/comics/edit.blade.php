@extends('layouts.main')

@section('main-content')
    <div class="container-sm mb-4">

        {{-- Alert --}}
        @include('includes.alert')

        {{-- Form --}}
        @include('includes.comics.form')
    </div>
@endsection

@section('scripts')
    <script>
        @vite('resources/js/preview.js')
    </script>
@endsection
