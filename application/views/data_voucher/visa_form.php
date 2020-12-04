<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Data Spesifikasi Voucher
            </div>
            <div class="table-responsive" style="padding: 10px;">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="atas">
                    <thead>
                        <tr>
                            <th class="text-center">Nama PT</th>
                            <th class="text-center">Kategori Voucher</th>
                            <th class="text-center">Jenis Proses</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            $this->db->select('nama_pt');
                            $this->db->from('pt');
                            $this->db->where('id', $id_pt);
                            $query_pt = $this->db->get();
                            $data_pt = $query_pt->row_array();
                            $this->db->select('kategori');
                            $this->db->from('kategori_voucher');
                            $this->db->where('id_kategori_voucher', $id_kategori);
                            $query = $this->db->get();
                            $data_kategori = $query->row_array();
                            $this->db->select('nama_proses');
                            $this->db->from('jenis_proses');
                            $this->db->where('id_proses', $id_jenis_proses);
                            $query = $this->db->get();
                            $data_jenis_proses = $query->row_array();
                            ?>
                            <td class="text-center"><?= $data_pt['nama_pt']; ?></td>
                            <td class="text-center"><?= $data_kategori['kategori']; ?></td>
                            <td class="text-center"><?= $data_jenis_proses['nama_proses']; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header"> Pilih Data TKA untuk Voucher
            </div>
            <div class="table-responsive" style="padding: 10px;">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="example">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">No Passport</th>
                            <th class="text-center">Nama Mandarin</th>
                            <th class="text-center">Nama Latin</th>
                            <th class="text-center">Pilih</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">data</td>
                            <td class="text-center">data</td>
                            <td class="text-center">data</td>
                            <td class="text-center">data</td>
                            <td class="text-center">
                                <a href="">Pilih</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>