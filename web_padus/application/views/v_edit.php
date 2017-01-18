
    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url()?>asset/css/bootstrap.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?= base_url()?>asset/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url()?>asset/css/agency.css"                     rel="stylesheet">
    <link href="<?= base_url()?>asset/css/style.css"      type="text/css" rel="stylesheet" >
    <link href="<?= base_url()?>asset/css/menutambah.css" type="text/css" rel="stylesheet"  >


<body  id="page-top" class="index ">

<br><br><br><br>
<div class="container marketing">
      <!-- START THE FEAETTES -->
 <legend>EDIT INFORMASI ANGGOTA</legend>
     <hr class="music">
    <br> <br>

  <!--================ EDIT DATA BLOM BISA================================  -->  
<?php foreach ($anggotaukm as $perakun) { ?>    
<form class="form-horizontal" action="<?php echo base_url(). 'Akun/update' ?>" method="post" enctype='multipart/from-data'>
  <fieldset>

    <div class="form-group">
      <label type="name" for="inputNama" class="col-lg-2 control-label">Nama</label>
      <div class="col-lg-5">

        <input class="form-control" name='nama' value="<?= $perakun->nama ?>" placeholder="Nama Lengkap" type="text" id="nama" required="required">
      </div>
    </div>



    <div class="form-group">
      <label fotionNIM" class="col-lg-2 control-label" >NIM</label>
      <div class="col-lg-5">
        <input class="form-control" name='nim' value="<?= $perakun->nim ?>" placeholder="NIM" type="text"  disabled>
      </div>
    </div>

    <div class="form-group">
      <label  class="col-lg-2 control-label" required="required">Jurusan</label>
      <div class="col-lg-3">
        <select class="form-control" name='jurusan' value="<?= $perakun->jurusan ?>"  >
          <option value="Sistem Informasi">Sistem Informasi</option>
          <option value="Teknik Informatika" >Teknik Informatika</option>
          <option value="Manajemen Informatika">Manajemen Informatika</option>
          <option value="Teknik Komputer">Teknik Komputer</option>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label for="inputemail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-5">
        <input type="email" class="form-control" name='email' value="<?= $perakun->email ?>" placeholder="Email Active" type="text" required="required">
      </div>
    </div>
 
    <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">Syarat Untuk Edit</h3>
          </div>
          <div class="panel-body">
            1. Nim tidak dapat di ubah<br>
            2. Edit informasi harus disetujui oleh anggota yang bersangkutan<br>

          </div>
    </div>

    <div class="form-group">
            <label for="inputPassword" class="col-lg-2 control-label"></label>
      <div class="col-lg-10">
          <div class="checkbox">
            <label><input type="checkbox" required="required" > Saya mengerti</label>
          </div>
      </div>
                         <br> <br> <br> <br>
      <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <button type="submit" value="Simpan" class="btn btn-daftar"><i class="fa fa-check-square-o" aria-hidden="true"></i> Daftar</button>
          
          </div>
      </div>
    </div>

  </fieldset>
 
</form>  

<?php } ?>
 <!--=====================================================================  -->    


      <!-- /END THE FEATURETTES -->

