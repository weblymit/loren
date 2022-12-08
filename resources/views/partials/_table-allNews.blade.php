@php
    $index = 1;
@endphp
<div class="overflow-x-auto ">
    <table class="table w-full ">
        <!-- head -->
        <thead>
            <tr>
                <th></th>
                <th>Title</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <!-- row 1 -->
            @forelse ($news as $post)
                <tr>
                    <th>{{ $index++ }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->created_at->format('d/m/Y') }}</td>
                </tr>
            @empty
                <tr>
                    <td>No news yet!</td>
                </tr>
            @endforelse

        </tbody>
    </table>
</div>
