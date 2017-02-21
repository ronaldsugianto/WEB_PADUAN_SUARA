               <a href="#editpoint" class="page-scroll btn btn-xl">Next Point</a>
            </div>
        </div>
    </header>
    <!-- Header======================================= -->


    <section id="editpoint">
    <div id="wrapper">
    	            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel1 panel-default">
                        <div class="panel-heading">
                         <h3>  Edit Point Anggota UKM  </h3>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    
                                    <thead>
                                       <tr>
										 <th>nim</th>
	                                     <th>nama</th>
	                                     <th><center>Jumlah Point</center></th>
                                         <th><center>+Point</center></th>
                                         <th><center>Button</center></th>   
                                       </tr> 
                                    </thead>

                                    <tbody>
                                    <?php foreach ($akun as $perakun) { ?>
                                    <form action="updatepoint/<?=$perakun['nim'];?>" method="post">
                                    <tr>
                                      
                                      <td>
                                        <?= $perakun['nim']; ?>
                                      </td>
                                      
                                      <td>
                                        <?= $perakun['nama']; ?>     
                                      </td>
                                      
                                      <td><center>
                                        <?= $perakun['point']; ?>   
                                      </center></td>
                                      
                                      <td><center>
                                        <input class="form-control1" required="required" name='point' placeholder="input" type="text" > 
                                      </center></td>
                                            

                                         
                                      <td><center>
                                        <button type="submit" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-check" aria-hidden="true"></i>
                                        </button>    
                                      </center> </td> 

                                      
                                    </tr>
                                    </form>
                                    <?php } ?>
                                    </tbody>

                                    <!--  <tfoot>
                                  <tr>
                                        <th></th>
                                        <th><i>0 People</i></th>
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