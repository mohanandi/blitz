<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Tambah Data Voucher Entertaint
            </div>
            <div class="table-responsive" style="padding: 20px;">
                <form class="" method="POST">
                    <div class="position-relative row form-group">
                        <label for="Kewarganegaraan" class="col-sm-2 col-form-label"><b>Nama</b></label>
                        <div class="col-sm-10">
                            <input type="hidden" value="<?= $data_voucher['id_voucher']; ?>" name="id_voucher" id="id_voucher">
                            <input name="nama" id="nama" value="<?= set_value('nama'); ?>" placeholder="Nama" type="text" class="form-control">
                            <?= form_error('nama') ?>
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="NamaTKA" class="col-sm-2 col-form-label"><b>Jenis Proses</b></label>
                        <div class="col-sm-10">
                            <select name="jenis_proses" id="jenis_proses" class="form-control">
                                <?php if (set_value('jenis_proses')) :
                                    $proses_pilihan = $this->db->select('nama_proses')->get_where('jenis_proses', ['id_proses' => set_value('jenis_proses')])->row_array();
                                ?>
                                    <option value="<?= set_value('jenis_proses'); ?>"><?= $proses_pilihan['nama_proses']; ?></option>
                                <?php elseif ($data_pengguna_voucher['id_jenis_proses']) :
                                    $proses_pilihan = $this->db->select('nama_proses')->get_where('jenis_proses', ['id_proses' => $data_pengguna_voucher['id_jenis_proses']])->row_array();
                                ?>
                                    <option value="<?= $data_pengguna_voucher['id_jenis_proses']; ?>"><?= $proses_pilihan['nama_proses']; ?></option>
                                <?php else : ?>
                                    <option value="">Select Jenis Proses</option>
                                <?php endif; ?>
                                <?php foreach ($data_jenis_proses as $proses) : ?>
                                    <option value="<?= $proses->id_proses; ?>"><?= $proses->nama_proses; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('jenis_proses') ?>
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="NamaTKA" class="col-sm-2 col-form-label"><b>Lokasi</b></label>
                        <div class="col-sm-10">
                            <select name="lokasi" id="lokasi" class="form-control">
                                <?php if (set_value('lokasi')) :
                                    $lokasi_pilihan = $this->db->select('lokasi')->get_where('harga', ['id_harga' => set_value('lokasi')])->row_array();
                                ?>
                                    <option value="<?= set_value('lokasi'); ?>"><?= $lokasi_pilihan['lokasi']; ?></option>
                                <?php elseif ($data_pengguna_voucher['id_lokasi']) :
                                    $lokasi_pilihan = $this->db->select('lokasi')->get_where('harga', ['id_harga' => $data_pengguna_voucher['id_lokasi']])->row_array();
                                ?>
                                    <option value="<?= $data_pengguna_voucher['id_lokasi']; ?>"><?= $lokasi_pilihan['lokasi']; ?></option>
                                <?php else : ?>
                                    <option value="">Select Lokasi</option>
                                <?php endif; ?>
                                <?php foreach ($data_lokasi as $lokasi) : ?>
                                    <option class="<?= $lokasi->id_proses ?>" value="<?= $lokasi->id_harga; ?>"><?= $lokasi->lokasi; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('lokasi') ?>
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="NamaTKA" class="col-sm-2 col-form-label"><b>Harga</b></label>
                        <div class="col-sm-10">
                            <select name="harga" id="harga" class="form-control">
                                <?php if (set_value('harga')) : ?>
                                    <option value="<?= set_value('harga'); ?>"><?= set_value('harga'); ?></option>
                                <?php elseif ($data_pengguna_voucher['harga']) : ?>
                                    <?php if ($data_voucher['mata_uang'] == 'Rupiah') :
                                        $harga = "Rp " . number_format($data_pengguna_voucher['harga'], 2, ',', '.'); ?>
                                        <option value="<?= $data_pengguna_voucher['harga']; ?>"><?= $harga; ?></option>
                                    <?php else :
                                        $harga = "$ " . number_format($data_pengguna_voucher['harga'], 2, '.', ','); ?>
                                        <option value="<?= $data_pengguna_voucher['harga']; ?>"><?= $harga; ?></option>
                                    <?php endif;
                                else : ?>
                                    <option value="">Select Harga</option>
                                <?php endif; ?>
                                <?php foreach ($data_lokasi as $lokasi) :
                                ?>
                                    <?php if ($data_voucher['mata_uang'] == 'Rupiah') :
                                        $harga = "Rp " . number_format($lokasi->rupiah, 2, ',', '.'); ?>
                                        <option class="<?= $lokasi->id_harga ?>" value="<?= $lokasi->rupiah; ?>"><?= $harga; ?></option>
                                    <?php else : ?>
                                        <option class="<?= $lokasi->id_harga ?>" value="<?= $lokasi->dollar; ?>"><?= $lokasi->dollar; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('harga') ?>
                        </div>
                    </div>
                    <div class="position-relative row form-check">
                        <div class="right">
                            <button type="submit" class="btn btn-success"><?= $button; ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url('assets/js/jquery-1.10.2.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.chained.min.js') ?>"></script>

<script>
    $("#lokasi").chained("#jenis_proses");
    $("#harga").chained("#lokasi");
</script>