
<br><br><br><br><br><br>
<div class="container marketing">
      <!-- START THE FEAETTES -->
 <legend> Tambah kegiatan </legend>
    <hr class="music">
    
    <br>
<form class="form-horizontal" method="post" action="<?= base_url()?>akun/upload" >
  <fieldset>

    <div class="form-group">
      <label type="text"  class="col-lg-2 control-label">Waktu</label>
      <div class="col-lg-5">
        <input class="form-control" name='waktu' placeholder="Ex: 00:00-00:00" type="text" required="required">
      </div>
    </div>

    <div class="form-group">
      <label class="col-lg-2 control-label" >Tanggal</label>
      <div class="col-lg-5">
       <input class="form-control" name='tanggal' placeholder="Ex: Tgl-Bln-Thn (01-ags-1996)" type="text"  required="required">
      </div>
    </div>

    <div class="form-group">
      <label  class="col-lg-2 control-label">kegiatan</label>
      <div class="col-lg-5">
        <input type="text" class="form-control" name='kegiatan' placeholder="Nama Kegiatan " required="required">
      </div>     
    </div>

    <div class="form-group">
      <label  class="col-lg-2 control-label">tempat</label>
      <div class="col-lg-5">
        <input type="text" class="form-control" name='tempat' placeholder="Tempat Di Selenggarakannya Kegiatan" required="required">
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
        <button type="submit" class="btn btn-daftar"><i class="fa fa-check" aria-hidden="true"></i> Tambahkan</button>
      </div>
    </div>
  </fieldset>
</form>  
      <hr class="featurette-divider">
 