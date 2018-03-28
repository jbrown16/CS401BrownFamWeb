<?php
  include("config.php");
  session_start();

  $errMsgSet = false;

  // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
    // username and password sent from form
    $myusername = mysqli_real_escape_string($db, $_POST['username']);
    $mypassword = mysqli_real_escape_string($db, $_POST['password']);

    $sql = "SELECT * FROM brown_logins WHERE username = '$myusername' AND password = '$mypassword'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, only 1 row should be returned
    if ($count == 1) {
      $_SESSION['login_user'] = $myusername;
      header("location: home.php");
    } else {
      $errMsgSet = true;
      $error = "Invalid username or password!";
    }
  }
?>

<!DOCTYPE HTML>

<html>
   
   <head>
      <title>Login Page</title>
      <link href="/images/favicon.ico" rel="shortcut icon">
      <link rel="stylesheet" type="text/css" href="/styles/login-style.css">
   </head>

   <body>

      <div id="login-area" align="center">
        <h1 class="logo">
          <img src="/images/brown-fam-logo-login.png" alt="The Brown Family">
        </h1>
        <div id="login-box" align="left">
          <div id="login-title"><b>Login</b></div>
          <div id="login-form-area">
            <form action = "" method = "post">
              <label>Username: </label><input type = "text" name = "username" class = "box"/><br /><br />
              <label>Password: </label><input type = "password" name = "password" class = "box" /><br/><br />
              <input type = "submit" value = " Log in "/><br />
            </form>
            <div id="login-error-msg"><?php if ($errMsgSet) echo $error; ?></div>
          </div>
        </div>
      </div>

   </body>

</html>