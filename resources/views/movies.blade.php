@extends ('layouts.app')

@section('main-content')
    <section class="movies-container">
        <div class="container">
            <div class="movies">
                <p>{{ $title }}</p>
                @foreach ($movies as $movie)
                    <p>{{ $movie }}</p>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@section('page-title', 'Movies | DC')
