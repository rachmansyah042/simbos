<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- <title>AdminLTE 3 | Log in</title> -->
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/custom_css.css">
  <style>
      .alert-login {
    padding: .75rem 1.25rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: .25rem;
    color: #721c24;
    background-color: #f8d7da;
    border-color: #f5c6cb;
    font-size: 13px;
    text-align: center;
}
  </style>

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body class="body-login"> 
    
    <form class="form-login" action="<?php echo base_url() ?>Auth/login" method="post">
      <img src="<?php echo base_url() ?>assets/logo_bwi.png" style="width:100%; margin-bottom:30px;" alt="logo">
      <?= $this->session->flashdata('message'); ?>
      <div class="input-form">
        <input class="input-text" name="username" type="text">
        <span data-placeholder="Username"></span>
      </div>
      <div class="input-form">
        <input class="input-text" name="password" type="password">
        <span data-placeholder="Password"></span>
      </div>
      <button type="submit" class="loginbtn">Login</button>
      <div class="lupa-password">Lupa Password?</div>
    </form>



<script src="<?php echo base_url() ?>assets/template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>assets/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/template/dist/js/adminlte.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>

<script>
  $('.input-form input').on('focus', function(){
    $(this).addClass('focus');
  });

  $('.input-form input').on('blur', function(){
    if($(this).val()== ''){
      $(this).removeClass('focus');
    }
  });
</script>

</body>
</html>
