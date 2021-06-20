<?php require('../hnf/header.html');?>
  
  <!-- content:start -->
 <section class="content-header">
      <h1>
        Beranda
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> SIRusun</a></li>
        <li class="active">Beranda</li>
      </ol>
    </section>

    <section class="content" >
    <div class="row">
        <div class="col-lg-12">
           <div class="jumbotron">
              <h2 class="title">Sistem Informasi Rusunawa</h2>
              <p >STMIK Tasikmalaya</p>
           </div>
      </div>    
    </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-default customBox" >
            <div class="inner">
              <h3>25</h3>

              <p>Warga Rusun</p>
            </div>
            <div class="icon">
              <i class="fa fa-users customFa"></i>
            </div>
            <a href="daftar_warga.php" class="small-box-footer">Info lebih lanjut <i class="fa fa-arrow-circle-right "></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-md-6 col-xs-12">
          <!-- small box -->
          <div class="small-box customBox">
            <div class="inner">
              <h3>44</h3>

              <p>Kamar</p>
            </div>
            <div class="icon">
              <i class="fa fa-bed customFa"  ></i>
            </div>
            <a href="daftar_kamar.php" class="small-box-footer" >Info lebih lanjut <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-md-6 col-xs-12">
          <!-- small box -->
          <div class="small-box customBox">
            <div class="inner">
              <h3>12</h3>

              <p>Seputar Informasi</p>
            </div>
            <div class="icon">
              <i class="fa fa-info-circle customFa"  ></i>
            </div>
            <a href="#" class="small-box-footer">Info lebih lanjut <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-md-6 col-xs-12">
          <!-- small box -->
          <div class="small-box customBox">
            <div class="inner">
              <h3>1</h3>

              <p>Admin</p>
            </div>
            <div class="icon">
              <i class="fa fa-user-secret customFa"  ></i>
            </div>
            <a href="#" class="small-box-footer">Info lebih lanjut <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-4 col-md-6 col-xs-12">
          <!-- small box -->
          <div class="small-box customBox">
            <div class="inner">
              <h3>Jadwal</h3>

              <p>Piket</p>
            </div>
            <div class="icon">
              <i class="fa fa-clipboard customFa"  ></i>
            </div>
            <a href="jadwal_piket.php" class="small-box-footer">Info lebih lanjut <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-xs-12">
          <!-- small box -->
          <div class="small-box customBox">
            <div class="inner">
              <h3>1</h3>

              <p>Perpesanan</p>
            </div>
            <div class="icon">
              <i class="fa fa-envelope customFa"  ></i>
            </div>
            <a href="#" class="small-box-footer">Info lebih lanjut <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


      </div>
      </section>

       <section class="content-header">
      <h1>
        Informasi
      </h1>
    </section>

    <section class="content">
      <div class="row">

      <!-- menampilkan informasi -->
       <?php 
                    for ($i=1; $i <5 ; $i++) { ?>
      <div class="col-lg-6 col-xs-12">
                    
        <div class="box box-widget" style="border: 1px solid #3c8dbc;margin:1%;">
            <div class="box-header with-border" >
              <div class="user-block">
                <img class="img-circle" src="../dist/img/avatar.png" alt="User Image">
                <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
                <span class="description">Shared publicly - 7:30 PM Today</span>
              </div>
              <!-- /.user-block -->
              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="" data-original-title="Mark as read"></button>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- post text -->
              <p>Far far away, behind the word mountains, far from the
                countries Vokalia and Consonantia, there live the blind
                texts. Separated they live in Bookmarksgrove right at</p>

              <p>the coast of the Semantics, a large language ocean.
                A small river named Duden flows by their place and supplies
                it with the necessary regelialia. It is a paradisematic
                country, in which roasted parts of sentences fly into
                your mouth.</p>
            </div>
         </div>
         </div>

          <?php } ?>   
      </div>
    </section>
  <!-- content:end -->

<?php require('../hnf/footer.html'); ?>