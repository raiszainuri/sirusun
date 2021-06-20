<?php require('../hnf/header.php');  ?>

 <section class="content-header">
      <h1>
        Informasi
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> SIRusun</a></li>
        <li><a class="active"> Informasi</a></li>
      </ol>
    </section>
    <section class="content ">
    <div class="box box-danger ">
    <br>

            <div class="box-header">
              Tambah Informasi
            </div>


            <div class="box-body" style="margin:0 auto; width: 80%;">
              <form method="" action="" class="form-horizontal">
                  <div class="box-body">

                     <input value="" type="hidden" name="id">

                     <div class="form-group">
                      <label class="col-sm-2 control-label">Judul:</label>

                      <div class="col-sm-9">
                      <input type="text" class="form-control" name="">
                      </div>
                    </div>

                     <div class="form-group">
                      <label class="col-sm-2 control-label">Konten :</label>

                      <div class="col-sm-9">
                        <textarea class="form-control" name="" rows="5"> </textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Tanggal :</label>
                      <div class="col-sm-9">
                        <input class="form-control" name="" type="date"></input>
                      </div>
                    </div>

                      <div class="form-group">
                      <label class="col-sm-2 control-label">Id user :</label>
                      <div class="col-sm-9">
                        <input class="form-control" name="" type="text"></input>
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
                  <table id="example1" class="table table-bordered table-condensed">
                    <thead >
                    <tr>
                      <th >#</th>
                      <th>Judul</th>
                      <th>Konten</th>
                      <th>Tanggal</th>
                      <th>Id User</th>
                      <th>Aksi</th>
                    </tr>
                    </thead>

                    <tbody>

                       <?php 
                    for ($i=1; $i <5 ; $i++) { ?>

                      <tr>
                        <td><?php echo $i;  ?> </td>
                        <td>Syarat Sewa Rusun</td>
                        <td>       <br>
                                  1.KTP <br>
                                  2.Materai 6000 <br>
                                  3.Mengisi Formulir
                        </td>
                        <td>01-12-2012</td>
                        <td>01</td>
                        <td>
                          <a href="edit_kamar.php" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> </a>
                          <a name=""  class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a>
                        </td>
                      </tr>
                    <?php } ?>   

                    </tbody>
                  </table>
                </div>
                <!-- /.box-body -->

      </div>
     </div>
    </section>


<?php require('../hnf/footer.php');  ?>
