<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header"><?= $subjudul; ?>
                <a href="<?= base_url('Data_Visa/filter_tka_visa211/'); ?><?= $data_jenis_visa['id']; ?>" type="button" class="btn-actions-pane-right mb-2 mr-2 btn btn-primary">Tambah Data <?= $subjudul; ?></a>
            </div>
            <div class="table-responsive" style="padding: 10px;">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="example">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Nama PT</th>
                            <th class="text-center">No Passport</th>
                            <th class="text-center">Nama Latin</th>
                            <th class="text-center">Tanggal Awal Visa</th>
                            <th class="text-center">Tanggal Expired Visa</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($data_pengguna_visa as $visa) : ?>
                            <tr>
                                <td class="text-center"><?= $no; ?></td>
                                <td class="text-center">Cao Ren</td>
                                <td class="text-center">曹仁</td>
                                <td class="text-center">440088KJL66</td>
                                <td class="text-center">440088KJL66</td>
                                <td class="text-center">440088KJL66</td>
                                <td class="text-center">440088KJL66</td>
                            </tr>
                        <?php $no++;
                        endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>