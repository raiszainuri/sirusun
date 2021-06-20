<?php require('../hnf/header.html');  ?>

 <section class="content-header">
      <h1>
        Jadwal Piket
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> SIRusun</a></li>
        <li><a class="active"> Jadwal Piket</a></li>
      </ol>
    </section>
    <section class="content ">
    <div class="box box-danger ">
    <br>

            <div class="box-header">
            </div>


            <div class="box-body" style="margin:0 auto; width: 80%;">
              <form method="" action="" class="form-horizontal">
                  <div class="box-body">

                     <input value="" type="hidden" name="id">

                     <div class="form-group">
                      <label class="col-sm-2 control-label">Hari :</label>

                      <div class="col-sm-9">
                      <input type="text" class="form-control" name="">
                      </div>
                    </div>

                     <div class="form-group">
                      <label class="col-sm-2 control-label">Kelompok :</label>

                      <div class="col-sm-9">
                        <textarea class="form-control" name="" rows="5"> </textarea>
                      </div>
                    </div>


                    <div class="form-group">
                    <div class="col-sm-2"></div>
                      <div class="col-sm-9">
                        <input class="btn btn-sm btn-primary" type="submit"></input>
                      </div>
                    </div>

                  </div>
                </form>

           
        </div>
    </div>
    </section>

   
    <section class="content ">
    <div class="box box-danger">
    <br>
            <div class="table-responsive">

            <div class="box-header">
              <button type="button" class="btn btn-success">Laporan</button>

            </div>

            <div class="box-body">
               <div class="row">

      <!-- menampilkan informasi -->
       <?php 
                    for ($i=1; $i <8 ; $i++) { ?>
      <div class="col-lg-4 col-xs-12">
                    
        <div class="box box-widget" style="border: 1px solid #3c8dbc;margin:1%;">
            <div class="box-header with-border" >
              <div class="user-block">
                <center><h3>Hari Senin</h3></center>
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
              <center>
              <label>
              <ol>
                <li>Yayas Husni M</li>
                <li>Ari pebriana</li>  
                <li>Diana</li>  
                <li>Rizal</li>  
                <li>lalan</li>  
              </ol>
              </label>
              </center>

            </div>

            <div class="box-footer">
              <a href="ubah_piket.php" class="btn btn-primary btn-block">Ubah</a>
              <button type="button" class="btn btn-danger btn-block">Hapus</button>
            </div>

         </div>
         </div>

          <?php } ?>   
      </div>
            </div>
                <!-- /.box-body -->

      </div>
     </div>
    </section>


<?php require('../hnf/footer.html');  ?>
