@props(['news'])
<div class="">
    <form action="{{ route('news.destroy', $news->id) }}" method="POST"
        onsubmit="return confirm('Are you sure you want to delete this news ?')">
        @csrf
        @method('DELETE')
        <button class="btn-error btn" type="submit">Delete</button>
    </form>
</div>
