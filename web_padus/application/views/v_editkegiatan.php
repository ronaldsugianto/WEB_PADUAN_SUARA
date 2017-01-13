
    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url()?>asset/css/bootstrap.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?= base_url()?>asset/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url()?>asset/css/agency.css"                     rel="stylesheet">
    <link href="<?= base_url()?>asset/css/style.css"      type="text/css" rel="stylesheet" >
    <link href="<?= base_url()?>asset/css/menutambah.css" type="text/css" rel="stylesheet"  >
<body  id="page-top" class="index ">

    <br><br><br><br><br><br>
<div class="container marketing">
      <!-- START THE FEAETTES -->
 <legend> Tambah kegiatan </legend>
    <hr class="music">
    
    <br>
<?php foreach ($kegiatanukm as $perakun) { ?>      
<form class="form-horizontal" action="<?php echo base_url(). 'Akun/updatekg' ?>" method="post" >
  <fieldset>

    <div class="form-group">
      <div class="col-lg-5">

        <input class="form-control" name='idkegiatan' value="<?= $perakun->idkegiatan ?>" placeholder="idkegiatan kegiatan ukm" type="hidden" id="idkegiatan" required="required">
      </div>
    </div>

    <div class="form-group">
      <label type="text"  class="col-lg-2 control-label">Waktu</label>
      <div class="col-lg-5">
        <input class="form-control" name='waktu' value="<?= $perakun->waktu ?>" placeholder="Waktu kegiatan" type="text" required="required">
      </div>
    </div>

    <div class="form-group">
      <label class="col-lg-2 control-label" >Tanggal</label>
      <div class="col-lg-5">
       <input class="form-control" name='tanggal' value="<?= $perakun->tanggal ?>" placeholder="Tanggal kegiatan" type="text"  required="required">
      </div>
    </div>

    <div class="form-group">
      <label  class="col-lg-2 control-label">kegiatan</label>
      <div class="col-lg-5">
        <input type="text" class="form-control" name='kegiatan' value="<?= $perakun->kegiatan ?>" placeholder="Nama Kegiatan " required="required">
      </div>     
    </div>

    <div class="form-group">
      <label  class="col-lg-2 control-label">tempat</label>
      <div class="col-lg-5">
        <input type="text" class="form-control" name='tempat' value="<?= $perakun->tempat ?>" placeholder="Tempat Di Selenggarakannya Kegiatan" required="required">
      </div>     
    </div>
 
    <div class="form-group">
      <label  class="col-lg-2 control-label"></label>
      <div class="col-lg-10">
        <div class="checkbox">
          <label>
            <input type="checkbox" required="required" > Saya setuju menambah kegiatan ini
          </label>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <a href="editkegiatan" class="btn btn-batal"><i class="fa fa-times" aria-hidden="true"></i> Batal</a>
        <button type="submit"  class="btn btn-daftar"><i class="fa fa-check" aria-hidden="true"></i> Tambahkan</button>
      </div>
    </div>
  </fieldset>
</form>  
      <hr class="featurette-divider">
      <?php } ?>