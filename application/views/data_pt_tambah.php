<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Tambah PT
            </div>

            <div class="table-responsive" style="padding: 20px;">

                <form class="" action="" method="post">
                    <div class="position-relative row form-group"><label for="namapt" class="col-sm-2 col-form-label">Nama PT</label>
                        <div class="col-sm-10">
                            <input name="namapt" id="namapt" type="text" class="form-control" autofocus>

                            <?= form_error('namapt', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="position-relative row form-group"><label for="pic" class="col-sm-2 col-form-label">PIC</label>
                        <div class="col-sm-10">
                            <input name="pic" id="pic" type="text" class="form-control">
                            <?= form_error('pic', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="position-relative row form-group"><label for="client" class="col-sm-2 col-form-label">Nama Client</label>
                        <div class="col-sm-10">
                            <input name="client" id="client" type="text" class="form-control">
                            <?= form_error('client', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="position-relative row form-group"><label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input name="alamat" id="alamat" type="text" class="form-control">
                            <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="position-relative row form-group"><label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                            <input name="keterangan" id="keterangan" type="text" class="form-control">
                            <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="position-relative row form-check">
                        <div class="right">
                            <button class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>