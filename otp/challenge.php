<!DOCTYPE html>
<html>
  <head>
    <title>OTP DEMO</title>
  </head>
  <body>
    <!-- (A) OTP CHALLENGE FORM -->
    <h1>OTP CHALLENGE</h1>
    <form method="post" target="_self">
      <input type="email" name="email" required value="iclkathua@gmail.com"/><br>
      <input type="text" name="otp" required/><br>
      <input type="submit" value="Go"/>
    </form>

    <?php
    // (B) PROCESS OTP CHALLENGE
    if (isset($_POST['email'])) {
      require "otp.php";
      $pass = $_OTP->challenge($_POST['email'], $_POST['otp']);
      echo $pass ? "<div>OTP VERIFIED.</div>" : "<div>".$_OTP->error."</div>" ;
    }
    ?>
  </body>
</html>