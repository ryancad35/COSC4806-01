<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
  </head>

  <body>
    <h1>Login Form</h1>

  <main>
  <form action="/validate.php" method="post">
    <!-- <p><?php echo $error; ?></p> -->
    <label>Username:</label>
    <br>
    <input type="text" name="username">
    <br>
    <label>Password:</label>
    <br>
    <input type="password" name="password">
    <br><br>
    <input type="submit" name="action"     value="Login">
  </form>

  </main>
  </body>
</html>