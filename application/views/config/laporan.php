<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('template_a');?>
 
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'top-menu.php'; ?>
  <!-- Left side column. contains the logo and sidebar -->
  
  <?php include 'side.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        
        <small>Control Panel</small>
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
  <div class="col-md-12">
 
    <div class="box">


      <div class="box-header">
        <h3 class="box-title">Data Laporan</h3>
        <div class="box-body">

          <div class="box-header">
  <?php
          echo $this->session->flashdata('msg');
          ?>

      </div>
<table class="table table-striped table-bordered" cellspacing="0" width="100%">
          <thead>
          <tr>
            <?php echo form_open('dashboard/search') ?>
       
            <th><select name="kategori" class="form-control" required="">
              <?php 


          foreach ($dtbidang->result() as $row) 
          {
           ?> 
              <option value="<?php echo $row->nama_lengkap; ?>"><?php echo $row->nama_lengkap; ?></option>


          <?php } ?>
            
            </select>
          </th>
            <th><input type="date" class="form-control" name="tglmulai" placeholder="search" required="">

    
  </th>
            <th><input type="date" class="form-control" name="tglakhir" placeholder="search" required=""></th>
            <th>
    <input type="submit" name="search_submit" class="btn btn-primary btn-flat" value="Tampilkan"></th>
          <?php echo form_close() ?>
      
          </tr>
          </thead>
        </table>
</div>
       
    </div>


<script type="text/javascript">
  $(document).ready(function() {
    $('#laporan').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'print',
                text: 'Print all',
                exportOptions: {
                    modifier: {
                        selected: null
                    }
                }
            },
            {
                extend: 'print',
                text: 'Print selected'
            }
        ],
        select: true

    } );
} );

  function printContent(el){
    var restorepage = document.body.innerHTML;
    var printcontent = document.getElementById(el).innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorepage;
  }

  $("#kategori").submit(function(e) {
    e.preventDefault();
    var id = $("#kategori").val();
    // console.log(id);
    var url = "<?= site_url('Dashboard/filter/') ?>" + id;
    $('#result').load(url);
   });

</script>
      <!-- /.box-header -->
      <div class="box-body">


        <table id="laporan" class="table table-striped table-bordered" cellspacing="0" width="100%">
          <thead>
          <tr>
            <th>No.</th>
            <th>Tanggal</th>
            <th>Jenis Kegiatan</th>
            <th>Keterangan</th>
            <th>Aksi</th>
          <th></th>
          </tr>
          </thead>
          <tbody id="isi">
          <?php 
          $no = $this->uri->segment('3') + 1;
          foreach ($sm_berita as $row) {
 $tgl = tgl_indo($row->created_at); 
                
            $id = $row->id_berita;
            $ktgr = $row->kategori;
$link = set_linkurl($id,$ktgr);
           ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $tgl; ?></td>

            <td><?php echo $row->kategori; ?></td>
            <td><?php echo $row->keterangan; ?></td>

             <td><a href="<?php echo base_url(); ?>dashboard/downloadkegiatanuser/<?php echo $link; ?>">Download</a></td>

             <td><a href="<?php echo base_url(); ?>dashboard/proses_hapus_kgiatanuser/<?php echo $row->id_berita; ?>">Hapus</a></td>

             
           
          </tr>
          <?php $no++; } ?>

          </tbody>

        </table>

<script type="text/javascript">
  $(document).ready( function () {
      $('#laporan').DataTable();
  } );
</script>

<td><input type="button" class="btn btn-warning" value="Print" onclick="window.print()" /></td> 


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
  
  <?php $this->load->view('footer.php');?>
