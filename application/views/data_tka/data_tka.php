<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Data TKA
                <a href="<?= base_url('Data_Tka/tambah'); ?>" type="button" class="btn-actions-pane-right mb-2 mr-2 btn btn-primary">Tambah TKA</a>
            </div>
            <div class="table-responsive" style="padding: 10px;">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="example">
                    <thead>
                        <tr>
                            <th class="text-center">NO</th>
                            <th class="text-center">NAMA MANDARIN</th>
                            <th class="text-center">NAMA LATIN</th>
                            <th class="text-center">NAMA PT</th>
                            <th class="text-center">KEWARGANEGARAAN</th>
                            <th class="text-center">PASSPORT</th>
                            <th class="text-center">EXPIRED PASSPORT</th>
                            <th class="text-center">TANGGAL LAHIR</th>
                            <th class="text-center">KETERANGAN</th>
                            <th class="text-center"><a href="<?= base_url('Data_Tka/detail'); ?>">Detail</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($tka as $data_tka) : ?>
                            <tr>
                                <td class="text-center text-muted"><?= $no; ?></td>
                                <td class="text-center"><?= $data_tka['nama_mandarin']; ?></td>
                                <td class="text-center"><?= $data_tka['nama_latin']; ?></td>
                                <td class="text-center"><?= $data_tka['id_pt']; ?></td>
                                <td class="text-center"><?= $data_tka['kewarganegaraan']; ?></td>
                                <td class="text-center"><?= $data_tka['passport']; ?></td>
                                <td class="text-center"><?= date('d F Y', $data_tka['expired_passport']); ?></td>
                                <td class="text-center"><?= date('d-m-Y', $data_tka['tgl_lahir']); ?></td>
                                <td class="text-center"><?= $data_tka['ket']; ?></td>
                                <td class="text-center">
                                    <div class="badge badge-success">Detail</div>
                                </td>
                            </tr>
                        <?php $no++;
                        endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>