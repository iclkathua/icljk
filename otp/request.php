<!DOCTYPE html>
<html>
  <head>
    <title>OTP DEMO</title>
  </head>
  <body>
    <!-- (A) OTP REQUEST FORM -->
    <h1>OTP REQUEST</h1>
    <form method="post" target="_self">
      <input type="email" name="email" required value="iclkathua@gmail.com"/><br>
      <input type="submit" value="Go"/>
    </form>

    <?php
    // (B) PROCESS OTP REQUEST
    if (isset($_POST['email'])) {
      require "otp.php";
      $pass = $_OTP->generate($_POST['email']);
      echo $pass ? "<div>OTP SENT.</div>" : "<div>".$_OTP->error."</div>" ;
    }
    ?>
  </body>
</html>