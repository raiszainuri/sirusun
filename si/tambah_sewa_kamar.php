<?php require('../hnf/header.php');  ?>
<section class="content-header">
    <h1>
        Sewa Kamar
    </h1>
    <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> SIRusun</a></li>
        <li><a href="sewa_kamar.php"> Daftar Penyewa</a></li>
        <li class="active">Sewa kamar</li>
    </ol>
</section>
<section class="content ">
    <div class="box box-danger">
        <br>
            <div class="box-header with-border">
              <center><label class="text-center"><h3>BADAN PENGELOLA RUSUNAWA </h3><h2 >STMIK TASIKMALAYA</h2></label></center>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="" action="" class="form-horizontal">
                <div class="box-body">
                 <input value="" type="hidden" name="id">

                 <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Mulai :</label>

                  <div class="col-sm-8">
                    <input type="date" name="" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">ID User :</label>

                  <div class="col-sm-8">
                    <select name="" class="form-control">
                      <option></option>
                      <option></option>
                      <option></option>
                    </select>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-2 control-label">ID Kamar :</label>

                  <div class="col-sm-8">
                    <select name="" class="form-control">
                      <option></option>
                      <option></option>
                      <option></option>
                    </select>
                  </div>
                </div>
                
                 <div class="form-group">
                  <label class="col-sm-2"></label>

                  <div class="col-sm-8">
                    <input type="submit" name="" class="btn btn-sm btn-success">
                  </div>
                </div>

              </div>
            </form>
    </div>
</section>
<?php require('../hnf/footer.php');  ?>