<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Input Spesifikasi Voucher
            </div>
            <div class="table-responsive" style="padding: 20px;">
                <form class="" method="POST">
                    <div class="position-relative row form-group">
                        <label for="NamaTKA" class="col-sm-2 col-form-label">Nama Perusahaan</label>
                        <div class="col-sm-10">
                            <select name="nama_pt" id="nama_pt" class="form-control">
                                <?php if (set_value('nama_pt')) :
                                    $pt_pilihan = $this->db->select('nama_pt')->get_where('pt', ['id' => set_value('nama_pt')])->row_array();
                                ?>
                                    <option value="<?= set_value('nama_pt'); ?>"><?= $pt_pilihan['nama_pt']; ?></option>
                                <?php else : ?>
                                    <option value="">Select Perusahaan</option>
                                <?php endif; ?>
                                <?php foreach ($data_pt as $pt) : ?>
                                    <option value="<?= $pt['id']; ?>"><?= $pt['nama_pt']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('nama_pt'); ?>
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="Kewarganegaraan" class="col-sm-2 col-form-label">Kategori</label>
                        <div class="col-sm-10">
                            <select name="kategori" id="kategori" class="form-control">
                                <?php if (set_value('kategori')) :
                                    $kategori_pilihan = $this->db->select('kategori')->get_where('kategori_voucher', ['id_kategori_voucher' => set_value('kategori')])->row_array();
                                ?>
                                    <option value="<?= set_value('kategori'); ?>"><?= $kategori_pilihan['kategori']; ?></option>
                                <?php else : ?>
                                    <option value="">Select Kategori</option>
                                <?php endif; ?>
                                <?php foreach ($data_kategori as $kategori) : ?>
                                    <option value="<?= $kategori['id_kategori_voucher']; ?>"><?= $kategori['kategori']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('kategori'); ?>
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="passport" class="col-sm-2 col-form-label">Jenis Proses</label>
                        <div class="col-sm-10">
                            <select name="jenis_proses" id="jenis_proses" class="form-control">
                                <?php if (set_value('jenis_proses')) :
                                    $proses_pilihan = $this->db->select('nama_proses')->get_where('jenis_proses', ['id_proses' => set_value('jenis_proses')])->row_array();
                                ?>
                                    <option value="<?= set_value('jenis_proses'); ?>"><?= $proses_pilihan['nama_proses']; ?></option>
                                <?php else : ?>
                                    <option value="">Select Jenis Proses</option>
                                <?php endif; ?>
                                <?php foreach ($data_jenis_proses as $proses) : ?>
                                    <option value="<?= $proses['id_proses']; ?>"><?= $proses['nama_proses']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('jenis_proses'); ?>
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