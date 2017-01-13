               <a href="#Home" class="page-scroll btn btn-xl">Next Home</a>
            </div>
        </div>
    </header>
    <!-- Header======================================= -->




    <!-- Home ========================== -->
    <section id="Home">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">VISI DAN MISI UKM</h2>
                    <h3 class="section-subheading text-muted">Selamat Datang di Situs UKM Paduan Suara</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <hr>
                    <span class="fa-stack fa-3x">
                        <i class=" glyphicon glyphicon-heart  fa-stack-2x text-primary"></i>
                    </span>
                    <h4 class="service-heading">Tentang UKM</h4><hr>
                    <p class="text-muted">UKM Paduan Suara adalah unit kegiatan mahasiswa di tingkat universitas yang berfungsi sebagai wadah serta naungan bagi mahasiswa untuk mengapresiasikan dan menyalurkan minat dan bakat khususnya di bidang olah vokal atau menyanyi. Anggotanya merupakan mahasiswa yang berasal dari berbagai jurusan yang ada di STMIK Kharisma Makassar.<br><br>
                    UKM Paduan Suara merupakan organisasi kemahasiswaan yang berada di lingkungan STMIK Kharisma Makassar yang bergelut dalam seni paduan suara. Sejauh ini, UKM Paduan Suara telah banyak mengikuti event walaupun masih dalam ruang lingkup kampus. Acara yang biasa diikuti oleh UKM  ini adalah acara Dies Natalis kampus, acara lepas pisah wisudawan-wisudawati dan masih banyak lagi acara ceremonial lainnya.<br><br>
                    UKM Paduan Suara sebagai organisasi kemahasiswaan yang bertujuan untuk mengembangan kreatifitas. UKM Paduan Suara harus bisa menjadi wadah para mahasiswa untuk berkarya serta mengapresiasikan bakat mereka untuk meraih kesuksesan dalam disiplin ilmu masing-masing.</p>
                </div>
                
                <div class="col-md-4">
                    <hr>
                    <span class="fa-stack fa-3x">
                        <i class=" glyphicon glyphicon-heart fa-stack-2x text-primary"></i>
                    
                    </span>
                    <h4 class="service-heading">Visi</h4>
                    <hr>
                    <p class="text-muted">
                    1. Menjadi wadah untuk menampung, mengembangkan dan mengekspresikan seni bernyanyi dalam paduan suara.<br><br>
                    2. Menjadi paduan suara mahasiswa yang berkualitas.</p>
                </div>
                <div class="col-md-4">
                    <hr>
                    <span class="fa-stack fa-3x">
                        <i class=" glyphicon glyphicon-heart fa-stack-2x text-primary"></i>
                     
                    </span>
                    <h4 class="service-heading">Misi</h4>
                    <hr>
                    <p class="text-muted"> 
                    1. Ikut berpartisipasi menyumbangkan lagu pada acara - acara kampus seperti Dies Natalis, Wisuda, dan acara kampus lainnya.<br><br>
                    2. Mengikuti kompetisi kelompok PSM pada tingkat regional, nasional sampai internasional.<br><br>
                    3. Melakukan proses latihan yang teratur dan intensif dengan menggunakan metode dan materi yang berbobot.</p>
                </div>
            </div>
        </div>
    </section>



    <!-- KEGIATAN UKM Section -->

<section id="portfolio" class="bg-light-gray">
    <div class="container">
           
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">KEGIATAN UKM</h2>
                    <h3 class="section-subheading text-muted">Banyak Kegiatan yang Bisa Kamu Ikuti.</h3>
                </div>
            </div>


<!-- PLAGIN KEGIATAN UKM ............................................ -->

<br>
<!-- .......................................................................... -->

        <div class="row">
            <div class="col-md-5 col-sm-6 portfolio-item">
                
                <div id="fb-root"></div>
            <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.8&appId=1431174593584141";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

            <center>
            <div class="fb-page" data-href="https://www.facebook.com/OurVoiceOutTeam" data-tabs="timeline" data-width="500" data-height="600" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/OurVoiceOutTeam" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/OurVoiceOutTeam">Our VOICE Our Team</a></blockquote></div>
            </center>
            </div>

            <div class="col-md-7 col-sm-6 portfolio-item">
                  <div id="wrapper">
                    <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel1 panel-default">
                        <div class="panel-heading">
                         <h3>   DAFTAR KEGIATAN YANG BERJALAN </h3>
                        </div>
                        <br>
                        <!-- /.panel-heading -->
                    <div class="panel-heading">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                         <th><center>Waktu</center></th>
                                         <th><center>Tanggal</center></th>
                                         <th>Kegiatan</th>
                                         <th>Tempat Kegiatan</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                   <?php foreach ($akun as $perakun) { ?>
                                        <tr>
                                           <th><center><?= $perakun['waktu']; ?></center></th>
                                           <th><center><?= $perakun['tanggal']; ?></center></th>
                                           <th><?= $perakun['kegiatan']; ?></th>
                                           <th><?= $perakun['tempat']; ?></th>
                                        </tr>
                                     <?php } ?> 

                                    </tbody>

                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    </div>
                    <!-- /.panel -->
                </div>
 
            </div>
            <!-- /.row -->
    </div>
    <!-- /#wrapper -->
            </div>
        </div>

    </div>
