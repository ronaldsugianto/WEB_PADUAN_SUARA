               <a href="#editkegiatan" class="page-scroll btn btn-xl">Next Edit kegiatan </a>
            </div>
        </div>
    </header>
    <!-- Header======================================= -->

<br><br>
    <section id="editkegiatan">
   <div id="wrapper">
    	            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel1 panel-default">
                        <div class="panel-heading">
                         		<h3>   Edit Kegiatan UKM </h3>
                      		<center>
                            	<a type="button" href="uploadkegiatan" class="btn btn-daftar"><i class="fa fa-plus" aria-hidden="true"></i> Kegiatan</a>         
                            </center>                         		
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                          
                                         <th><center>Waktu</center></th>
                                         <th>Tanggal</th>
                                         <th>Kegiatan</th>
                                         <th>Tempat Kegiatan</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    <?php foreach ($akun as $perakun) { ?>
                                      <tr>

                                       <th><center><?= $perakun['waktu']; ?></center></th>
                                       <th><?= $perakun['tanggal']; ?></th>
                                       <th><?= $perakun['kegiatan']; ?></th>
                                       <th><?= $perakun['tempat']; ?></th>
                                      <th>
                                <!-- EDIT DATA BLOM BISA  -->               
                  <?php echo anchor('Akun/editkg/'.$perakun['idkegiatan'],'Edit'); ?> 
                                <!-- EDIT DATA BLOM BISA  -->  
                        / 
                <?php echo anchor('Akun/hapuskegiatan/'.$perakun['idkegiatan'],'Hapus'); ?> 
                                            
                                            </th>
                                        </tr>
                                     <?php } ?>
                         
                                      </tbody>
                                </table>

                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
 
            </div>
            <!-- /.row -->

                </div>
    <!-- /#wrapper -->
    </section>