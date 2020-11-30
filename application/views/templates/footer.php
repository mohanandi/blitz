</div>
</div>
</div>
</div>
<div class="app-wrapper-footer">
    <div class="app-footer">
        <div class="app-footer__inner">
            <div class="app-footer-right">
                <ul class="nav">
                    <li class="nav-item">
                        <p href="javascript:void(0);" class="nav-link">
                            NEART 2020
                        </p>
                    </li>
                </ul>
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
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Menu Filter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="">
                    <div class="col-md-12">
                        <div class="position-relative form-group"><label for="examplePassword11" class="">Tanggal Akhir</label><input name="password" id="examplePassword11" placeholder="password placeholder" type="date" class="form-control"></div>
                    </div>
                    <button class="mt-1 btn btn-primary btn-actions-pane-right">Submit</button>
                </form>
            </div>
        </div>
    </div>

</div>

<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Menu Filter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group"><label for="exampleEmail11" class="">Tanggal Awal</label><input name="email" id="exampleEmail11" placeholder="with a placeholder" type="date" class="form-control"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group"><label for="examplePassword11" class="">Tanggal Expiredr</label><input name="password" id="examplePassword11" placeholder="password placeholder" type="date" class="form-control"></div>
                        </div>
                    </div>
                    <button class="mt-1 btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

</div>

<script type="text/javascript" src="<?= base_url(); ?>assets/scripts/main.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        var t = $('#example').DataTable();
        var counter = 1;

        $('#addRow').on('click', function() {
            t.row.add([
                counter,
                '<input name="jumlah" id="jum" type="text" class="form-control-sm form-control">',
                '<input name="jumlah" id="jum" type="text" class="form-control-sm form-control">',
                '<input name="jumlah" id="jum" type="text" class="form-control-sm form-control">',
                '<form> <select class="form-control-sm form-control" onchange="location = this.value;"><option>Pilih ... </option><option>Apply Visa Singapore</option><option>Apply Visa Malaysia</option><option>Apply Telex 211 A</option><option>Apply Telex 211 B</option><option>Apply Telex 212</option><option>Apply Telex 312</option><option>Apply Telex 313</option><option>Apply Telex 314</option><option>Apply Telex 317</option><option>Visa Other</option><option>Acc Penurunan Kitas 12 Bulan</option><option>Acc Penurunan Kitas 6 Bulan</option><option>ERP Tidak Kembali</option><option>EPO</option><option>BAP</option></select></form>',
                '<input name="jumlah" id="jum" type="number" class="form-control-sm form-control">'
            ]).draw(false);

            counter++;
        });

        // Automatically add a first row of data
        $('#addRow').click();
    });
</script>


</body>

</html>