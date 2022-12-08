@props(['title', 'img', 'content'])
<div class="">
    <div class="flex flex-col items-center md:flex-row md:max-w-xl space-x-3  ">
        <img class="" src="img/{{ $img }}" alt="">
        <div class="flex flex-col justify-between p-4 leading-normal">
            <h5 class="mb-2 text-lg font-bold tracking-tight ">{{ $title }}</h5>
            <p class="mb-3 font-normal text-sm ">{{ $content }}</p>
        </div>
    </div>
</div>
