<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel Marketplace') }}</title>

        <!-- Bulma CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">

        <!-- Scripts -->
        @vite(['resources/js/app.js'])
    </head>
    <body class="has-background-light">
        <section class="hero is-fullheight">
            <div class="hero-body">
                <div class="container">
                    <div class="columns is-centered">
                        <div class="column is-5-tablet is-4-desktop is-3-widescreen">
                            <div class="has-text-centered mb-5">
                                <a href="/" class="is-size-3 has-text-weight-bold has-text-dark">
                                    Marketplace
                                </a>
                            </div>
                            <div class="box">
                                {{ $slot }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
