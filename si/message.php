<?php require('../hnf/header.php');  ?>

<section class="content-header">
      <h1>
        Perpesanan
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> SIRusun</a></li>
        <li class="active">Perpesanan</li>
      </ol>
    </section>
    <section class="content ">
        <div class="table-responsive">
      <div class="box box-danger">
      <br>
        <div class="box-header">
        <button type="button" class="btn btn-success">Laporan</button>
        </div>

            <div class="box-body">
              <table id="example1" class="table table-bordered table-condensed">
                <thead >
                <tr>
                  <th >ID Message</th>
                  <th>ID User</th>
                  <th>ID USer</th>
                  <th>Last message</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                
                  <tr>
                  <td>4</td>
                  <td>Win 95+</td>
                  <td> 4 januari 2000</td>
                  <td>mohon maaf pak saya belum bayar bulan sekarang</td>
                  <td style="text-align: center;">
                    <a href="message_detail.php" class="btn btn-sm btn-primary"><i class="fa fa-comments"></i> </a>
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
