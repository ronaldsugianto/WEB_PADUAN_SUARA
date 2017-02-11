            <a href="#editoranisasi" class="page-scroll btn btn-xl">Next Edit Oranisasi </a>
            </div>
        </div>
    </header>
    <!-- Header======================================= -->

<br><br>
    <section id="editoranisasi">
   <div id="wrapper">



    <!-- PENGURUS UKM PADUAN SUARA Section -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Struktur Organisasi</h2>
                    <h3 class="section-subheading text-muted">Pengurus UKM paduan suara.</h3>
                </div>
            </div>

<!--  CONTOH -->
<div class="row">

    <!-- KETUA UKM -->
                <div class="col-sm-4">
                    <div class="team-member">
                        <!-- upload gambar-->
                        <form role="form" action="<?= base_url()?>editorganisasi/update_ketua" method="post" enctype="multipart/form-data">                             <div class="form-group input-group">
                                
                                <span class="input-group-addon"><i class="fa fa-user-md"></i></span>
                                <input type="hidden" name="test" value="TEST">
                                <input type="file" class="form-control" placeholder="Load Foto" name="foto" data-max-size="2048" required="required">
                            
                            </div>
                            <input type="submit" class="btn btn-success btn-block btn-lg" value="Update">
                        </form>

                        <img class="img-responsive img-circle imgpengurus" src="asset/foto/ketua.jpg">
                     
                    </div>
                </div>

    <!-- ....................................................... -->

    <!-- SEKERTARIS UKM -->
                <div class="col-sm-4">
                    <div class="team-member">

                   <form role="form" action="<?= base_url()?>editorganisasi/update_sekertaris" method="post" enctype="multipart/form-data">

                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-user-md"></i></span>
                                <input type="file" class="form-control" placeholder="Load Foto" name="foto" required="required">
                            </div>
                            <input type="submit" class="btn btn-success btn-block btn-lg" value="Update">
                        </form>

                        <img src="asset/foto/sekertaris.jpg" class="img-responsive img-circle imgpengurus alt="">
                        
                   
                    </div>
                </div>
       <!-- ................................................ -->

    <!-- WAKIK -->
                <div class="col-sm-4">
                    <div class="team-member">

                        <form role="form" action="<?= base_url()?>editorganisasi/update_wakilketua" method="post" enctype="multipart/form-data">     
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-user-md"></i></span>
                                <input type="file" class="form-control" placeholder="Load Foto" name="foto" required="required">
                            </div>
                            <input type="submit" class="btn btn-success btn-block btn-lg" value="Update">
                        </form>

                        <img src="asset/foto/wakilketua.jpg" class="img-responsive img-circle imgpengurus" alt="">
                    
                    </div>
                </div>
    <!-- ........................................... -->



<?php 
    foreach ($this->Akun_model->getorganisasi() as $pengurus) {

    
 ?>
 <form action="<?php echo base_url(). 'Akun/updateorg' ?>" method="post" enctype='multipart/from-data'>
                <div class="col-sm-4" >
                    <div class="team-member">
                   
                        <input type="hidden" name="id" value="<?= $pengurus['id'] ?>">
                    
                        <h4>
                        <input class="form-control" name='nama' placeholder="Nama Lengkap" type="text" id="nama" required="required" 
                        value="<?= $pengurus['nama']?>">
                        </h4>

                        <h4>
                        <input class="form-control" name='jabatan' placeholder="Jabatan" type="text" id="jabatan" required="required"
                        value="<?= $pengurus['jabatan']?>">
                        </h4>

                        <h4>
                        <input class="form-control" name='linktwit' placeholder="link Twitter" type="text" id="link" 
                        value="<?= $pengurus['linktwit']?>">
                        </h4>

                        <h4>
                        <input class="form-control" name='link' placeholder="link Facebook" type="text" id="link" 
                        value="<?= $pengurus['link']?>">
                        </h4>
                        
                        <br>    
                        <button type="submit" class="btn btn-daftar" value="Simpan"><i class="fa fa-check-square-o" aria-hidden="true"></i> Save Perubahan</button>
                                
                    </div>
                </div>
</form>
<?php
    }
?>

</div>
<!--  CONTOH -->


            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                <h4>
                    <p class="large text-muted">Bertugas mengurus kegiatan UKM dan membuat UKM menjadi Aktiv dalam mengikuti berbagai kegiatan.</p> <br> </h4>
                </div>
            </div>


        </div>
   </div>
</section>