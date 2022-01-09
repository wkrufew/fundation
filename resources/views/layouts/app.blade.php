<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        {{-- CONSULTA DE LOS DATOS DE LA EMPRESA --}}
            @php
            $empresas = DB::table('empresas')->first();
            @endphp
        {{-- FIN DE LA CONSULTA --}} 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- SEO  --}}
        <meta name="robots" content= "index, follow">
        <meta name="description" content= "Es una entidad de ayuda a la clase marginal de nuestro país, no persigue fines de lucro" />

        <!-- Open Graph data -->
        <meta property="og:title" content="{{ $empresas->nombre }}" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="{{ config('app.url', 'Fundecom') }}" />
        <meta property="og:image" content="{{Storage::url($empresas->logo )}}" />
        <meta property="og:description" content="Es una entidad de ayuda a la clase marginal de nuestro país, no persigue fines de lucro" />
        <title>{{ config('app.name', 'Fundecom') }}</title>
        <link rel="shortcut icon" class="rounded-full" href="{{asset('fotos/logo_fundation2.png')}}" type="image/x-icon">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
       
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="https://kit.fontawesome.com/a501d340ea.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
            
        <script>

            $('a[href*="#"]')
            // Remove links that don't actually link to anything
            .not('[href="#"]')
            .not('[href="#0"]')
            .click(function(event) {
                // On-page links
                if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
                && 
                location.hostname == this.hostname
                ) {
                // Figure out element to scroll to
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    $('html, body').animate({
                    scrollTop: target.offset().top
                    }, 1000, function() {
                    // Callback after animation
                    // Must change focus!
                    var $target = $(target);
                    $target.focus();
                    if ($target.is(":focus")) { // Checking if the target was focused
                        return false;
                    } else {
                        $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                        $target.focus(); // Set focus again
                    };
                    });
                }
                }
                });
        </script>

        
    </body>
</html>
