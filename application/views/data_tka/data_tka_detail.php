<?php if ($this->session->flashdata('flash')) : ?>
    <div class="alert alert-success fade show" role="alert">Data Berhasil <?= $this->session->flashdata('flash'); ?> .</div>
<?php endif; ?>
<div class="row">
    <div class="col-lg-6">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Profil TKA</h5>
                <table class="mb-0 table">
                    <tbody>
                        <tr>
                            <th>Nama Mandarin</th>
                            <td><?= $tka['nama_mandarin']; ?></td>
                        </tr>
                        <tr>
                            <th>Nama Latin</th>
                            <td><?= $tka['nama_latin']; ?></td>
                        </tr>
                        <tr>
                            <th>Passport</th>
                            <td><?= $tka['passport']; ?></td>
                        </tr>
                        <tr>
                            <th>Nama PT</th>
                            <td><?= $pt['nama_pt']; ?></td>
                        </tr>
                        <tr>
                            <th>Expired Passport</th>
                            <td><?= date('d-m-Y', $tka['expired_passport']); ?></td>
                        </tr>
                        <tr>
                            <th>Tanggal Lahir</th>
                            <td><?= date('d-m-Y', $tka['tgl_lahir']); ?></td>
                        </tr>
                        <tr>
                            <th>Kewarganegaraan</th>
                            <td><?= $tka['kewarganegaraan']; ?></td>
                        </tr>
                        <tr>
                            <th>Keterangan</th>
                            <td><?= $tka['ket']; ?></td>
                        </tr>
                        <tr>
                            <th>Input By</th>
                            <td><?= $user['nama']; ?></td>
                        </tr>
                        <tr>
                            <th>Tanggal Input</th>
                            <td><?= date('d-m-Y', $tka['tgl_input']); ?></td>
                        </tr>
                        <tr>
                            <th>Action</th>
                            <td><a href="<?= base_url('Data_Tka/edit/') ?><?= $tka['id']; ?>" class="badge badge-secondary">Edit</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Riwayat Visa</h5>
                <div class="scroll-area-sm">
                    <div class="scrollbar-container ps--active-y">
                        <table class="mb-0 table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama Visa</th>
                                    <th>Tanggal Awal</th>
                                    <th>Tanggal Expired</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($riwayat_visa211 as $visa211) : ?>
                                    <tr>
                                        <?php
                                        $this->db->select('visa');
                                        $this->db->from('jenis_visa');
                                        $this->db->where('id', $visa211['id_jenis_visa']);
                                        $query = $this->db->get();
                                        $data_jenis_visa = $query->row_array();
                                        $this->db->select('*');
                                        $this->db->from('visa_211');
                                        $this->db->where('id_penghubung', $visa211['id_penghubung_visa211']);
                                        $query = $this->db->get();
                                        $data_visa = $query->row_array();
                                        ?>
                                        <th><?= $data_jenis_visa['visa']; ?></th>
                                        <th><?= date('d-m-Y', $data_visa['tgl_awal']); ?></th>
                                        <th><?= date('d-m-Y', $data_visa['tgl_expired']); ?></th>
                                        <td><?= $visa211['status']; ?></td>
                                        <td>
                                            <a>Detail</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                <?php foreach ($riwayat_visa312 as $visa312) : ?>
                                    <tr>
                                        <?php
                                        $this->db->select('visa');
                                        $this->db->from('jenis_visa');
                                        $this->db->where('id', $visa312['id_jenis_visa']);
                                        $query = $this->db->get();
                                        $data_jenis_visa = $query->row_array();
                                        $this->db->select('*');
                                        $this->db->from('visa_312');
                                        $this->db->where('id_penghubung_visa', $visa312['id_penghubung_visa312']);
                                        $query = $this->db->get();
                                        $data_visa = $query->row_array();
                                        ?>
                                        <th><?= $data_jenis_visa['visa']; ?></th>
                                        <th><?= date('d-m-Y', $data_visa['tgl_awal']); ?></th>
                                        <th><?= date('d-m-Y', $data_visa['tgl_expired']); ?></th>
                                        <td><?= $visa312['status']; ?></td>
                                        <td>
                                            <a>Detail</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Riwayat Voucher
            </div>

            <div class="table-responsive" style="padding: 10px;">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="example">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Nama Perusahaan</th>
                            <th class="text-center">Kode Voucher</th>
                            <th class="text-center">Jenis Proses</th>
                            <th class="text-center">Tanggal Input Voucher</th>
                            <th class="text-center">Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($riwayat_voucher as $voucher) :
                            $data_voucher = $this->db->get_where('voucher_visa', ['id_voucher' => $voucher['id_voucher_visa']])->row_array();
                            $data_pt = $this->db->get_where('pt', ['id' => $data_voucher['id_pt']])->row_array();
                            $data_proses = $this->db->get_where('jenis_proses', ['id_proses' => $data_voucher['id_jenis_proses']])->row_array();
                        ?>
                            <tr>
                                <td class="text-center text-muted"><?= $no; ?></td>
                                <td class="text-center"><?= $data_pt['nama_pt']; ?></td>
                                <td class="text-center"><?= $data_voucher['kode_voucher']; ?></td>
                                <td class="text-center"><?= $data_proses['nama_proses']; ?></td>
                                <td class="text-center"><?= date('d-m-Y', $data_voucher['tgl_input']); ?></td>
                                <td class="text-center">
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