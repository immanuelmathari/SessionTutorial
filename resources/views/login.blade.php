<h1>User Login</h1>
<form action="/login" method="post">
    @csrf
    <input type="text" placeholder="Enter your name" name="name"> <br>
    <input type="text" placeholder="Enter your password" name="password"> <br>
    <input type="submit" value="Submit">
</form>
