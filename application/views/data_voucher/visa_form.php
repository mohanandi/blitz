<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Data Spesifikasi Voucher
            </div>
            <div class="table-responsive" style="padding: 10px;">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="atas">
                    <thead>
                        <tr>
                            <th class="text-center">Nama Perusahaan</th>
                            <th class="text-center">Nama Client</th>
                            <th class="text-center">Kategori Voucher</th>
                            <th class="text-center">Jenis Proses</th>
                            <th class="text-center">Lokasi</th>
                            <th class="text-center">Mata_Uang</th>
                            <th class="text-center">Note</th>
                            <th class="text-center">Staff OP</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            $total = 0;
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
                            $this->db->select('lokasi');
                            $this->db->from('harga');
                            $this->db->where('id_harga', $lokasi);
                            $query = $this->db->get();
                            $data_lokasi = $query->row_array();
                            ?>
                            <td class="text-center"><?= $data_pt['nama_pt']; ?></td>
                            <td class="text-center"><?= $nama_client; ?></td>
                            <td class="text-center"><?= $data_kategori['kategori']; ?></td>
                            <td class="text-center"><?= $data_jenis_proses['nama_proses']; ?></td>
                            <td class="text-center"><?= $data_lokasi['lokasi']; ?></td>
                            <td class="text-center"><?= $mata_uang; ?></td>
                            <td class="text-center"><?= $staff; ?></td>
                            <td class="text-center"><?= $note; ?></td>
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
            <div class="card-header">Data Voucher
            </div>
            <form action="" method="POST">
                <div class="table-responsive" style="padding: 10px;">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">No Passport</th>
                                <th class="text-center">Nama Mandarin</th>
                                <th class="text-center">Nama Latin</th>
                                <th class="text-center">Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            for ($i = 0; $i < count($id_tka); $i++) :
                                $this->db->select(array('id', 'passport', 'nama_mandarin', 'nama_latin'));
                                $this->db->from('tka');
                                $this->db->where('id', $id_tka[$i]);
                                $query = $this->db->get();
                                $data_tka = $query->row_array();
                                if ($mata_uang == ('Rupiah')) {
                                    $this->db->select('rupiah');
                                    $this->db->from('harga');
                                    $this->db->where('id_harga', $lokasi);
                                    $query_harga = $this->db->get();
                                    $data_harga = $query_harga->row_array();
                                    $harga = $data_harga['rupiah'];
                                    $satuan = "Rp " . number_format($data_harga['rupiah'], 2, ',', '.');
                                    $total += $data_harga['rupiah'];
                                } else {
                                    $this->db->select('dollar');
                                    $this->db->from('harga');
                                    $this->db->where('id_harga', $lokasi);
                                    $query_harga = $this->db->get();
                                    $data_harga = $query_harga->row_array();
                                    $harga = $data_harga['dollar'];
                                    $satuan = "$ " . number_format($data_harga['dollar'], 2, '.', ',');
                                    $total += $data_harga['dollar'];
                                }
                            ?>
                                <tr id="row<?= $i; ?>" class="dynamic-added">
                                    <td class="text-center"><?= $i + 1; ?></td>
                                    <td class="text-center">
                                        <?= $data_tka['passport']; ?>
                                    </td>
                                    <td class="text-center"><?= $data_tka['nama_mandarin']; ?></td>
                                    <td class="text-center"><?= $data_tka['nama_latin']; ?></td>
                                    <input type="hidden" name="id_tka[]" id="id_tka[]" value="<?= $id_tka[$i]; ?>">
                                    <td class="text-center">
                                        <input type="hidden" class="form-control text-center" name="harga[]" id="harga[]" value="<?= $harga; ?>" readonly>
                                        <input type="text" class="form-control text-center" name="satuan[]" id="satuan[]" value="<?= $satuan; ?>" readonly>
                                    </td>
                                </tr>
                            <?php endfor; ?>
                            <tr>
                                <td class="text-center" colspan="4"> Total </td>
                                <td class="text-center">
                                    <?php if ($mata_uang == "Rupiah") {
                                        $total_harga = "Rp " . number_format($total, 2, ',', '.');
                                    } else {
                                        $total_harga = "$ " . number_format($total, 2, '.', ',');
                                    } ?>
                                    <?= $total_harga; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <input type="hidden" id="nama_pt" name="nama_pt" value="<?= $id_pt; ?>">
                    <input type="hidden" id="kategori" name="kategori" value="<?= $id_kategori; ?>">
                    <input type="hidden" id="jenis_proses" name="jenis_proses" value="<?= $id_jenis_proses; ?>">
                    <input type="hidden" name="nama_client" id="nama_client" value="<?= $nama_client; ?>">
                    <input type="hidden" name="lokasi" id="lokasi" value="<?= $lokasi; ?>">
                    <input type="hidden" name="staff" id="staff" value="<?= $staff; ?>">
                    <input type="hidden" name="note" id="note" value="<?= $note; ?>">
                    <input type="hidden" name="mata_uang" id="mata_uang" value="<?= $mata_uang; ?>">
                    <input type="hidden" name="total" id="total" value="<?= $total; ?>">
                    <button type="submit" class="btn-actions-pane-right mb-2 mr-2 btn btn-primary">Buat Voucher</button>
                </div>
            </form>
        </div>
    </div>
</div>