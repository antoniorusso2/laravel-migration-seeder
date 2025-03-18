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
                <div class="train card">
                    <h2 class="font-bold text-2xl">{{ $train->company }}</h2>
                    <h3 class="text-xl underline underline-offset-3">{{ $train->departure_station }} -
                        {{ $train->arrival_station }}</h3>
                    <div class="times my-3">
                        <p class="font-thin">Partenza: {{ $train->departure_time }}</p>
                        <p class="font-thin">Arrivo: {{ $train->arrival_time }}</p>
                    </div>

                    <div class="available_seats">
                        <p class="font-thin">Posti disponibili: {{ $train->capacity - $train->reserved_seats }}</p>
                    </div>
                </div>
            @endforeach
        </section>

    </div>

</body>

</html>
