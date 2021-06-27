<?php require('../hnf/header.php');  ?>
<section class="content-header">
    <h1>
        Ubah Setting
    </h1>
    <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> SIRusun</a></li>
        <li><a class="active"> Ubah Setting</a></li>
    </ol>
</section>
<section class="content ">
    <div class="box box-danger ">
        <br>
        <div class="box-body">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <form method="get" action="" class="form-horizontal">
                        <input value="" type="hidden" name="id">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Nama setting </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Keterangan </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="" rows="5"> </textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9">
                                <input class="btn btn-sm btn-primary" type="submit" value="Ubah"></input>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
    <?php require('../hnf/footer.php');  ?>
