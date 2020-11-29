<?php if ($this->session->flashdata('flash')) : ?>
    <div class="alert alert-success fade show" role="alert">Data <?= $this->session->flashdata('flash'); ?> .</div>
<?php endif; ?>
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Data RPTKA
            </div>
            <div class="table-responsive" style="padding: 10px;">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="atas">
                    <thead>
                        <tr>
                            <th class="text-center">Nama PT</th>
                            <th class="text-center">Nomor RPTKA</th>
                            <th class="text-center">Tanggal Terbit</th>
                            <th class="text-center">Tanggal Expired</th>
                            <th class="text-center">Jumlah RPTKA</th>
                            <th class="text-center">RPTKA Terpakai</th>
                            <th class="text-center">Keterangan</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"><?= $data_rptka['id_pt']; ?></td>
                            <td class="text-center"><?= $data_rptka['no_rptka']; ?></td>
                            <td class="text-center"><?= $data_rptka['tgl_terbit']; ?></td>
                            <td class="text-center"><?= $data_rptka['tgl_expired']; ?></td>
                            <td class="text-center"><?= $data_rptka['jumlah_rptka']; ?></td>
                            <td class="text-center"><?= $data_rptka['jumlah_rptka']; ?></td>
                            <td class="text-center"><?= $data_rptka['ket']; ?></td>
                            <td class="text-center">
                                <a href="<?= base_url('Data_Rptka/edit/'); ?><?= $data_rptka['id']; ?>" class="badge badge-secondary">Edit</a>
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
            <div class="card-header">Data Jabatan RPTKA
                <a type="button" class="btn-actions-pane-right mb-2 mr-2 btn btn-primary" type="submit" href="<?= base_url('Data_Rptka/tambah_jabatan/'); ?><?= $data_rptka['id']; ?>">Tambah Jabatan RPTKA</a>
            </div>
            <div class="table-responsive" style="padding: 10px;">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="atas">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Nama Jabatan</th>
                            <th class="text-center">Jumlah Jabatan </th>
                            <th class="text-center">Jumlah Jabatan Terpakai</th>
                            <th class="text-center">Jumlah jabatan Sisa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        if ($data_jabatan) :
                            foreach ($data_jabatan as $jabatan) : ?>
                                <tr>
                                    <td class="text-center"><?= $no; ?></td>
                                    <td class="text-center"><?= $jabatan['jabatan']; ?></td>
                                    <td class="text-center"><?= $jabatan['jumlah']; ?></td>
                                    <td class="text-center"><?= $jabatan['jumlah']; ?></td>
                                    <td class="text-center"><?= $jabatan['jumlah']; ?></td>
                                </tr>
                            <?php $no++;
                            endforeach;
                        else : ?>
                            <tr>
                                <td class="text-center" colspan="5">Data Jabatan Belum Ditambahkan</td>
                            </tr>
                        <?php endif;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- <div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Detail RPTKA
                <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-link btn-actions-pane-right" style="color:white;">link
                </button>
                <form action="#">
                    <input class="btn-actions-pane-right mb-2 mr-2 btn btn-primary" type="submit" value="Tambah RPTKA" />
                </form>
                <div class="dropleft d-inline-block">
                    <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="btn mr-2 mb-2 btn-primary btn-actions-pane-right">Filter</button>
                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                        <button type="button" class="dropdown-item" data-toggle="modal" data-target="#exampleModal2">
                            By Date
                        </button>
                        <button type="button" class="dropdown-item" data-toggle="modal" data-target="#exampleModal3">
                            By Expired Date
                        </button>
                    </div>
                </div>

            </div>
            <div class="table-responsive" style="padding: 10px; font-size:11.5px;">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="example">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Nama Mandarin</th>
                            <th class="text-center">Nama Latin</th>
                            <th class="text-center">Kewarganegaraan</th>
                            <th class="text-center">No Passport</th>
                            <th class="text-center">Expired Passport</th>
                            <th class="text-center">Jenis Visa</th>
                            <th class="text-center">Jabatan</th>
                            <th class="text-center">Jangka Waktu</th>
                            <th class="text-center">No Kitas</th>
                            <th class="text-center">Expired Kitas</th>
                            <th class="text-center">No Notif</th>
                            <th class="text-center">Keterangan</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center text-muted">1</td>
                            <td class="text-center">
                                <div class="mb-2 mr-2 badge badge-success">Aktif</div>
                            </td>
                            <td class="text-center">诸葛亮</td>
                            <td class="text-center">Zhuge Liang</td>
                            <td class="text-center">RRC</td>
                            <td class="text-center">3333PL99JK</td>
                            <td class="text-center">21-10-2022</td>
                            <td class="text-center">Visa 211</td>
                            <td class="text-center">Civil Engineer</td>
                            <td class="text-center">6 Bulan</td>
                            <td class="text-center">40110</td>
                            <td class="text-center">21-10-2022</td>
                            <td class="text-center">10032</td>
                            <td class="text-center">-</td>
                        </tr>
                        <tr>
                            <td class="text-center text-muted">2</td>
                            <td class="text-center">
                                <div class="mb-2 mr-2 badge badge-success">Aktif</div>
                            </td>
                            <td class="text-center">诸葛亮</td>
                            <td class="text-center">Zhuge Liang</td>
                            <td class="text-center">RRC</td>
                            <td class="text-center">3333PL99JK</td>
                            <td class="text-center">21-10-2022</td>
                            <td class="text-center">Visa 211</td>
                            <td class="text-center">Civil Engineer</td>
                            <td class="text-center">6 Bulan</td>
                            <td class="text-center">40110</td>
                            <td class="text-center">21-10-2022</td>
                            <td class="text-center">10032</td>
                            <td class="text-center">-</td>
                        </tr>
                        <tr>
                            <td class="text-center text-muted">3</td>
                            <td class="text-center">
                                <div class="mb-2 mr-2 badge badge-success">Aktif</div>
                            </td>
                            <td class="text-center">诸葛亮</td>
                            <td class="text-center">Zhuge Liang</td>
                            <td class="text-center">RRC</td>
                            <td class="text-center">3333PL99JK</td>
                            <td class="text-center">21-10-2022</td>
                            <td class="text-center">Visa 211</td>
                            <td class="text-center">Civil Engineer</td>
                            <td class="text-center">6 Bulan</td>
                            <td class="text-center">40110</td>
                            <td class="text-center">21-10-2022</td>
                            <td class="text-center">10032</td>
                            <td class="text-center">-</td>
                        </tr>
                        <tr>
                            <td class="text-center text-muted">4</td>
                            <td class="text-center">
                                <div class="mb-2 mr-2 badge badge-success">Aktif</div>
                            </td>
                            <td class="text-center">诸葛亮</td>
                            <td class="text-center">Zhuge Liang</td>
                            <td class="text-center">RRC</td>
                            <td class="text-center">3333PL99JK</td>
                            <td class="text-center">21-10-2022</td>
                            <td class="text-center">Visa 211</td>
                            <td class="text-center">Civil Engineer</td>
                            <td class="text-center">6 Bulan</td>
                            <td class="text-center">40110</td>
                            <td class="text-center">21-10-2022</td>
                            <td class="text-center">10032</td>
                            <td class="text-center">-</td>
                        </tr>
                        <tr>
                            <td class="text-center text-muted">5</td>
                            <td class="text-center">
                                <div class="mb-2 mr-2 badge badge-danger">Non-Aktif</div>
                            </td>
                            <td class="text-center">诸葛亮</td>
                            <td class="text-center">Zhuge Liang</td>
                            <td class="text-center">RRC</td>
                            <td class="text-center">3333PL99JK</td>
                            <td class="text-center">21-10-2022</td>
                            <td class="text-center">Visa 211</td>
                            <td class="text-center">Civil Engineer</td>
                            <td class="text-center">6 Bulan</td>
                            <td class="text-center">40110</td>
                            <td class="text-center">21-10-2022</td>
                            <td class="text-center">10032</td>
                            <td class="text-center">-</td>
                        </tr>
                        <tr>
                            <td class="text-center text-muted">6</td>
                            <td class="text-center">
                                <div class="mb-2 mr-2 badge badge-success">Aktif</div>
                            </td>
                            <td class="text-center">诸葛亮</td>
                            <td class="text-center">Zhuge Liang</td>
                            <td class="text-center">RRC</td>
                            <td class="text-center">3333PL99JK</td>
                            <td class="text-center">21-10-2022</td>
                            <td class="text-center">Visa 211</td>
                            <td class="text-center">Civil Engineer</td>
                            <td class="text-center">6 Bulan</td>
                            <td class="text-center">40110</td>
                            <td class="text-center">21-10-2022</td>
                            <td class="text-center">10032</td>
                            <td class="text-center">-</td>
                        </tr>
                        <tr>
                            <td class="text-center text-muted">7</td>
                            <td class="text-center">
                                <div class="mb-2 mr-2 badge badge-warning">Pending</div>
                            </td>
                            <td class="text-center">诸葛亮</td>
                            <td class="text-center">Zhuge Liang</td>
                            <td class="text-center">RRC</td>
                            <td class="text-center">3333PL99JK</td>
                            <td class="text-center">21-10-2022</td>
                            <td class="text-center">Visa 211</td>
                            <td class="text-center">Civil Engineer</td>
                            <td class="text-center">6 Bulan</td>
                            <td class="text-center">40110</td>
                            <td class="text-center">21-10-2022</td>
                            <td class="text-center">10032</td>
                            <td class="text-center">-</td>
                        </tr>
                        <tr>
                            <td class="text-center text-muted">8</td>
                            <td class="text-center">
                                <div class="mb-2 mr-2 badge badge-success">Aktif</div>
                            </td>
                            <td class="text-center">诸葛亮</td>
                            <td class="text-center">Zhuge Liang</td>
                            <td class="text-center">RRC</td>
                            <td class="text-center">3333PL99JK</td>
                            <td class="text-center">21-10-2022</td>
                            <td class="text-center">Visa 211</td>
                            <td class="text-center">Civil Engineer</td>
                            <td class="text-center">6 Bulan</td>
                            <td class="text-center">40110</td>
                            <td class="text-center">21-10-2022</td>
                            <td class="text-center">10032</td>
                            <td class="text-center">-</td>
                        </tr>
                        <tr>
                            <td class="text-center text-muted">9</td>
                            <td class="text-center">
                                <div class="mb-2 mr-2 badge badge-success">Aktif</div>
                            </td>
                            <td class="text-center">诸葛亮</td>
                            <td class="text-center">Zhuge Liang</td>
                            <td class="text-center">RRC</td>
                            <td class="text-center">3333PL99JK</td>
                            <td class="text-center">21-10-2022</td>
                            <td class="text-center">Visa 211</td>
                            <td class="text-center">Civil Engineer</td>
                            <td class="text-center">6 Bulan</td>
                            <td class="text-center">40110</td>
                            <td class="text-center">21-10-2022</td>
                            <td class="text-center">10032</td>
                            <td class="text-center">-</td>
                        </tr>
                        <tr>
                            <td class="text-center text-muted">10</td>
                            <td class="text-center">
                                <div class="mb-2 mr-2 badge badge-success">Aktif</div>
                            </td>
                            <td class="text-center">诸葛亮</td>
                            <td class="text-center">Zhuge Liang</td>
                            <td class="text-center">RRC</td>
                            <td class="text-center">3333PL99JK</td>
                            <td class="text-center">21-10-2022</td>
                            <td class="text-center">Visa 211</td>
                            <td class="text-center">Civil Engineer</td>
                            <td class="text-center">6 Bulan</td>
                            <td class="text-center">40110</td>
                            <td class="text-center">21-10-2022</td>
                            <td class="text-center">10032</td>
                            <td class="text-center">-</td>
                        </tr>
                        <tr>
                            <td class="text-center text-muted">11</td>
                            <td class="text-center">
                                <div class="mb-2 mr-2 badge badge-success">Aktif</div>
                            </td>
                            <td class="text-center">诸葛亮</td>
                            <td class="text-center">Zhuge Liang</td>
                            <td class="text-center">RRC</td>
                            <td class="text-center">3333PL99JK</td>
                            <td class="text-center">21-10-2022</td>
                            <td class="text-center">Visa 211</td>
                            <td class="text-center">Civil Engineer</td>
                            <td class="text-center">6 Bulan</td>
                            <td class="text-center">40110</td>
                            <td class="text-center">21-10-2022</td>
                            <td class="text-center">10032</td>
                            <td class="text-center">-</td>
                        </tr>


                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div> -->