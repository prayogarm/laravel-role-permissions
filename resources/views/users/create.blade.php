<h1>Tambah User Baru</h1>

<form method="POST" action="{{ route('users.store') }}">
    @csrf
    <input type="text" name="name" placeholder="Nama" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>

    <select name="role" required>
        @foreach ($roles as $role)
            <option value="{{ $role->name }}">{{ $role->name }}</option>
        @endforeach
    </select><br>

    <button type="submit">Simpan</button>
</form>
