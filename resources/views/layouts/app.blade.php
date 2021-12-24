<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}

        <title>{{ $title ?? config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        {{-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">  --}}

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-200">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
            @endisset

            <!-- Page Content -->
            <main class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                @php
                    $alertSessionTheme = [
                        'alert_success' => 'green',
                        'alert_error'   => 'red',
                        'alert_info'    => 'blue',
                        'alert_warning' => 'orange'
                    ];
                @endphp
                @foreach ($alertSessionTheme as $type => $theme)
                    @if (session($type))
                        <div class="bg-{{ $theme }}-100 border-l-4 border-{{ $theme }}-500 text-{{ $theme }}-700 p-4" role="alert">
                            <p class="m-0">{{ session($type) }}</p>
                        </div>
                    @endif
                @endforeach
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
