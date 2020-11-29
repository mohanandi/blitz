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
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php if (form_error('jumlah_jabatan[]')) : ?>
    <div class="alert alert-danger fade show" role="alert"><?= form_error('jumlah_jabatan[]'); ?></div>
<?php endif; ?>
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header"><?= $subjudul; ?>
                <button type="button" name="add" id="add" class="btn-actions-pane-right mb-2 mr-2 btn btn-primary">Tambah Baris Jabatan</button>
            </div>
            <div class="table-responsive" style="padding: 20px;">
                <form method="POST">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dynamic_field">
                            <thead class="table-info">
                                <tr>
                                    <th class="text-center">Nama Jabatan</th>
                                    <th class="text-center">Jumlah Jabatan</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <input type="hidden" name="id_rptka" value="<?= $data_rptka['id']; ?>" placeholder="Jabatan RPTKA" class="form-control name_list" required />
                            <?php if (set_value('jumlah_jabatan')) :
                                for ($i = 0; $i < count(set_value('nama_jabatan')); $i++) { ?>
                                    <tr id="row<?= $i; ?>" class="dynamic-added">
                                        <td><input type="text" name="nama_jabatan[]" placeholder="Jabatan RPTKA" value="<?= set_value("nama_jabatan[$i]"); ?>" class="form-control name_list" required />
                                        <td><input type="number" name="jumlah_jabatan[]" placeholder="Jumlah Jabatan" value="<?= set_value("jumlah_jabatan[$i]"); ?>" class="form-control name_list" required="" /></td>
                                        </td>
                                        <td><button type="button" name="remove" id="<?= $i; ?>" class="btn btn-danger btn_remove">X</button></td>
                                    </tr>
                            <?php }
                            endif; ?>
                        </table>
                        <button type="submit" class="btn btn-success"><?= $button; ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        var i = 1;


        $('#add').click(function() {
            i++;
            $('#dynamic_field').append('<tr id="row' + i + '" class="dynamic-added"><td><input type="text" name="nama_jabatan[]" placeholder="Jabatan RPTKA" class="form-control name_list" required /><td><input type="number" name="jumlah_jabatan[]" placeholder="Jumlah Jabatan" class="form-control name_list" required="" /></td></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
        });


        $(document).on('click', '.btn_remove', function() {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
        });


    });
</script>