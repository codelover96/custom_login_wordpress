/*
Login form for my file Manager

*/
<?php/*
$redirect_to = 'https://lighttechproject.com';
?>
<form name="loginform" id="loginform" action="<?php echo site_url( '/wp-login.php' ); ?>" method="post">
<p>Username: <input id="user_login" type="text" size="20" value="" name="log"></p>
<p>Password: <input id="user_pass" type="password" size="20" value="" name="pwd"></p>
<p><input id="rememberme" type="checkbox" value="forever" name="rememberme"></p>

<p><input id="wp-submit" type="submit" value="Login" name="wp-submit"></p>

<input type="hidden" value="<?php echo esc_attr( $redirect_to ); ?>" name="redirect_to">
<input type="hidden" value="1" name="testcookie">
</form>
*/?>
<html>
  <head>
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet">
    <!-- Bootstrap core JavaScript -->
    <script src="assets/jquery/jquery.slim.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  </head>


  <body>
    <div class="wrapper fadeInDown">
      <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
          <img src="assets/img/lighttech_logo.png" id="icon" alt="User Icon" />
        </div>

        <!-- Login Form -->
        <form>
          <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
          <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
          <input type="submit" class="fadeIn fourth" value="Log In">
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
          <a class="underlineHover" href="#">Forgot Password?</a>
        </div>

      </div>
    </div>

  </body>
</html>
