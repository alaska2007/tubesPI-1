<!DOCTYPE html>
<html >
<head>
<head>
  <meta charset="UTF-8">
  <title>Web Gudang | Login</title>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?= base_url()?>/assets/fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="<?php echo base_url()?>style/login_register.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
  <div class="wrapper">
  <form action="<?= site_url('register/proses_register')?>" class="login" method="post">

    <p class="title"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</p>
    <?php if($this->session->flashdata('msg')){ ?>
      <div class="alert alert-warning alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Warning!</strong><br> <?php echo $this->session->flashdata('msg');?>
     </div>
    <?php } ?>

    <?php if($this->session->flashdata('msg_terdaftar')){ ?>
      <div class="alert alert-success alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Success</strong><br> <?php echo $this->session->flashdata('msg_terdaftar');?>
     </div>
    <?php } ?>

    <?php if(validation_errors()){ ?>
    <div class="alert alert-warning alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Warning!</strong><br> <?php echo validation_errors(); ?>
   </div>
  <?php } ?>

    <input type="number" name="nip" placeholder="NIP"  autofocus required="" />

    <input type="text" name="username" placeholder="Username" autofocus required=""/>

    <i class="fa fa-user"></i>
    <input type="email" name="email" placeholder="Email" autofocus required=""/>

    <i class="fa fa-user"></i>
    <input type="password" name="password" placeholder="Password" required=""/>

    <i class="fa fa-key"></i>
    <input type="password" name="confirm_password" placeholder="Confirm Password" required=""/>

    <i class="fa fa-key"></i>

    <?php echo anchor(site_url('login'),'Log In') ?><br>

    <!-- <a href="#">Forgot your password?</a> -->

    <button>
      <!-- <i class="spinner"></i> -->
      <span class="state"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</span>
    </button>

  </form>
  <!-- <footer><a target="blank" href="http://unsadacoder.or.id">UnsadaCoder.or.id</a></footer> -->
  </p>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


</body>
</html>
