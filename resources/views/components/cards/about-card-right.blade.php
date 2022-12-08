@props(['title', 'img1', 'img2', 'content'])
<div class="flex pl-24 gap-16">
    <div class="">
        <img src="img/{{ $img2 }}" class="w-96" alt="">
    </div>
    <div class="flex flex-col items-center md:flex-row md:max-w-xl space-x-3  ">
        <img class="pb-32" src="img/{{ $img1 }}" alt="">
        <div class="flex flex-col justify-center p-4 leading-normal max-w-md">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $title }}</h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $content }}</p>
        </div>
    </div>
</div>
