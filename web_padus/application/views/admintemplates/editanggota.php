              <a href="#editanggota" class="page-scroll btn btn-xl">Next Edit</a>
            </div>
        </div>
    </header>
    <!-- Header======================================= -->

<br><br><br><br>
    <x id="editanggota">

    <div id="wrapper">
    	            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel1 panel-default">
                        <div class="panel-heading">
                         <h3>   Daftar Anggota UKM Paduan Suara </h3>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nim</th>
                                            <th>Nama</th>
                                            <th>Jurusan</th>
                                            <th>Email</th>
                                            <th>Pilih</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    <?php foreach ($akun as $perakun) { ?>
                                        <tr>
                                            <th><?= $perakun['nim']; ?></th>
                                            <th><?= $perakun['nama']; ?></th>
                                            <th><?= $perakun['jurusan']; ?></th>
                                            <th><?= $perakun['email']; ?></th>
                                            <th>
                                <!-- EDIT DATA BLOM BISA  -->               
                        <?php echo anchor('Akun/edit/'.$perakun['nim'],'Edit'); ?> 
                                <!-- EDIT DATA BLOM BISA  -->  
                        / 
                        <?php echo anchor('Akun/hapus/'.$perakun['nim'],'Hapus'); ?> 
                                            
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

    </x>
    <br><br><br><br><br><br><br><br><br><br><br>