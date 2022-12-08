<x-layout.main-layout>
    <div class="w-full">
        {{-- header --}}
        <div class="" id="header">
            <x-sections.header-section />
        </div>
        {{-- news --}}
        <div class="bg-[#FFFFFF]" id="section-news">
            <x-sections.news :news='$news' />
        </div>
        {{-- features --}}
        <div class="bg-[#FFFFFF]" id="section-features">
            <x-sections.features />
        </div>
        {{-- about --}}
        <div class="bg-[#F5F6FF] pb-20" id="section-about">
            <x-sections.about />
        </div>
        {{-- join the team --}}
        <div class="bg-[#DEDFF8]">
            <x-sections.join-team id="section-team" />
        </div>
    </div>
</x-layout.main-layout>
