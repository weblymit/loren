<!-- Authentication -->
<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button class="bg-blue-500 w-28 py-1 font-semibold rounded-3xl" type="submit">Logout</button>
</form>
