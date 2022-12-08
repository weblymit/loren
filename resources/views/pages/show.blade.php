<x-layout.main-layout>
    <div class="py-20 px-20 my-14 ">
        <div class="flex space-x-4">
            <img alt="{{ $news->title }}" class="max-w-[220px]" src="{{ asset('storage/' . $news->img) }}">
        </div>
        <div class="pt-8 space-y-2">
            <h2 class="text-xl font-bold"> {{ $news->title }} </h2>
            <p> {{ $news->content }} </p>
        </div>
        @auth
            @if (Auth::user()->is_admin == 1)
                <div class="pt-6">
                    <x-btn-delete :news="$news" />
                    <a class="bg-green-700 rounded-lg p-2" href="{{ $news->id }}/edit">Edit</a>
                </div>
            @endif
        @endauth
    </div>
</x-layout.main-layout>
