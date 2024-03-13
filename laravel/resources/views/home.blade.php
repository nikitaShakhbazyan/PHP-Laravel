<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @auth
    <h1>You are logged in!</h1>
    <form action="/logout" method="POST">
        @csrf
        <button>Log out</button>
    </form>
    @else
    <div style="border : 3px solid black">
        <h2>Register</h2>
        <form action="/register" method="POST">
            @csrf
            <input name="name" type="text" placeholder="name">
            <input name="email" type="text" placeholder="email">
            <input name="password" type="password" name="" id="" placeholder="pass"> 
            <button>Register</button>
        </form>
    </div>
    <div style="border : 3px solid black">
        <h2>Login</h2>
        <form action="/login" method="POST">
            @csrf
            <input name="loginname" type="text" placeholder="name">
            <input name="loginpassword" type="password" name="" id="" placeholder="pass"> 
            <button>Login</button>
        </form>
    </div>
    @endauth
</body>
</html>