<div class="bg-[#FFF] fixed w-full">
    <div class="bg-[#FBFBFF] md:pr-24 md:pl-24 py-3">
        <div class="flex justify-between">
            <div class="md:pb-2 ">
                <a href="/"><img class="md:w-24" src="./img/logo.svg" alt=""></a>
            </div>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="uppercase flex space-x-10 font-semibold">
                    <a href="#section-news" class="block">News</a>
                    <a href="#section-features" class="block">Features</a>
                    <a href="#section-about" class="block">About</a>
                    <a href="{{ route('contactpage') }}" class="block">Contact Us</a>
                </ul>
            </div>
        </div>
    </div>
</div>
