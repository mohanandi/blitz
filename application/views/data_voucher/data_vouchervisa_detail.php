<?php if ($this->session->flashdata('flash')) : ?>
    <div class="alert alert-success fade show" role="alert">Data Berhasil <?= $this->session->flashdata('flash'); ?> .</div>
<?php endif; ?>
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
            <div class="card-header">Data PT Shanghai Shenhua
                <button type="button" class="btn mr-2 mb-2 btn-primary btn-actions-pane-right" data-toggle="modal" data-target="#exampleModal">
                    Export
                </button>
                <form action="Data TKA-Tambah.html">
                    <input class="btn-actions-pane-right mb-2 mr-2 btn btn-primary" type="submit" value="Tambah TKA" />
                </form>
            </div>

            <div class="table-responsive" style="padding: 10px;">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="example">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Nama PT</th>
                            <th class="text-center">PIC</th>
                            <th class="text-center">Nama Client</th>
                            <th class="text-center">Alamat</th>
                            <th class="text-center">Keterangan</th>
                            <th class="text-center">Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center text-muted">Luo Yi</td>
                            <td class="text-center">RRC</td>
                            <td class="text-center">440088KJL66</td>
                            <td class="text-center">27 - 02 - 2021</td>
                            <td class="text-center">15 - 04 - 1987</td>
                            <td class="text-center">-</td>
                            <td class="text-center">
                                <form>
                                    <select class="form-control-sm form-control">
                                        <option>Detail</option>
                                        <option>Tambah</option>
                                        <option>Hapus</option>
                                    </select>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center text-muted">Luo Yi</td>
                            <td class="text-center">RRC</td>
                            <td class="text-center">440088KJL66</td>
                            <td class="text-center">27 - 02 - 2021</td>
                            <td class="text-center">15 - 04 - 1987</td>
                            <td class="text-center">-</td>
                            <td class="text-center">
                                <form>
                                    <select class="form-control-sm form-control">
                                        <option>Detail</option>
                                        <option>Tambah</option>
                                        <option>Hapus</option>
                                    </select>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center text-muted">Luo Yi</td>
                            <td class="text-center">RRC</td>
                            <td class="text-center">440088KJL66</td>
                            <td class="text-center">27 - 02 - 2021</td>
                            <td class="text-center">15 - 04 - 1987</td>
                            <td class="text-center">-</td>
                            <td class="text-center">
                                <form>
                                    <select class="form-control-sm form-control">
                                        <option>Detail</option>
                                        <option>Tambah</option>
                                        <option>Hapus</option>
                                    </select>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center text-muted">Luo Yi</td>
                            <td class="text-center">RRC</td>
                            <td class="text-center">440088KJL66</td>
                            <td class="text-center">27 - 02 - 2021</td>
                            <td class="text-center">15 - 04 - 1987</td>
                            <td class="text-center">-</td>
                            <td class="text-center">
                                <form>
                                    <select class="form-control-sm form-control">
                                        <option>Detail</option>
                                        <option>Tambah</option>
                                        <option>Hapus</option>
                                    </select>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center text-muted">Luo Yi</td>
                            <td class="text-center">RRC</td>
                            <td class="text-center">440088KJL66</td>
                            <td class="text-center">27 - 02 - 2021</td>
                            <td class="text-center">15 - 04 - 1987</td>
                            <td class="text-center">-</td>
                            <td class="text-center">
                                <form>
                                    <select class="form-control-sm form-control">
                                        <option>Detail</option>
                                        <option>Tambah</option>
                                        <option>Hapus</option>
                                    </select>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center text-muted">Luo Yi</td>
                            <td class="text-center">RRC</td>
                            <td class="text-center">440088KJL66</td>
                            <td class="text-center">27 - 02 - 2021</td>
                            <td class="text-center">15 - 04 - 1987</td>
                            <td class="text-center">-</td>
                            <td class="text-center">
                                <form>
                                    <select class="form-control-sm form-control">
                                        <option>Detail</option>
                                        <option>Tambah</option>
                                        <option>Hapus</option>
                                    </select>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center text-muted">Luo Yi</td>
                            <td class="text-center">RRC</td>
                            <td class="text-center">440088KJL66</td>
                            <td class="text-center">27 - 02 - 2021</td>
                            <td class="text-center">15 - 04 - 1987</td>
                            <td class="text-center">-</td>
                            <td class="text-center">
                                <form>
                                    <select class="form-control-sm form-control">
                                        <option>Detail</option>
                                        <option>Tambah</option>
                                        <option>Hapus</option>
                                    </select>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center text-muted">Luo Yi</td>
                            <td class="text-center">RRC</td>
                            <td class="text-center">440088KJL66</td>
                            <td class="text-center">27 - 02 - 2021</td>
                            <td class="text-center">15 - 04 - 1987</td>
                            <td class="text-center">-</td>
                            <td class="text-center">
                                <form>
                                    <select class="form-control-sm form-control">
                                        <option>Detail</option>
                                        <option>Tambah</option>
                                        <option>Hapus</option>
                                    </select>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center text-muted">Luo Yi</td>
                            <td class="text-center">RRC</td>
                            <td class="text-center">440088KJL66</td>
                            <td class="text-center">27 - 02 - 2021</td>
                            <td class="text-center">15 - 04 - 1987</td>
                            <td class="text-center">-</td>
                            <td class="text-center">
                                <form>
                                    <select class="form-control-sm form-control">
                                        <option>Detail</option>
                                        <option>Tambah</option>
                                        <option>Hapus</option>
                                    </select>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center text-muted">Luo Yi</td>
                            <td class="text-center">RRC</td>
                            <td class="text-center">440088KJL66</td>
                            <td class="text-center">27 - 02 - 2021</td>
                            <td class="text-center">15 - 04 - 1987</td>
                            <td class="text-center">-</td>
                            <td class="text-center">
                                <form>
                                    <select class="form-control-sm form-control">
                                        <option>Detail</option>
                                        <option>Tambah</option>
                                        <option>Hapus</option>
                                    </select>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center text-muted">Luo Yi</td>
                            <td class="text-center">RRC</td>
                            <td class="text-center">440088KJL66</td>
                            <td class="text-center">27 - 02 - 2021</td>
                            <td class="text-center">15 - 04 - 1987</td>
                            <td class="text-center">-</td>
                            <td class="text-center">
                                <form>
                                    <select class="form-control-sm form-control">
                                        <option>Detail</option>
                                        <option>Tambah</option>
                                        <option>Hapus</option>
                                    </select>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center text-muted">Luo Yi</td>
                            <td class="text-center">RRC</td>
                            <td class="text-center">440088KJL66</td>
                            <td class="text-center">27 - 02 - 2021</td>
                            <td class="text-center">15 - 04 - 1987</td>
                            <td class="text-center">-</td>
                            <td class="text-center">
                                <form>
                                    <select class="form-control-sm form-control">
                                        <option>Detail</option>
                                        <option>Tambah</option>
                                        <option>Hapus</option>
                                    </select>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center text-muted">Luo Yi</td>
                            <td class="text-center">RRC</td>
                            <td class="text-center">440088KJL66</td>
                            <td class="text-center">27 - 02 - 2021</td>
                            <td class="text-center">15 - 04 - 1987</td>
                            <td class="text-center">-</td>
                            <td class="text-center">
                                <form>
                                    <select class="form-control-sm form-control">
                                        <option>Detail</option>
                                        <option>Tambah</option>
                                        <option>Hapus</option>
                                    </select>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center text-muted">Luo Yi</td>
                            <td class="text-center">RRC</td>
                            <td class="text-center">440088KJL66</td>
                            <td class="text-center">27 - 02 - 2021</td>
                            <td class="text-center">15 - 04 - 1987</td>
                            <td class="text-center">-</td>
                            <td class="text-center">
                                <form>
                                    <select class="form-control-sm form-control">
                                        <option>Detail</option>
                                        <option>Tambah</option>
                                        <option>Hapus</option>
                                    </select>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center text-muted">Luo Yi</td>
                            <td class="text-center">RRC</td>
                            <td class="text-center">440088KJL66</td>
                            <td class="text-center">27 - 02 - 2021</td>
                            <td class="text-center">15 - 04 - 1987</td>
                            <td class="text-center">-</td>
                            <td class="text-center">
                                <form>
                                    <select class="form-control-sm form-control">
                                        <option>Detail</option>
                                        <option>Tambah</option>
                                        <option>Hapus</option>
                                    </select>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center text-muted">Luo Yi</td>
                            <td class="text-center">RRC</td>
                            <td class="text-center">440088KJL66</td>
                            <td class="text-center">27 - 02 - 2021</td>
                            <td class="text-center">15 - 04 - 1987</td>
                            <td class="text-center">-</td>
                            <td class="text-center">
                                <form>
                                    <select class="form-control-sm form-control">
                                        <option>Detail</option>
                                        <option>Tambah</option>
                                        <option>Hapus</option>
                                    </select>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center text-muted">Luo Yi</td>
                            <td class="text-center">RRC</td>
                            <td class="text-center">440088KJL66</td>
                            <td class="text-center">27 - 02 - 2021</td>
                            <td class="text-center">15 - 04 - 1987</td>
                            <td class="text-center">-</td>
                            <td class="text-center">
                                <form>
                                    <select class="form-control-sm form-control">
                                        <option>Detail</option>
                                        <option>Tambah</option>
                                        <option>Hapus</option>
                                    </select>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center text-muted">Luo Yi</td>
                            <td class="text-center">RRC</td>
                            <td class="text-center">440088KJL66</td>
                            <td class="text-center">27 - 02 - 2021</td>
                            <td class="text-center">15 - 04 - 1987</td>
                            <td class="text-center">-</td>
                            <td class="text-center">
                                <form>
                                    <select class="form-control-sm form-control">
                                        <option>Detail</option>
                                        <option>Tambah</option>
                                        <option>Hapus</option>
                                    </select>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center text-muted">Luo Yi</td>
                            <td class="text-center">RRC</td>
                            <td class="text-center">440088KJL66</td>
                            <td class="text-center">27 - 02 - 2021</td>
                            <td class="text-center">15 - 04 - 1987</td>
                            <td class="text-center">-</td>
                            <td class="text-center">
                                <form>
                                    <select class="form-control-sm form-control">
                                        <option>Detail</option>
                                        <option>Tambah</option>
                                        <option>Hapus</option>
                                    </select>
                                </form>
                            </td>
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
            <div class="card-header">Jumlah Voucher
                <button class="btn-actions-pane-right mb-2 mr-2 btn btn-success" data-toggle="modal" data-target="#exampleModal2">Tambah Voucher</button>
            </div>


            <div class="table-responsive" style="padding: 10px;">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="atas">
                    <thead>
                        <tr>
                            <th class="text-left" style="font-size: 30px; color: green;">104</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Menu Export</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="">
                    <div class="position-relative form-group"><label for="exampleSelect" class="">Jenis Proses</label><select name="select" id="exampleSelect" class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select></div>
                    <div class="position-relative form-group"><label for="exampleSelect" class="">Tanggal Proses</label><select name="select" id="exampleSelect" class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select></div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group"><label for="exampleEmail11" class="">Tanggal Awal</label><input name="email" id="exampleEmail11" placeholder="with a placeholder" type="date" class="form-control"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group"><label for="examplePassword11" class="">Tanggal Akhir</label><input name="password" id="examplePassword11" placeholder="password placeholder" type="date" class="form-control"></div>
                        </div>
                    </div>
                    <button class="mt-1 btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

</div>

<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Menu Export</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="">
                    <div class="position-relative form-group"><label for="exampleEmail" class="">Masukan Jumlah Baru</label><input name="email" id="exampleEmail" placeholder="with a placeholder" type="number" class="form-control"></div>
                    <button class="mt-1 btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

</div>