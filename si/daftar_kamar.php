<?php require('../hnf/header.php');  ?>

<section class="content-header">
      <h1>
        Daftar Kamar
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> SIRusun</a></li>
        <li class="active">Daftar kamar</li>
      </ol>
    </section>
    <section class="content ">
    <div class="table-responsive">
      <div class="box box-danger">
      <br>
        <div class="box-header">
        <a href="tambah_kamar.php"><button type="button" class="btn btn-primary"> Tambah Baru</button></a>
        <button type="button" class="btn btn-success">Laporan</button>
        </div>

            <div class="box-body">
              <table id="example1" class="table table-bordered table-condensed">
                <thead >
                <tr>
                  <th >#</th>
                  <th>No Ruangan</th>
                  <th>Lantai</th>
                  <th>Fasilitas</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
               <tr>
                 <td>1</td>
                 <td>1</td>
                 <td>1</td>
                 <td>Tempat tidur 2 tingkat, wc 2 ruang, lemari pakaian 2, kursi 2, meja belajar 2</td>
                 <td><span class="label label-danger">penuh</span></td>
                 <td>
                    <a href="edit_kamar.php" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> </a>
                    <a name=""  class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a>

                   
                 </td>
               </tr> 

               <tr>
                 <td>2</td>
                 <td>2</td>
                 <td>1</td>
                 <td>Tempat tidur 2 tingkat, wc 2 ruang, lemari pakaian 2, kursi 2, meja belajar 2</td>
                 <td><span class="label label-success">kosong</span></td>
                 <td>
                    <a href="edit_kamar.php" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> </a>
                    <a name=""  class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a>

                   
                 </td>
               </tr>

                <tr>
                 <td>3</td>
                 <td>5</td>
                 <td>1</td>
                 <td>Tempat tidur 2 tingkat, wc 2 ruang, lemari pakaian 2, kursi 2, meja belajar 2</td>
                 <td><span class="label label-primary">Terisi 1 orang</span></td>
                 <td>
                    <a href="edit_kamar.php" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> </a>
                    <a name=""  class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a>

                   
                 </td>
               </tr>

                <tr>
                 <td>4</td>
                 <td>3</td>
                 <td>1</td>
                 <td>Tempat tidur 2 tingkat, wc 2 ruang, lemari pakaian 2, kursi 2, meja belajar 2</td>
                 <td><span class="label label-warning">Dalam perawatan</span></td>
                 <td>
                    <a href="edit_kamar.php" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> </a>
                    <a name=""  class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a>

                   
                 </td>
               </tr>
                  
                   <tr>
                 <td>5</td>
                 <td>6</td>
                 <td>1</td>
                 <td>Tempat tidur 2 tingkat, wc 2 ruang, lemari pakaian 2, kursi 2, meja belajar 2</td>
                 <td><span class="label label-danger">penuh</span></td>
                 <td>
                    <a href="edit_kamar.php" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> </a>
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