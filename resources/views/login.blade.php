<h1>User Login</h1>
<form action="user" method="POST">
    @csrf
    <input type="text" name="user" placeholder="Enter Username"><br><br>
    <input type="passowrd" name="password" placeholder="Enter Password"><br><br>
    <button type="submit">Login</button>
</form>
