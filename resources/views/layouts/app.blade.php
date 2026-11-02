<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <meta
        name="csrf-token"
        content="{{ csrf_token() }}"
    >

    <title>
        {{ $title ?? 'perpusqu' }} — School Library
    </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-50 text-slate-900 antialiased">

    <div
        x-data="{ sidebarOpen: false }"
        class="min-h-screen"
    >

        {{-- Mobile backdrop --}}
        <div
            x-show="sidebarOpen"
            x-transition.opacity
            @click="sidebarOpen = false"
            class="fixed inset-0 z-40 bg-slate-950/40 lg:hidden"
            x-cloak
        ></div>

        {{-- Sidebar --}}
        @include('layouts.sidebar')

        {{-- Main --}}
        <div class="lg:pl-72">

            {{-- Top Navigation --}}
            @include('layouts.navigation')

            {{-- Page Content --}}
            <main class="p-4 sm:p-6 lg:p-8">
                {{ $slot ?? '' }}

                @yield('content')
            </main>

        </div>
    </div>

</body>
</html>