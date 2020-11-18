<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="/css/style.css">
    <title>Tucil</title>
</head>
<body>
    <div class="center">
        <h1>Login</h1>
        <form method="post" action="/tucil/home">
            <div class="txt_field">
                <input type="text" required>
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" required>
                <span></span>
                <label>Password</label>
            </div>
            <input type="submit" value="Login">
            <div class="link">
                Belom punya akun yha? <a href="/tucil/register">Registrasi</a> </br></br>
                Kamu admin? <a href="/tucil/admin">Iyaa!!</a>
            </div>
        </form>
    </div>
</body>
</html>