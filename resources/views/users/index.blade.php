<h1>Daftar User</h1>

<a href="{{ route('users.create') }}">+ Tambah User</a>

<ul>
    @foreach($users as $user)
        <li>{{ $user->name }} - {{ $user->getRoleNames()->first() }}</li>
    @endforeach
</ul>
