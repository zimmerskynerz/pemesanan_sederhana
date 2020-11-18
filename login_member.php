<!DOCTYPE HTML>
<html lang="en">
<html>

<head>
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="login_style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <style>
body {
  background-color: white;
}
</style>
</head>

<body class="body" style="background-image: url();">
  <div class="login-page">
    <div class="form" style="padding-top: 20px">
    <h3 class="card-header">MENU LOGIN</h3>
      <form action="include/cek_login.php" enctype="multipart/form-data" method="post">
        <input type="text" name="username" id="username" placeholder="&#xf007;  username" />
        <input type="password" name="password" id="password" placeholder="&#xf023;  password" />
        <button type="submit" name="loginMember" value="loginMember" id="loginMember">LOGIN</button>
        <p class="message"></p>
      </form>
      <form class="login-form">
        <button type="button" onclick="window.location.href='signup'">SIGN UP</button>
      </form>
    </div>
  </div>

</body>

</html>