</section>



    <!-- About campus Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Tentang Stmik Kharisma makassar</h2>
                    <h3 class="section-subheading text-muted">Sekolah tinggi ilmu komputer terbaik dimakassar.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="asset/img/about/1.jpg " alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading">Informasi</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Sudah saatnya sumberdaya informasi dipandang sebagai suatu sumberdaya yang penting, yang sejajar perlakuannya dengan sumberdaya alam dan sumberdaya manusia yang telah lama diagung-agungkan sebagai komponen produksi. Kini kekuatan suatu organisasi, institusi, bisnis, hingga proses manufaktur, ditentukan oleh kemampuannya dalam mengelola ketiga sumberdaya tersebut.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="asset/img/about/2.2.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>29 Maret 2000</h4>
                                    <h4 class="subheading">Awal STMIK KHARISMA Makassar</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">
                                    STMIK KHARISMA Makassar yang secara resmi berdiri pada tanggal 29 Maret 2000, cikal-bakalnya telah dirintis sejak tahun 1991, dan telah berkonsentrasi penuh dalam usaha mendidik dan menghasilkan sumberdaya manusia, berupa tenaga-tenaga profesional sebagai pengelola hingga penanggung jawab pengelolaan sumberdaya informasi.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="asset/img/about/3.3.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading">Program studi</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">STMIK KHARISMA Makassar saat ini telah menghasilkan ribuan alumni dari dua program studinya, yaitu program studi Sistem Informasi dan program studi Teknik Informatika, pada jenjang pendidikan S1, D-III, dan D-I. Sebagian besar alumni telah terserap dalam dunia kerja dan tidak sedikit pula yang menjadi pengusaha yang mandiri. <br><br>
                                    Untuk lebih memperluas peran STMIK KHARISMA Makassar dalam menghasilkan sumberdaya manusia yang berkualifikasi sebagai pengelola sumberdaya informasi handal, serta untuk memberikan kesempatan kepada mahasiswa mengembangkan diri dan lebih berfokus pada bidang yang diminatinya, pada kurikulum STMIK KHARISMA Makassar, telah disusun sejumlah program peminatan (konsentrasi) dalam setiap program studi di semua jenjang, diantaranya: peminatan sistem informasi manajemen, sistem informasi akuntansi, rekayasa perangkat lunak, jaringan komputer, peminatan grafik komputer dan multimedia. Peminatan ini diharapkan dapat memberikan penguasaan dan penguatan yang mendalam kepada mahasiswa atas bidang kajian yang dipilihnya. Tidak ketinggalan pula bekal entrepreneurship sebagai kompetensi tambahan yang berguna jika para alumni memilih jalur berwirausaha.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="asset/img/about/4.4.jpg " alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading">fasilitas dan Pelayanan</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Dalam upaya mencapai visi yang telah ditetapkan, STMIK KHARISMA Makassar sejak berdirinya tidak pernah berhenti berbenah dan mengembangkan fasilitas serta pelayanan, guna pencapaian kualitas pelaksanaan pendidikan yang berimplikasi pada kualitas alumni. Sejumlah fasilitas seperti ruang kelas dan laboratorium yang nyaman dengan LCD display, WiFi hotspot, dan akses internet, dapat dinikmati mahasiswa yang juga mendukung proses penyelesaian studinya.<br><br>

                                    Dengan semua upaya sungguh-sungguh yang telah dilakukan, untuk meningkat-kan kualitas pelayanan, kualitas pelaksanaan pendidikan, kualitas tenaga pengajar, hingga kualitas alumni selama ini, program-program studi di STMIK KHARISMA Makassar telah mendapatkan pengakuan dari Direktorat Pendidikan Tinggi Depdiknas, dengan perpanjangan izin operasional, dan mendapatkan status terakreditasi dari Badan Akreditasi Nasional Perguruan Tinggi.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                               <a href="http://kharisma.ac.id/" target="_blank" class="acampus"> <h4>Menjadi Bagian 
                                    <br>campus 
                                    <br> Kami!
                                    </h4>
                                    </a>
                            </div>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </section>




    <!-- PENGURUS UKM PADUAN SUARA Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Struktur Organisasi</h2>
                    <h3 class="section-subheading text-muted">Pengurus UKM paduan suara.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="asset/img/team/2.2.jpg" class="img-responsive img-circle imgpengurus" alt="">
                        <h4>???????</h4>
                        <p class="text-muted">Sekertaris UKM</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="asset/img/team/1.1.jpg" class="img-responsive img-circle imgpengurus alt="">
                        <h4>suwandy sumbogo</h4>
                        <p class="text-muted">Ketua UKM </p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="https://web.facebook.com/suwandysumbogo" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="asset/img/team/3.jpg" class="img-responsive img-circle imgpengurus" alt="">
                        <h4>??????</h4>
                        <p class="text-muted">Wakil ketua UKM</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Bertugas mengurus kegiatan UKM dan membuat UKM menjadi Aktiv dalam mengikuti berbagai kegiatan.</p>
                </div>
            </div>
        </div>
    </section>



    <!-- BAGIAN COMMENT BOX -->
      <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.8&appId=1431174593584141";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


        <div class="fb-comments" data-href="https://www.facebook.com/profile.php?id=100014975911637" data-width="100%" data-numposts="5"></div>
    <!-- ***************************************************** -->

            </div>
        </div>
