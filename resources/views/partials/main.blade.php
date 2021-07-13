<div class="container">
    <section class="comics">
        @foreach ($comics as $comic)
            <div class="comic">
                <div class="comic-poster">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                </div>
                <div class="comic-title">
                    <h5>{{ $comic['series'] }}</h5>
                </div>
            </div>
        @endforeach
    </section>
</div>