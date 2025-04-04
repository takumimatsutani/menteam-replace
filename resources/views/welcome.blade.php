<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- styles -->
        <style>
            body {
                font-family: 'Instrument Sans', sans-serif;
                background-color: #FDFDFC;
                color: #1b1b18;
                display: flex;
                align-items: center;
                justify-content: center;
                min-height: 100vh;
                margin: 0;
            }
            @media (prefers-color-scheme: dark) {
                body {
                    background-color: #0a0a0a;
                    color: #f3f4f6;
                }
            }
        </style>
    </head>
    <body>
        <div class="max-w-4xl mx-auto text-center p-6">
            <h1 style="font-size: 2.25rem; font-weight: 700; margin-bottom: 1.5rem;">Welcome to {{ config('app.name', 'Laravel') }}</h1>
            
            <div style="margin-top: 2rem;">
                @if (Route::has('login'))
                    <div style="display: flex; gap: 1rem; justify-content: center;">
                        @auth
                            <a href="{{ url('/dashboard') }}" style="background-color: #2563eb; color: white; padding: 0.5rem 1rem; border-radius: 0.5rem; text-decoration: none;">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" style="background-color: #2563eb; color: white; padding: 0.5rem 1rem; border-radius: 0.5rem; text-decoration: none;">Login</a>
                            
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" style="border: 1px solid #d1d5db; padding: 0.5rem 1rem; border-radius: 0.5rem; text-decoration: none;">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </body>
</html>