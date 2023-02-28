<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME')}} | @yeld('title')</title>
    @yield('cdns')

    @vite('resources/js/app.js')
</head>
<body>
    <main>
    <div class="container">
        <div class="d-flex flex-wrap justify-content-between">
            @foreach ($movies as $movie )
                <div>
                    <div class="card my-2">
                        <h5 class="card-title">{{ $movie['original_title']}}</h5>
                            <p class="card-text ">Nationality: {{ $movie['nationality']}}</p>
                        <p class="card-text ">Date of release: {{ $movie['date']}}</p>
                        <p class="card-text ">Vote: {{ $movie['vote']}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </main>
    @yield('scripts')
    
</body>
</html>