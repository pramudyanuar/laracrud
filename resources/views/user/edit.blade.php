<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Email:</label>
    <input type="email" name="email" value="{{ $user->email }}" required>
    <label>Password:</label>
    <input type="password" name="password">
    <button type="submit">Update</button>
</form>
