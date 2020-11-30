<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Data Jenis Proses
                <a type="button" href="<?= base_url('Data_Visa/tambah'); ?>" class="btn-actions-pane-right mb-2 mr-2 btn btn-primary">Tambah Visa</a>
            </div>
            <div class="table-responsive" style="padding: 10px;">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="example">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Jenis Proses</th>
                            <th class="text-center">Input By</th>
                            <th class="text-center">Tanggal Input</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center text-muted">1</td>
                            <td class="text-center">Shanghai Shenhua</td>
                            <td class="text-center">3</td>
                            <td class="text-center">10</td>
                            <td class="text-center">
                                <a href="" class>Edit</a>
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
            <div class="card-header">Data Harga
                <a type="button" href="<?= base_url('Data_Visa/tambah'); ?>" class="btn-actions-pane-right mb-2 mr-2 btn btn-primary">Tambah Visa</a>
            </div>
            <div class="table-responsive" style="padding: 10px;">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover display">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Jenis Proses</th>
                            <th class="text-center">Lokasi</th>
                            <th class="text-center">Harga (Rp)</th>
                            <th class="text-center">Harga ($)</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center text-muted">1</td>
                            <td class="text-center">Shanghai Shenhua</td>
                            <td class="text-center">3</td>
                            <td class="text-center">10</td>
                            <td class="text-center">10</td>
                            <td class="text-center">
                                <a href="" class>Edit</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('table.display').DataTable();
    });
</script>