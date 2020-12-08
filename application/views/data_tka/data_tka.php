<?php if ($this->session->flashdata('flash')) : ?>
    <div class="alert alert-success fade show" role="alert">Data Berhasil <?= $this->session->flashdata('flash'); ?> .</div>
<?php endif; ?>
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
                            <th class="text-center">Nama Mandarin</th>
                            <th class="text-center">Nama Latin</th>
                            <th class="text-center">Nama PT</th>
                            <th class="text-center">Passport</th>
                            <th class="text-center">Keterangan</th>
                            <th class="text-center">input By</th>
                            <th class="text-center">Tanggal Input</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($id_tka as $tka) : ?>
                            <tr>
                                <?php $data_tka = $this->db->get_where('tka', ['id' => $tka['id']])->row_array(); ?>
                                <td class="text-center text-muted"><?= $no; ?></td>
                                <td class="text-center"><?= $data_tka['nama_mandarin']; ?></td>
                                <td class="text-center"><?= $data_tka['nama_latin']; ?></td>
                                <?php $data_pt = $this->db->get_where('pt', ['id' => $data_tka['id_pt']])->row_array(); ?>
                                <td class="text-center"><?= $data_pt['nama_pt']; ?></td>
                                <td class="text-center"><?= $data_tka['passport']; ?></td>
                                <td class="text-center"><?= $data_tka['ket']; ?></td>
                                <?php $data_user = $this->db->get_where('user', ['id' => $data_tka['input_by_id']])->row_array(); ?>
                                <td class="text-center"><?= $data_user['nama']; ?></td>
                                <td class="text-center"><?= date('d-m-Y', $data_tka['tgl_input']); ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url('Data_Tka/detail/'); ?><?= $data_tka['id']; ?>" class="badge badge-success">Detail</a>
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