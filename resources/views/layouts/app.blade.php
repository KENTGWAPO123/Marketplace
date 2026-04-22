<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel Marketplace') }}</title>

        <!-- Bulma CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

        <!-- Scripts -->
        @vite(['resources/js/app.js'])
    </head>
    <body class="has-navbar-fixed-top">
        <div class="min-h-screen has-background-light">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <section class="hero is-white is-small shadow-sm">
                    <div class="hero-body">
                        <div class="container">
                            <h1 class="title is-4">
                                {{ $header }}
                            </h1>
                        </div>
                    </div>
                </section>
            @endif

            <!-- Page Content -->
            <main class="section">
                <div class="container">
                    {{ $slot }}
                </div>
            </main>
            
            <footer class="footer">
              <div class="content has-text-centered">
                <p>
                  <strong>Laravel Marketplace</strong> by the 3-person Team.
                </p>
              </div>
            </footer>
        </div>
    </body>
</html>
