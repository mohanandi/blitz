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
                            <th class="text-center">NAMA</th>
                            <th class="text-center">EMAIL</th>
                            <th class="text-center">ROLE</th>
                            <th class="text-center">PIC PT</th>
                            <th class="text-center">STATUS</th>
                            <th class="text-center">LAST LOGIN</th>
                            <th class="text-center">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($user as $us) : ?>
                            <tr>
                                <td class="text-center text-muted"><?= $no; ?></td>
                                <td class="text-center"><?= $us['nama']; ?></td>
                                <td class="text-center"><?= $us['email'] ?></td>
                                <td class="text-center"><?= $us['role'] ?></td>
                                <td class="text-center"><?= $us['pic_pt'] ?></td>
                                <td class="text-center"><?= $us['is_active'] ?></td>
                                <td class="text-center"><?= date('d-m-Y G:i:s', $us['last_login']); ?></td>
                                <td class="text-center"></td>
                            </tr>
                        <?php $no++;
                        endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>