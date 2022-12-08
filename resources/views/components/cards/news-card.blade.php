@props(['img', 'title', 'content'])
<div class="max-w-xs shadow-2xl rounded-3xl text-[#53565A]">
    <div class="">
        <img alt="{{ $title }}" class="" src="{{ asset('storage/' . $img) }}">
    </div>
    <div class="min-h-[240px] p-2">
        <p class="pb-4 text-xl font-bold ">{{ $title }}</p>
        <p class="text-sm">{{ Str::substr($content, 0, 100) }}...</p>
        <div class="py-8">
            <a href="" class="bg-[#324F87] mt-6 w-32 py-3 px-5 font-semibold rounded-3xl text-white">Read More</a>
        </div>
    </div>
</div>
