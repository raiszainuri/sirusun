<?php require('../hnf/header.php');  require('../controller/user.php'); ?>

<section class="content-header">
      <h1>
        Daftar Warga Rusunawa
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> SIRusun</a></li>
        <li class="active">Daftar warga</li>
      </ol>
    </section>
    <section class="content ">
    <div class="table-responsive">
      <div class="box box-danger">
      <br>
      	<div class="box-header">
      	<a href="tambah_warga.php"><button type="button" class="btn btn-primary"> Tambah Baru</button></a>
      	<button type="button" class="btn btn-success">Laporan</button>
      	</div>

            <div class="box-body">
              <table id="example1" class="table table-bordered table-condensed">
                <thead >
                <tr>
                  <th >No</th>
                  <th>No Pokok</th>
                  <th>Nama</th>
                  <th>Tanngal Lahir</th>
                  <th>Jenis kelamin</th>
                  <th>No HP</th>
                  <th>E-mail</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4 januari 2000</td>
                  <td>laki-laki</td>
                  <td>088203523</td>
                  <td>conto@email.com</td>
                  <td style="text-align: center;">
                  	<a href="edit_warga.php" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> </a>
                  	<a name=""  class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a>
                  </td>
                </tr>

                  <tr>
                  <td>5	</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4 januari 2000</td>
                  <td>laki-laki</td>
                  <td>088203523</td>
                  <td>conto@email.com</td>
                  <td style="text-align: center;">
                  	<a href="edit_warga.php" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                  	<a name=""  class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a>
                  </td>
                </tr>

                  <tr>
                  <td>2</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4 januari 2000</td>
                  <td>laki-laki</td>
                  <td>088203523</td>
                  <td>conto@email.com</td>

                  <td style="text-align: center;">
                  	<a href="edit_warga.php" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> </a>
                  	<a name=""  class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a>
                  </td>
                </tr>

                  <tr>
                  <td>3</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4 januari 2000</td>
                  <td>laki-laki</td>
                  <td>088203523</td>
                  <td>conto@email.com</td>
                  <td style="text-align: center;">
                  	<a href="edit_warga.php" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> </a>
                  	<a name=""  class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a>
                  </td>
                </tr>

                  <tr>
                  <td>4</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4 januari 2000</td>
                  <td>laki-laki</td>
                  <td>088203523</td>
                  <td>conto@email.com</td>
                  <td style="text-align: center;">
                  	<a href="edit_warga.php" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> </a>
                  	<a name=""  class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a>
                  </td>
                </tr>
                              
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
     
     </div>
    	
    </section>

 

<?php require('../hnf/footer.php');  ?>
