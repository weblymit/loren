<x-layout.dashboard-layout>
    <div class="p-24 ">
        <h1 class="pt-10 pb-10 text-4xl font-bold">Add a News</h1>
        <form action="{{ route('news.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="max-w-md">
                {{-- title --}}
                <input class="block w-full rounded-lg border-gray-400 p-1" name="title" placeholder="Title" type="text"
                    value="{{ old('title') }}">
                <x-error-msg name="title" />
                {{-- content --}}
                <textarea class="mt-5 block w-full rounded-lg border-gray-400 p-1" cols="30" name="content"
                    placeholder="Your content ...." rows="10">{{ old('content') }}</textarea>
                <x-error-msg name="content" />
                {{-- image  --}}
                <div class="pt-2">
                    <label for="">Image :</label>
                    <input class="block" id="" name="img" type="file">
                    <x-error-msg name="img" />
                </div>
                <button class="bg-[#324F87] mt-6 w-32 py-3 rounded-3xl text-white" type="submit">Submit</button>
            </div>

        </form>

    </div>

</x-layout.dashboard-layout>
