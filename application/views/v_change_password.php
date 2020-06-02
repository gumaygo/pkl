<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Reset Your Password password</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css'>
  <link rel="stylesheet" href="<?php echo base_url('/assets/'); ?>style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
  <h1 class="page-header">Reset Password</h1>
<form action="<?php echo base_url('login/verif'); ?>" method="post">
  <div class="form-group has-feedback">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password" data-progress="passwordProgress">
    
    <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
    
    
    <div class="popover bottom popover-errors"> 
      <div class="arrow"></div> 
       <h3 class="popover-title">Password Strength</h3>
      <div class="popover-content"> 
        <div class="progress progress-password">
          <div class="progress-bar" style="width: 0%;" id="passwordProgress">
          </div>
        </div>
        <ul id="validationErrors" class="validation-list">
        </ul>
      </div> 
    </div>
  </div>
  
  
  <div class="form-group has-feedback">
    <label for="passwordRepeat">Repeat Password</label>
    <input type="password" class="form-control" id="passwordRepeat" placeholder="Repeat Password" name="password_baru" >
    <input hidden type="text" name="token" value="<?php echo $_GET['token']; ?>">
    <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
  <script  src=" <?php echo base_url('/assets/scriptx.js'); ?>"></script>

</body>
</html>
