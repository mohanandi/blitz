<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Tambah Data Harga
            </div>
            <div class="table-responsive" style="padding: 20px;">
                <form class="" method="POST">
                    <div class="position-relative row form-group">
                        <label for="NamaTKA" class="col-sm-2 col-form-label"><b>Jenis Proses</b></label>
                        <div class="col-sm-10">
                            <select name="jenis_proses" id="jenis_proses" class="form-control">
                                <option value="">Select Proses</option>
                                <?php foreach ($data_proses as $proses) : ?>
                                    <option value="<?= $proses['id_proses']; ?>"><?= $proses['nama_proses']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="Kewarganegaraan" class="col-sm-2 col-form-label"><b>Lokasi</b></label>
                        <div class="col-sm-10">
                            <input name="lokasi" id="lokasi" value="<?= set_value('lokasi'); ?>" placeholder="Lokasi" type="text" class="form-control">
                            <?= form_error('lokasi') ?>
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="passport" class="col-sm-2 col-form-label"><b>Harga (Rupiah)</b></label>
                        <div class="col-sm-10">
                            <input name="rupiah" id="rupiah" value="<?= set_value('rupiah'); ?>" placeholder="Rupiah" type="username" class="form-control">
                            <?= form_error('rupiah') ?>
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="expassport" class="col-sm-2 col-form-label"><b>Harga (Dollar)</b></label>
                        <div class="col-sm-10">
                            <input name="dollar" id="dollar" value="<?= set_value('dollar'); ?>" placeholder="Dollar" type="number" class="form-control">
                            <?= form_error('dollar') ?>
                        </div>
                    </div>
                    <div class="position-relative row form-check">
                        <div class="right">
                            <button type="submit" class="btn btn-success"><?= $button; ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>