<!DOCTYPE html>
<html>
<head>
 <?php $this->load->view('template_a');?>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/chart/Chart.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/chart/Chart.bundle.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/chart/Chart.bundle.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/chart/Chart.min.js"></script>
 </head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'config/top-menu.php'; ?>
  <!-- Left side column. contains the logo and sidebar -->
  
  <?php include 'config/side.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  

    <!-- Main content -->
    <section class="content">
    <div class="row">
  <div class="col-md-12">
<div class="box-header">
	<?php
    // Cek apakah terdapat session nama message
    if($this->session->flashdata('message')){ // Jika ada
      echo $this->session->flashdata('message'); // Tampilkan pesannya
    }
    ?>

  <?php
    // Cek apakah terdapat session nama message
    if($this->session->flashdata('error')){ // Jika ada
      echo $this->session->flashdata('error'); // Tampilkan pesannya
    }
    ?>
      </div>

      <!-- /.box-header -->
      
          <div class="box box-success">
            <div class="box-header with-border">


              <h3 class="box-title">Diagram</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">

               <center>
          
        <img src="<?php echo base_url('assets/img/Logo Puskesmas Tanpa Background.png');?>" width="500px" height="450px" alt=""></center>
            </div>
            <!-- /.box-body -->
        
         


      </div>
   
  </div>
</div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
<! -- datatables -->
  <?php $this->load->view('footer.php');?>