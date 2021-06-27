<?php require('../hnf/header.php');  ?>
<section class="content-header">
    <h1>
        Setting
    </h1>
    <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> SIRusun</a></li>
        <li><a class="active"> Setting</a></li>
    </ol>
</section>
<section class="content ">
    <div class="box box-danger ">
        <br>
        <div class="box-body">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <form method="" action="" class="form-horizontal">
                        <input value="" type="hidden" name="id">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Nama setting </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Keterangan </label>
                            <div class="col-sm-8">
                                <textarea class="form-control" name="" rows="5"> </textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-8">
                                <input class="btn btn-sm btn-primary" type="submit"></input>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-condensed">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Setting</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php 
                                  for ($i=1; $i <5 ; $i++) { ?>
                                <tr>
                                    <td><?php echo $i;  ?></td>
                                    <td>Harga Sewa Rusun</td>
                                    <td>Rp.300.000,00 per bulan
                                    </td>
                                    <td>
                                        <a href="ubah_setting.php" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> </a>
                                        <a name=""  class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a>
                                    </td>
                                </tr>
                                <?php } ?>   

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require('../hnf/footer.php');  ?>