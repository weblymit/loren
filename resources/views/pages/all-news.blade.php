<x-layout.dashboard-layout>
    <div class="p-24">
        <h1 class="pb-4 text-3xl font-black">The News</h1>
        @include('partials._table-allNews')
        <div class="my-12 flex justify-end">
            {{ $news->links('pagination::tailwind') }}
        </div>
    </div>

</x-layout.dashboard-layout>
