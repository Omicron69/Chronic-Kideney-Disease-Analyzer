<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="/style/Loginpage.css"> <!-- link to style sheet  -->
  <title>Login Page</title>
</head>
<body>
  <header>
    <h1>Login</h1>
  </header>
  <main>
  <form action= "../controller/login.php" method="POST"> <!--input of form goes to login.php file, post used to submit data from form to server-->
    <p>
      <label for="">Username</label>
      <input name="userName" type="text">
    </p>
    <p>
      <label for="">Password</label>
      <input name="password" type="password">
    </p>
    <button type="submit" name="login">Login</button>
  </form>
  </main>
</body>
</html>
