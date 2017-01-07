               <a href="#Pendaftaran" class="page-scroll btn btn-xl">Next Daftar</a>
            </div>
        </div>
    </header>
    <!-- Header======================================= -->


<body  id="page-top" class="index ">

<br><br><br><br>
<section id="Pendaftaran" >
   <div class="container marke
   ting">
      <!-- START THE FEAETTES -->
 <legend>Form Pendaftaran Anggota Baru</legend>
    <hr class="music">
    <br>
    <br>
      <form class="form-horizontal" method="post" action="<?= base_url()?>pendaftaran">
  <fieldset>

    <div class="form-group">
      <label type="name" for="inputNama" class="col-lg-2 control-label">Nama</label>
      <div class="col-lg-5">
        <input class="form-control" name='nama' placeholder="Nama Lengkap" type="text" id="nama" required="required">
    <p id="warning_nama"> </p>
      </div>
    </div>



    <div class="form-group">
      <label fotionNIM" class="col-lg-2 control-label" >NIM</label>
      <div class="col-lg-5">
        <input class="form-control" name='nim' placeholder="NIM" type="text" required="required">
      </div>
    </div>

    <div class="form-group">
      <label for="agama" class="col-lg-2 control-label" required="required">Jurusan</label>
      <div class="col-lg-3">
        <select class="form-control" name='jurusan'>
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
        <input type="email" class="form-control" name='email' placeholder="Email Active" type="text" required="required">
      </div>
    </div>
 
    <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Syarat dan Ketentuan</h3>
  </div>
    <div class="panel-body">
      1. Hadir di setiap jadwal UKM<br>
      2. Jadi anggota yang loyal<br>
      3. Wajib berpartisipasi dalam lomba<br>
      4. Dapat bekerjasama dalam kelompok<br>
   </div>
  </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label"></label>
      <div class="col-lg-10">
        <div class="checkbox">
          <label>
            <input type="checkbox" required="required" > Saya setuju dan ingin bergabung
          </label>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-batal"><i class="fa fa-times" aria-hidden="true"></i> Batal</button>
        <button type="submit" class="btn btn-daftar"><i class="fa fa-check-square-o" aria-hidden="true"></i> Daftar</button>
      </div>
    </div>
  </fieldset>
</form>  
      <hr class="featurette-divider">
</section>
      <!-- /END THE FEATURETTES -->
