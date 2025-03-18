<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Treni oggi</title>
</head>

<body>

    <div class="container">
        <h1 class="text-center text-5xl">Treni odierni</h1>

        <section class="trains">
            @foreach ($trains as $train)
                <div class="train">
                    <h2>{{ $train->company }}</h2>
                    <h3>{{ $train->departure_station }} - {{ $train->arrival_station }}</h3>
                    <p>Partenza: {{ $train->departure_time }}</p>
                    <p>Arrivo: {{ $train->arrival_time }}</p>
                </div>
            @endforeach
        </section>

    </div>

</body>

</html>
