<h1>Edit User</h1>

<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="fullname">Fullname:</label>
    <input type="text" id="fullname" name="fullname" value="{{ $user->fullname }}" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{ $user->email }}" required>

    <!-- Thêm các trường thông tin khác cần sửa -->

    <button type="submit">Update</button>
</form>