@extends ("layouts.public")


@section('content')
    <div class="container">
        <div class="row">
            @foreach($movies as $movie)

                <div>
                    <p><strong>Title:</strong> {{ $movie['title'] }}</p>
                    <p><strong>Original Title:</strong>{{ $movie['original_title'] }}</p>
                    <p><strong>Nationality:</strong>{{ $movie['nationality'] }}</p>
                    <p><strong>Date:</strong>{{ $movie['date'] }}</p>
                    <p><strong>Vote:</strong>{{ $movie['vote'] }}</p>
                </div>

            @endforeach     
        </div>
    </div>
@endsection
