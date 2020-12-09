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
                            <th class="text-center">Mata Uang</th>
                            <th class="text-center">Staff OP</th>
                            <th class="text-center">Note</th>
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
                            ?>
                            <td class="text-center"><?= $data_pt['nama_pt']; ?></td>
                            <td class="text-center"><?= $nama_client; ?></td>
                            <td class="text-center"><?= $data_kategori['kategori']; ?></td>
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
            <div class="card-header">
                <button type="button" name="add" id="add" class="btn-actions-pane-right mb-2 mr-2 btn btn-primary">Tambah Baris Data</button>
            </div>
            <div class="table-responsive" style="padding: 20px;">
                <form method="POST">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dynamic_field">
                            <thead class="table-info">
                                <tr>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Jenis Proses</th>
                                    <th class="text-center">Lokasi</th>
                                    <th class="text-center">Harga</th>
                                    <th class="text-center">Delete</th>
                                </tr>
                            </thead>
                            <?php for ($i = 0; $i < 20; $i++) : ?>
                                <tr id="row' + i + '" class="dynamic-added">
                                    <td><input type="text" name="nama_pengguna[]" placeholder="Nama" class="form-control name_list" required />
                                    <td>
                                        <select name="jenis_proses[]" id="jenis_proses[]" class="form-control">
                                            <?php if (set_value('jenis_proses')) :
                                                $proses_pilihan = $this->db->select('nama_proses')->get_where('jenis_proses', ['id_proses' => set_value('jenis_proses')])->row_array();
                                            ?>
                                                <option value="<?= set_value('jenis_proses'); ?>"><?= $proses_pilihan['nama_proses']; ?></option>
                                            <?php else : ?>
                                                <option value="">Select Jenis Proses</option>
                                            <?php endif; ?>
                                            <?php foreach ($data_jenis_proses as $proses) : ?>
                                                <option value="<?= $proses->id_proses; ?>"><?= $proses->nama_proses; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="lokasi[]" id="lokasi[]" class="form-control">
                                            <?php if (set_value('lokasi')) :
                                                $lokasi_pilihan = $this->db->select('lokasi')->get_where('harga', ['id_harga' => set_value('lokasi')])->row_array();
                                            ?>
                                                <option value="<?= set_value('lokasi'); ?>"><?= $lokasi_pilihan['lokasi']; ?></option>
                                            <?php else : ?>
                                                <option value="">Select Lokasi</option>
                                            <?php endif; ?>
                                            <?php foreach ($data_lokasi as $lokasi) : ?>
                                                <option class="<?= $lokasi->id_proses ?>" value="<?= $lokasi->id_harga; ?>"><?= $lokasi->lokasi; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                    <td><input type="number" name="jumlah_jabatan[]" placeholder="Jumlah Jabatan" class="form-control name_list" readonly /></td>
                                    </td>
                                    <td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td>
                                </tr>
                            <?php endfor; ?>
                        </table>
                        <button type="submit" class="btn btn-success"><?= $button; ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url('assets/js/jquery-1.10.2.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.chained.min.js') ?>"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var i = 1;
        $("#lokasi[]").chained("#jenis_proses[]");


        $('#add').click(function() {
            i++;
            $('#dynamic_field').append('<tr id="row' + i + '" class="dynamic-added"><td><input type="text" name="nama_pengguna[]" placeholder="Nama" class="form-control name_list" required /><td><input type="number" name="jumlah_jabatan[]" placeholder="Jumlah Jabatan" class="form-control name_list" required="" /></td></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
        });


        $(document).on('click', '.btn_remove', function() {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
        });


    });
</script>