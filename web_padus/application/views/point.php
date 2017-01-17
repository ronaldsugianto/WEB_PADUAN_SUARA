               <a href="#point" class="page-scroll btn btn-xl">Next Point</a>
            </div>
        </div>
    </header>
    <!-- Header======================================= -->


    <section id="point">

   <div id="wrapper">
    	            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel1 panel-default">
                        <div class="panel-heading">
                         <h3>   Daftar Point Anggota UKM </h3>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
											<th>Nim</th>
	                                        <th>Nama</th>
	                                        <th>Point</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    <?php foreach ($akun as $perakun) { ?>
                                        <tr>
                                            <th><?= $perakun['nim']; ?></th>
                                            <th><?= $perakun['nama']; ?></th>
                                            <th><?= $perakun['point']; ?></th>
                                        </tr>
                                     <?php } ?>

                                    </tbody>

                                 <!--   <tfoot>
                                    <tr>
                                        <th></th>
                                        <th><i>999 Anggota</i></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </tfoot>-->

                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
 
            </div>

  



    	
<br><br>
    </section>