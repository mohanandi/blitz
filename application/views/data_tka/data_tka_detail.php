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
                            <th class="text-center">Nama PT</th>
                            <th class="text-center">Jumlah Pengguna</th>
                            <th class="text-center">Tanggal Input Voucher</th>
                            <th class="text-center">Invoice</th>
                            <th class="text-center">Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center text-muted">1</td>
                            <td class="text-center">Shanghai Shenhua</td>
                            <td class="text-center">21</td>
                            <td class="text-center">27 - 02 - 2021</td>
                            <td class="text-center">KKL90077YU8</td>
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
                            <td class="text-center text-muted">2</td>
                            <td class="text-center">Shanghai Shenhua</td>
                            <td class="text-center">21</td>
                            <td class="text-center">27 - 02 - 2021</td>
                            <td class="text-center">KKL90077YU8</td>
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
                            <td class="text-center text-muted">3</td>
                            <td class="text-center">Shanghai Shenhua</td>
                            <td class="text-center">21</td>
                            <td class="text-center">27 - 02 - 2021</td>
                            <td class="text-center">KKL90077YU8</td>
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
                            <td class="text-center text-muted">4</td>
                            <td class="text-center">Shanghai Shenhua</td>
                            <td class="text-center">21</td>
                            <td class="text-center">27 - 02 - 2021</td>
                            <td class="text-center">KKL90077YU8</td>
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
                            <td class="text-center text-muted">5</td>
                            <td class="text-center">Shanghai Shenhua</td>
                            <td class="text-center">21</td>
                            <td class="text-center">27 - 02 - 2021</td>
                            <td class="text-center">KKL90077YU8</td>
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
                            <td class="text-center text-muted">6</td>
                            <td class="text-center">Shanghai Shenhua</td>
                            <td class="text-center">21</td>
                            <td class="text-center">27 - 02 - 2021</td>
                            <td class="text-center">KKL90077YU8</td>
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
                            <td class="text-center text-muted">7</td>
                            <td class="text-center">Shanghai Shenhua</td>
                            <td class="text-center">21</td>
                            <td class="text-center">27 - 02 - 2021</td>
                            <td class="text-center">KKL90077YU8</td>
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
                            <td class="text-center text-muted">8</td>
                            <td class="text-center">Shanghai Shenhua</td>
                            <td class="text-center">21</td>
                            <td class="text-center">27 - 02 - 2021</td>
                            <td class="text-center">KKL90077YU8</td>
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
                            <td class="text-center text-muted">9</td>
                            <td class="text-center">Shanghai Shenhua</td>
                            <td class="text-center">21</td>
                            <td class="text-center">27 - 02 - 2021</td>
                            <td class="text-center">KKL90077YU8</td>
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
                            <td class="text-center text-muted">10</td>
                            <td class="text-center">Shanghai Shenhua</td>
                            <td class="text-center">21</td>
                            <td class="text-center">27 - 02 - 2021</td>
                            <td class="text-center">KKL90077YU8</td>
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
                            <td class="text-center text-muted">11</td>
                            <td class="text-center">Shanghai Shenhua</td>
                            <td class="text-center">21</td>
                            <td class="text-center">27 - 02 - 2021</td>
                            <td class="text-center">KKL90077YU8</td>
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
                            <td class="text-center text-muted">12</td>
                            <td class="text-center">Shanghai Shenhua</td>
                            <td class="text-center">21</td>
                            <td class="text-center">27 - 02 - 2021</td>
                            <td class="text-center">KKL90077YU8</td>
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
                            <td class="text-center text-muted">13</td>
                            <td class="text-center">Shanghai Shenhua</td>
                            <td class="text-center">21</td>
                            <td class="text-center">27 - 02 - 2021</td>
                            <td class="text-center">KKL90077YU8</td>
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
                            <td class="text-center text-muted">14</td>
                            <td class="text-center">Shanghai Shenhua</td>
                            <td class="text-center">21</td>
                            <td class="text-center">27 - 02 - 2021</td>
                            <td class="text-center">KKL90077YU8</td>
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
                            <td class="text-center text-muted">15</td>
                            <td class="text-center">Shanghai Shenhua</td>
                            <td class="text-center">21</td>
                            <td class="text-center">27 - 02 - 2021</td>
                            <td class="text-center">KKL90077YU8</td>
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
                            <td class="text-center text-muted">16</td>
                            <td class="text-center">Shanghai Shenhua</td>
                            <td class="text-center">21</td>
                            <td class="text-center">27 - 02 - 2021</td>
                            <td class="text-center">KKL90077YU8</td>
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
                            <td class="text-center text-muted">17</td>
                            <td class="text-center">Shanghai Shenhua</td>
                            <td class="text-center">21</td>
                            <td class="text-center">27 - 02 - 2021</td>
                            <td class="text-center">KKL90077YU8</td>
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
                            <td class="text-center text-muted">18</td>
                            <td class="text-center">Shanghai Shenhua</td>
                            <td class="text-center">21</td>
                            <td class="text-center">27 - 02 - 2021</td>
                            <td class="text-center">KKL90077YU8</td>
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
                            <td class="text-center text-muted">19</td>
                            <td class="text-center">Shanghai Shenhua</td>
                            <td class="text-center">21</td>
                            <td class="text-center">27 - 02 - 2021</td>
                            <td class="text-center">KKL90077YU8</td>
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