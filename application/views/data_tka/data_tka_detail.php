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
                                    <th>No</th>
                                    <th>Nama TKA</th>
                                    <th>Kewarganegaraan</th>
                                    <th>Passport</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Luo Yi</td>
                                    <td>RRC</td>
                                    <td>992888KY92IIU</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Luo Yi</td>
                                    <td>RRC</td>
                                    <td>992888KY92IIU</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Luo Yi</td>
                                    <td>RRC</td>
                                    <td>992888KY92IIU</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Luo Yi</td>
                                    <td>RRC</td>
                                    <td>992888KY92IIU</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Luo Yi</td>
                                    <td>RRC</td>
                                    <td>992888KY92IIU</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Luo Yi</td>
                                    <td>RRC</td>
                                    <td>992888KY92IIU</td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Luo Yi</td>
                                    <td>RRC</td>
                                    <td>992888KY92IIU</td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>Luo Yi</td>
                                    <td>RRC</td>
                                    <td>992888KY92IIU</td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>Luo Yi</td>
                                    <td>RRC</td>
                                    <td>992888KY92IIU</td>
                                </tr>
                                <tr>
                                    <th scope="row">10</th>
                                    <td>Luo Yi</td>
                                    <td>RRC</td>
                                    <td>992888KY92IIU</td>
                                </tr>
                                <tr>
                                    <th scope="row">11</th>
                                    <td>Luo Yi</td>
                                    <td>RRC</td>
                                    <td>992888KY92IIU</td>
                                </tr>
                                <tr>
                                    <th scope="row">12</th>
                                    <td>Luo Yi</td>
                                    <td>RRC</td>
                                    <td>992888KY92IIU</td>
                                </tr>
                                <tr>
                                    <th scope="row">13</th>
                                    <td>Luo Yi</td>
                                    <td>RRC</td>
                                    <td>992888KY92IIU</td>
                                </tr>
                                <tr>
                                    <th scope="row">14</th>
                                    <td>Luo Yi</td>
                                    <td>RRC</td>
                                    <td>992888KY92IIU</td>
                                </tr>
                                <tr>
                                    <th scope="row">15</th>
                                    <td>Luo Yi</td>
                                    <td>RRC</td>
                                    <td>992888KY92IIU</td>
                                </tr>
                                <tr>
                                    <th scope="row">16</th>
                                    <td>Luo Yi</td>
                                    <td>RRC</td>
                                    <td>992888KY92IIU</td>
                                </tr>
                                <tr>
                                    <th scope="row">17</th>
                                    <td>Luo Yi</td>
                                    <td>RRC</td>
                                    <td>992888KY92IIU</td>
                                </tr>
                                <tr>
                                    <th scope="row">18</th>
                                    <td>Luo Yi</td>
                                    <td>RRC</td>
                                    <td>992888KY92IIU</td>
                                </tr>
                                <tr>
                                    <th scope="row">19</th>
                                    <td>Luo Yi</td>
                                    <td>RRC</td>
                                    <td>992888KY92IIU</td>
                                </tr>
                                <tr>
                                    <th scope="row">20</th>
                                    <td>Luo Yi</td>
                                    <td>RRC</td>
                                    <td>992888KY92IIU</td>
                                </tr>
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