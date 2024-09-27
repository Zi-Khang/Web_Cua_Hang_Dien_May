<form action="{{ route('checkLogin')}}" style="margin-left: 100" method="POST">
    @csrf
    <label for="email">
        Email: <input type="text" name="email">
    </label>
    <br>
    <label for="password">
        Password: <input type="password" name="password">
    </label>
    <br>
    <button type="submit">Đăng nhập</button>
</form>