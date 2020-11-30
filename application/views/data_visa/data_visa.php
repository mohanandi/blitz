<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Data Visa
            </div>
            <div class="table-responsive" style="padding: 10px;">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="example">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Nama Visa</th>
                            <th class="text-center">Visa Aktif</th>
                            <th class="text-center">Visa Non-Aktif</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($data_jenis_visa as $jenis_visa) :
                            if (($jenis_visa['id'] == 1) or ($jenis_visa['id'] == 2)) :
                            else : ?>
                                <tr>
                                    <td class="text-center"><?= $no; ?></td>
                                    <td class="text-center"><?= $jenis_visa['visa']; ?></td>
                                    <?php if ($jenis_visa['kategori_id'] == 1) : ?>
                                        <td class="text-center">3</td>
                                        <td class="text-center">3</td>
                                        <td class="text-center">
                                            <a href="<?= base_url('Data_Visa/visa312/') ?><?= $jenis_visa['id']; ?>" class="badge badge-success">Detail</a>
                                        </td>
                                    <?php elseif ($jenis_visa['kategori_id'] == 2) : ?>
                                        <td class="text-center">10</td>
                                        <td class="text-center">10</td>
                                        <td class="text-center">
                                            <a href="<?= base_url('Data_Visa/visa211/') ?><?= $jenis_visa['id']; ?>" class="badge badge-success">Detail</a>
                                        </td>
                                    <?php endif; ?>
                                </tr>
                        <?php $no++;
                            endif;
                        endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>