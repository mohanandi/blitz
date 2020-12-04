<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header"><?= $subjudul; ?>
                <a href="<?= base_url('Data_Visa/filter_tka_visa312/'); ?><?= $data_jenis_visa['id']; ?>" type="button" class="btn-actions-pane-right mb-2 mr-2 btn btn-primary">Tambah Data <?= $subjudul; ?></a>
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
                            <th class="text-center">No RPTKA</th>
                            <th class="text-center">Jabatan</th>
                            <th class="text-center">Tanggal Input</th>
                            <th class="text-center">Input By</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($data_pengguna_visa as $data_pengguna) :
                            $data_visa = $this->db->get_where('visa_312', ['id_penghubung_visa' => $data_pengguna['id_penghubung_visa312']])->row_array();
                            $this->db->select(array('id', 'nama_latin', 'passport', 'id_pt'));
                            $this->db->from('tka');
                            $this->db->where('id', $data_pengguna['id_tka']);
                            $query_tka = $this->db->get();
                            $data_tka = $query_tka->row_array();
                            $this->db->select('nama_pt');
                            $this->db->from('pt');
                            $this->db->where('id', $data_tka['id_pt']);
                            $query_pt = $this->db->get();
                            $data_pt = $query_pt->row_array();
                        ?>
                            <tr>
                                <td class="text-center"><?= $no; ?></td>
                                <td class="text-center"><?= $data_pt['nama_pt']; ?></td>
                                <td class="text-center"><?= $data_tka['passport']; ?></td>
                                <td class="text-center"><?= $data_tka['nama_latin']; ?></td>
                                <td class="text-center"><?= date('d-m-Y', $data_visa['tgl_awal']); ?></td>
                                <td class="text-center"><?= date('d-m-Y', $data_visa['tgl_expired']); ?></td>
                                <td class="text-center"><?= $data_pengguna['id_rptka']; ?></td>
                                <td class="text-center"><?= $data_pengguna['id_jabatan']; ?></td>
                                <td class="text-center"><?= date('d-m-Y', $data_visa['tgl_input']); ?></td>
                                <td class="text-center"><?= $data_visa['input_by_id']; ?></td>
                                <td class="text-center">
                                    <a href="" class="badge badge-success">Detail</a>
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