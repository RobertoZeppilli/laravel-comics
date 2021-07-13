@extends('layouts.app')

@section('main-content')
    <div class="container">
        <section class="comics">
            <div class="comics-container">
                @include ('partials.comics')
            </div>
            <div class="flag read">
                <a href="">read more</a>
            </div>
        </section>
    </div>
@endsection