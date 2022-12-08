<x-layout.dashboard-layout>
    <div class="p-24">
        <h1 class="mt-10 text-4xl font-black underline underline-offset-8">
            Welcome <span class="text-blue-500">{{ Auth::user()->name }}</span> on your Dashboard
        </h1>
        <div class="py-8 underline underline-offset-2">
            <a href="{{ route('news.create') }}">Add a News</a>
            <a class="block pt-2 " href="{{ route('news.all') }}">La liste des post</a>

        </div>
    </div>
</x-layout.dashboard-layout>
