<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Data PT Shanghai Shenhua

                <button type="button" class="btn mr-2 mb-2 btn-primary btn-actions-pane-right" data-toggle="modal" data-target="#exampleModal">
                    Export
                </button>
                <a type="button" class="btn-actions-pane-right mb-2 mr-2 btn btn-primary" type="submit" href="<?= base_url('Data_Pt/tambah'); ?>">Tambah PT</a>


            </div>
            <?php if ($this->session->flashdata('flash')) : ?>
                <div class="alert alert-success fade show" role="alert">Data Berhasil <?= $this->session->flashdata('flash'); ?> .</div>
            <?php endif; ?>
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
                        <?php $i = 1; ?>
                        <?php foreach ($pt as $pt) : ?>
                            <tr>
                                <td class="text-center"><?= $i++; ?></td>
                                <td class="text-center"><?= $pt['nama_pt']; ?></td>
                                <td class="text-center"><?= $pt['pic']; ?></td>
                                <td class="text-center"><?= $pt['nama_client']; ?></td>
                                <td class="text-center"><?= $pt['alamat']; ?></td>
                                <td class="text-center"><?= $pt['keterangan']; ?></td>
                                <td class="text-center">
                                    <form action="<?= base_url(); ?>Data_Pt/hapus/<?= $pt['id']; ?>" method="post" class="d-inline">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin ?');">Delete</button>
                                    </form>
                                    <!-- belom -->
                                    <form action="<?= base_url(); ?>Data_Pt/ubah/<?= $pt['id']; ?>" method="post" class="d-inline">
                                        <input type="hidden" name="_method" value="EDIT">
                                        <button type="submit" class="btn btn-success" onclick="return confirm('apakah anda yakin edit data ?');">Edit</button>
                                    </form>
                                    <!-- belom -->

                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
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