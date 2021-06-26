<?php require('../hnf/header.php');  ?>

<section class="content-header">
      <h1>
        Edit Kamar
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> SIRusun</a></li>
        <li><a href="daftar_warga.php"> Daftar kamar</a></li>
        <li class="active">Edit kamar</li>
      </ol>
    </section>
    <section class="content ">

    <div class="box box-danger">
        <br>
            <div class="box-header with-border">
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="" action="" class="form-horizontal">
              <div class="box-body">

                 <input value="" type="hidden" name="id">

                 <div class="form-group">
                  <label class="col-sm-2 control-label">No Ruangan :</label>

                  <div class="col-sm-9">
                  <select class="form-control">
                  <?php 
                    for ($i=1; $i <13 ; $i++) { 
                   echo "<option value'".$i."'>".$i."</option> ";
                    }
                    ?>
                  </select>
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-sm-2 control-label">Lantai :</label>

                  <div class="col-sm-9">
                  <div class="radio">
                    <label>
                      <input value="" type="radio" name=" " id=" " value="1" > Lantai 1
                    </label>
                    </div>

                  <div class="radio">
                    <label>
                      <input value="" type="radio" name=" " id=" " value="2" > Lantai 2
                    </label>
                    </div>

                  <div class="radio">
                    <label>
                      <input value="" type="radio" name=" " id=" " value="3" > Lantai 3
                    </label>
                    </div>

                  <div class="radio">
                    <label>
                      <input value="" type="radio" name=" " id=" " value="4" > Lantai 4
                    </label>
                    </div>
                  </div>
                </div>


                 <div class="form-group">
                  <label class="col-sm-2 control-label">Fasilitas :</label>

                  <div class="col-sm-9">
                    <textarea class="form-control" rows="5"> </textarea>
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-sm-2 control-label">Status :</label>

                  <div class="col-sm-9">

                      
                    <div class="radio">
                    <label>
                      <input value="" type="radio" name=" " id=" " value="Dalam perawatan" ><label class="label label-danger">Penuh </label>
                    </label>
                    </div>


                    <div class="radio">
                    <label>
                      <input value="" type="radio" name=" " id=" " value="Dalam perawatan" ><label class="label label-warning"> Dalam perawatan </label>
                    </label>
                    </div>


                       <div class="radio">
                    <label>
                      <input value="" type="radio" name=" " id=" " value="Terisi 1" > <label class="label label-primary">Terisi 1 </label>
                    </label>
                    </div>


                      <div class="radio">
                    <label>
                      <input value="" type="radio" name=" " id=" " value="Kosong" > <label class="label label-success">Kosong </label>
                    </label>
                    </div>

                  </div>
                </div>

             
               
              </div>
              <!-- /.box-body -->
              <div class="box-footer text-center">
                <button type="submit" class="btn btn-primary">Ubah</button>
                <button type="reset" class="btn btn-danger">Reset</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>

    </section>


<?php require('../hnf/footer.php');  ?>
