<body class="hold-transition login-page">
  
<div class="login-box">
  <div class="login-logo">
   <b>Aplikasi Monitoring</b>
  </div>
<?php 

$tgl_sekarang = date("Y");
$tgl_exp ="2025";
        if ($tgl_sekarang >=$tgl_exp) {
         ?>

  <!-- /.login-logo -->
  <div class="login-box-body">
    <div class="login-logo" align="center">
      <?php
          echo $this->session->flashdata('msg');
          ?>
  

    </div>

    <p class="login-box-msg">Upgrade ke premium   <a href="https://api.whatsapp.com/send?phone=6289531941653&text=Saya%20mau%20upgrade%20Aplikasi%20Monitoring%20ke%20premium." target="_blank">Klik Disini</a>
   </p>
      
  </div>
       <?php }else{?>        
       
  <!-- /.login-logo -->
  <div class="login-box-body">
    <div class="login-logo" align="center">
      <?php
          echo $this->session->flashdata('msg');
          ?>
  

    </div>

    <p class="login-box-msg">Silahkan login di bawah ini.</p>

    <form action="<?php echo base_url('login/aksi_login');?>" method="post" enctype="multipart/form-data">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="username" id="user" placeholder="Username" autofocus required="">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" id="pass" class="form-control" placeholder="Password" required="">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
      <select name="kategori" class="form-control" required="">
              <option value="" >--Login Sebagai--</option>
            
              <option value="Admin">Admin</option>

              <option value="Bidang">Bidang</option>
            
           
            </select>
          </div>
      <div align="center" class="row">
        
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" id="kirim" class="btn btn-primary btn-block btn-flat">Login</button>
        </div>
        <!-- /.col -->
      </div>


    </form>
    <!--
    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div>
     /.social-auth-links -->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<?php }?>
<!-- jQuery 2.2.3 -->
