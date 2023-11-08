<?php
include_once "./includes/userLogin.inc.php";
?>
<div class="mx-wd auto">
  <div class="login-container">
    <div class="login-logo">
      <img src="./files/img/log.jpg" alt="">
    </div>
    <div class="form-container">
      <h2>Express Delivery Login</h2>
      <form action="" method="post">
        <div>
          <?php
            if(!empty($error)){
              foreach($error as $errors){
                ?>
                <p class="alert"><?php echo $errors?></p>
                <?php
                
              }
            }
          ?>
        </div>
        <div class="inputctrl">
          <input type="text" placeholder="Enter your email" name="email">
        </div>
        <div class="inputctrl">
          <input type="password" name="password" placeholder="Enter your password">
        </div>
        <div class="forgot-p">
          <a href="">Forgot password?</a>
        </div>
        <div class="btn">
          <span class="icon"><?php require "svgs/arrow-right.svg"?></span>
          <input type="submit" name="login">
        </div>
        <div class="forgot-p">
          <a href="?ref2=create">Don't have account? create</a>
        </div>
      </form>
    </div>
  </div>
</div>