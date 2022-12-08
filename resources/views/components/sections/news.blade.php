@props(['news'])
<div class="p-24">
    <div class="text-center">
        <div class="">
            <h2 class="text-[45px] font-bold text-center items-center pb-2">
                Latest News
            </h2>
            <p class="w-2/4 mx-auto">Blockchain is a decentralized technological system, ranging from digital currencies
                to
                providing innovative
                solutions to how an enterprise is managed in the digital world.</p>
        </div>
        <div class="md:flex md:pt-16 md:gap-5 md:pl-44 space-y-5 md:space-y-0">
            @foreach ($news as $post)
                <a href="news/{{ $post->id }}">
                    <x-cards.news-card :content="$post->content" :title="$post->title" :img="$post->img" />
                </a>
            @endforeach
        </div>
    </div>
</div>
