<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Input Spesifikasi Voucher
            </div>
            <div class="table-responsive" style="padding: 20px;">
                <form class="" method="POST">
                    <div class="position-relative row form-group">
                        <label for="NamaTKA" class="col-sm-2 col-form-label">Nama PT</label>
                        <div class="col-sm-10">
                            <select name="nama_pt" id="nama_pt" class="form-control">
                                <option value="">Select PT</option>
                                <?php foreach ($data_pt as $pt) : ?>
                                    <option value="<?= $pt['id']; ?>"><?= $pt['nama_pt']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('nama_pt'); ?>
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="Kewarganegaraan" class="col-sm-2 col-form-label">Kategori</label>
                        <div class="col-sm-10">
                            <select name="kategori" id="kategori" class="form-control">
                                <option value="">Select Kategori</option>
                                <?php foreach ($data_kategori as $kategori) : ?>
                                    <option value="<?= $kategori['id_kategori_voucher']; ?>"><?= $kategori['kategori']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('kategori'); ?>
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="passport" class="col-sm-2 col-form-label">Jenis Proses</label>
                        <div class="col-sm-10">
                            <select name="jenis_proses" id="jenis_proses" class="form-control">
                                <option value="">Select Jenis Proses</option>
                                <?php foreach ($data_jenis_proses as $proses) : ?>
                                    <option value="<?= $proses['id_proses']; ?>"><?= $proses['nama_proses']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('jenis_proses'); ?>
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