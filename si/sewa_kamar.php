<?php require('../hnf/header.php');  ?>
<<<<<<< HEAD
=======

>>>>>>> 4b690f5c3ba0a0b1e1f09b86ff078cf7c733ff61
<section class="content-header">
    <h1>
        Sewa Kamar
    </h1>
    <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> SIRusun</a></li>
        <li><a href="daftar_warga.php"> Daftar Kamar</a></li>
        <li class="active">Sewa kamar</li>
<<<<<<< HEAD
    </ol>
</section>
<section class="content ">
    <div class="table-responsive table-responsive-lg table-responsive-md table-responsive-sm">
        <div class="box box-danger">
            <br>
            <div class="box-header">
                <a href="tambah_sewa_kamar.php"><button type="button" class="btn btn-primary"> Tambah Baru</button></a>
                <button type="button" class="btn btn-success">Laporan</button>
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-condensed ">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tanggal</th>
                            <th>Kamar</th>
                            <th>User</th>
                            <th></th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                                  for ($i=1; $i <5 ; $i++) { ?>
                        <tr>
                            <td>
                                <?php echo $i;  ?>
                            </td>
                            <td>10-13-2021</td>
                            <td>
                                <?php echo $i+$i;  ?>
                            </td>
                            <td>
                                <?php echo $i+$i-1; ?>
                            </td>
                            <td><a href="Transaksi_detail.php">Detail</a></td>
                            <td class="text-center">
                                <a href="ubah_setting.php" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> </a>
                                <a name="" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?php require('../hnf/footer.php');  ?>
=======
      </ol>
    </section>
    <section class="content ">

    

    </section>


<?php require('../hnf/footer.php');  ?>
>>>>>>> 4b690f5c3ba0a0b1e1f09b86ff078cf7c733ff61
