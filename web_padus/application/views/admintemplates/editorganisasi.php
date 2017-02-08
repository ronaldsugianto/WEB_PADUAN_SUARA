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


            <div class="row">

    <!-- KETUA UKM -->
                <div class="col-sm-4">
                    <div class="team-member">
                        <!-- upload gambar-->
	                    <form role="form" action="<?= base_url()?>editorganisasi/update_ketua" method="post" enctype="multipart/form-data">                             <div class="form-group input-group">
                                
                                <span class="input-group-addon"><i class="fa fa-user-md"></i></span>
                                <input type="file" class="form-control" placeholder="Load Foto" name="foto" required="required">
                            
                            </div>
                            <input type="submit" class="btn btn-success btn-block btn-lg" value="Update">
                        </form>

                        <img class="img-responsive img-circle imgpengurus" src="asset/foto/ketua.jpg">

                        <h4>
                        <input class="form-control" name='nama' placeholder="Nama Lengkap" type="text" id="nama" required="required">
                        </h4>

                        <h4>
                        <input class="form-control" name='jabatan' placeholder="Jabatan" type="text" id="jabatan" required="required">
                        </h4>
                        
            <br>    
            <button class="btn btn-lg btn-primary btn-block" ype="submit" value="Simpan"> <i class="fa fa-check" aria-hidden="true"></i> Save Perubahan </button>
                     
                    </div>
                </div>
    <!-- ....................................................... -->

    <!-- WAKIL KETUA UKM -->
                <div class="col-sm-4">
                    <div class="team-member">

	                    <form >     <!-- upload gambar-->
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-user-md"></i></span>
                                <input type="file" class="form-control" placeholder="Load Foto" name="foto" required="required">
                            </div>
                            <input type="submit" class="btn btn-success btn-block btn-lg" value="Update">
                        </form>

                        <img src="asset/img/team/1.1.jpg" class="img-responsive img-circle imgpengurus alt="">
                        
                        <h4>        
                        <input class="form-control" name='nama' placeholder="Nama Lengkap" type="text" id="nama" required="required">
                        </h4>
                        
                        <h4>
                        <input class="form-control" name='jabatan' placeholder="Jabatan" type="text" id="jabatan" required="required">
                        </h4>

                    <br>
                        <button class="btn btn-lg btn-primary btn-block" ype="submit" value="Simpan"> <i class="fa fa-check" aria-hidden="true"></i> Save Perubahan </button>
                    
                   
                    </div>
                </div>
       <!-- ................................................ -->

    <!-- SEKERTARIS -->
                <div class="col-sm-4">
                    <div class="team-member">

	                    <form >     <!-- upload gambar-->
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-user-md"></i></span>
                                <input type="file" class="form-control" placeholder="Load Foto" name="foto" required="required">
                            </div>
                            <input type="submit" class="btn btn-success btn-block btn-lg" value="Update">
                        </form>

                        <img src="asset/img/team/3.jpg" class="img-responsive img-circle imgpengurus" alt="">
                        
                        <h4>
                        <input class="form-control" name='nama' placeholder="Nama Lengkap" type="text" id="nama" required="required">
                        </h4>

                        <h4>
                        <input class="form-control" name='jabatan' placeholder="Jabatan" type="text" id="jabatan" required="required">
                        </h4>
    
<br>
    <button class="btn btn-lg btn-primary btn-block" ype="submit" value="Simpan"> <i class="fa fa-check" aria-hidden="true"></i> Save Perubahan </button>
                    
                    </div>
                </div>
    <!-- ........................................... -->
            </div>

            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                <h4>
                    <p class="large text-muted">Bertugas mengurus kegiatan UKM dan membuat UKM menjadi Aktiv dalam mengikuti berbagai kegiatan.</p> <br> </h4>
                </div>
            </div>


        </div>
   </div>
</section>