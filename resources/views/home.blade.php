<!DOCTYPE html>

<html lang="it">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- FONT AWESOME 6.4.0 -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

        <!-- Adesso stiamo usando yield, e se nelle pagine successive qualcuno mette un titolo, allora il titolo della pagina sarà il titolo scelto, sennò in automatico, di default, il titolo sarà "Laravel Comics" -->
        <title>@yield('title', 'Laravel Comics')</title>
    </head>
    
    <body>
        <!-- Nel body, adesso, andiamo ad includere i partials che avevamo già fatto -->
        @include('partials.header')

        <!-- Adesso, invece di scrivere tutto il codice html, andiamo a scrivere solo la parte che cambia, ovvero il contenuto della pagina -->
        <main>
            @yield('main-content')
        </main>

        <!-- Anche il footer lo includiamo alla fine -->
        @include('partials.footer')
    </body>

</html>