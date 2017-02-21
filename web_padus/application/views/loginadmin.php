
<br><br><br><br>
<div class="container">


<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
        <form role="form" method="post" action="login">
            <h2 class="text-center"><i class="fa fa-user" aria-hidden="true"></i>Login Admin
                 <hr class="hr">
            </h2>
              
    <form role="form" >

        <div class="form-group">
        <center><label for="inputUsernameEmail"> <h5>Email</h5></label></center> 
          <input type="email" class="form-control" placeholder="Masukkan Email" name='email' required="required">
        </div>

  <!-- PLAGIN KEGIATAN UKM .............................
 
          <a class="pull-right" href="#"> <h5><i>  Forgot password? </i></h5> </a>
          <label for="inputPassword"> <h5> Password </h5></label>............... -->
        
          <div class="form-group">
          <center><label for="inputUsernameEmail"> <h5>Password</h5></label></center>
              <input type="password" class="form-control" placeholder="Masukkan password" name='password' required="required">
            </div>

        <?php
        switch( @$_SESSION['notif'] ){
            case 1:
            echo "<div class='alert alert-danger' role='alert'>
            <span class='fa fa-exclamation-triangle fa-2x' aria-hidden='true'></span>
            Sign-in Gagal:
            Cek kembali Email dan password anda!
            </div>";
            session_destroy();
            break;

        }
        ?>

            <div class="row">

                <div class="col-xs-12 col-md-6">
                <br>
                <input type="submit"  value="Login" class="btn btn-primary1 btn-block btn-lg" tabindex="7" >
 
                </div>
  

                <div class="col-xs-12 col-md-6">
                <br>
                <a href="homepage" class="btn btn-success btn-block btn-lg">Back</a></div>
           
            </div>
          
        </form>
    </div>
</div>
