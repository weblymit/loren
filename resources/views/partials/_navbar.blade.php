@php
    $styleLink = 'hover:text-blue-600 hover:underline underline-offset-4';
@endphp
<nav class="bg-gray-100 py-4 shadow-lg shadow-blue-100">
    <div class="container flex items-center justify-between">
        <div class="pl-5" id="logo">
            <a class="font-semibold uppercase text-blue-500" href="/dashboard">
                Intime<span class="text-blue-800">Dashboard</span>
            </a>
        </div>
        <div class="flex items-center space-x-5 font-semibold uppercase " id="navitem">
            @auth
                <a class="hover:text-blue-600 hover:underline underline-offset-4" href="/">Home</a>
                <x-btn-logout />
                <span>{{ Auth::user()->name }}</span>
            @endauth
        </div>
    </div>
</nav>
