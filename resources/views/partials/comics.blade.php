@foreach ($comics as $comic)
    <div class="comic">
        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
        <div class="comic-title">
            <h5>{{ $comic['series'] }}</h5>
        </div>
    </div>
@endforeach