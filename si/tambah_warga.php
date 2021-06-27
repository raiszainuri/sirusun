<?php 

require('../hnf/header.php'); 
require('../controller/user.php');	

?>

<section class="content-header">
      <h1>
        Tambah Warga Rusunawa
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> SIRusun</a></li>
        <li><a href="daftar_warga.php"> Daftar warga</a></li>
        <li class="active">Tambah Daftar warga</li>
      </ol>
    </section>
    <section class="content ">

    <div class="box box-danger">
    		<br>
            <div class="box-header with-border">
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" class="form-horizontal">
              <div class="box-body">

                 <input type="hidden" name="id">

              	 <div class="form-group">
                  <label class="col-sm-2 control-label">No Pokok</label>

                  <div class="col-sm-9">
                    <input type="text" name="no_pokok" class="form-control"  placeholder="No pokok" required>
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-9">
                    <input type="text" name="nama" class="form-control"  placeholder="Nama" required>
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Lahir</label>

                  <div class="col-sm-9">
                    <input type="date" name="tgl_lahir" class="form-control"  placeholder="Tanggal Lahir" required>
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis Kelamin</label>

                  <div class="col-sm-9">
                   <div class="radio">
                    <label>
                      <input type="radio" name="r_jk" id="" value="Laki-laki" >
                     Laki-laki
                    </label>
                  		&nbsp;&nbsp;
                    <label>
                      <input type="radio" name="r_jk" id=" " value="Perempuan" >
                     Perempuan
                    </label>
                  </div>

                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-9">
                    <textarea class="form-control" name="alamat" rows="5" required> </textarea>
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-sm-2 control-label">No Hp</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="no_hp" placeholder="No Hp" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-9">
                    <input type="email" name="email" class="form-control"  placeholder="Email" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-9">
                    <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password" required>
                  </div>
                </div>
               
              </div>
              <!-- /.box-body -->
              <div class="box-footer text-center">
                <button type="submit" name="btnTambahWarga" class="btn btn-primary">Tambah</button>
                <button type="submit" name="btnReset" class="btn btn-danger">Reset</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>

    </section>


<?php require('../hnf/footer.php');	?>
