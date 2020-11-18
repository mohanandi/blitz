<div class="app-main">
    <div class="app-sidebar sidebar-shadow">
        <div class="app-header__logo">
            <div class="logo-src"></div>
            <div class="header__pane ml-auto">
                <div>
                    <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="app-header__mobile-menu">
            <div>
                <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
        <div class="app-header__menu">
            <span>
                <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                    <span class="btn-icon-wrapper">
                        <i class="fa fa-ellipsis-v fa-w-6"></i>
                    </span>
                </button>
            </span>
        </div>
        <div class="scrollbar-sidebar">
            <div class="app-sidebar__inner">
                <ul class="vertical-nav-menu">
                    <li class="app-sidebar__heading">Dashboards</li>
                    <li>
                        <a href="<?= base_url('Sementara/home') ?>">
                            <i class="metismenu-icon pe-7s-home"></i>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('Sementara/Data_TKA') ?>">
                            <i class="metismenu-icon pe-7s-users"></i>
                            Data TKA
                        </a>
                    </li>
                    <li>
                        <a href="Data PT.html" class="mm-active">
                            <i class="metismenu-icon pe-7s-portfolio"></i>
                            Data PT
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="metismenu-icon pe-7s-ticket"></i>
                            Data Voucher
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="metismenu-icon pe-7s-share"></i>
                            Data RPTKA
                        </a>
                    </li>
                    <li>
                        <a href="Data Visa-Dashboard.html">
                            <i class="metismenu-icon pe-7s-photo-gallery"></i>
                            Data VISA
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="pe-7s-monitor icon-gradient bg-mean-fruit"> </i>
                        </div>
                        <div>PT. Blitzindo Utama
                            <nav class="page-title-subheading" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Data PT</a></li>
                                    <li class="active breadcrumb-item" aria-current="page">Data PT. Shanghai Shenhua</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="page-title-actions">
                        <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                            <i class="fa fa-star"></i>
                        </button>
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
                                                <select class="form-control-sm form-control" onchange="location = this.value;">
                                                    <option>Pilih ... </option>
                                                    <option value="Data PT-Dashboard.html">Detail</option>
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
                                                <select class="form-control-sm form-control" onchange="location = this.value;">
                                                    <option>Pilih ... </option>
                                                    <option value="Data PT-Dashboard.html">Detail</option>
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
                                                <select class="form-control-sm form-control" onchange="location = this.value;">
                                                    <option>Pilih ... </option>
                                                    <option value="Data PT-Dashboard.html">Detail</option>
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
                                                <select class="form-control-sm form-control" onchange="location = this.value;">
                                                    <option>Pilih ... </option>
                                                    <option value="Data PT-Dashboard.html">Detail</option>
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
                                                <select class="form-control-sm form-control" onchange="location = this.value;">
                                                    <option>Pilih ... </option>
                                                    <option value="Data PT-Dashboard.html">Detail</option>
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
                                                <select class="form-control-sm form-control" onchange="location = this.value;">
                                                    <option>Pilih ... </option>
                                                    <option value="Data PT-Dashboard.html">Detail</option>
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
                                                <select class="form-control-sm form-control" onchange="location = this.value;">
                                                    <option>Pilih ... </option>
                                                    <option value="Data PT-Dashboard.html">Detail</option>
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
                                                <select class="form-control-sm form-control" onchange="location = this.value;">
                                                    <option>Pilih ... </option>
                                                    <option value="Data PT-Dashboard.html">Detail</option>
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
                                                <select class="form-control-sm form-control" onchange="location = this.value;">
                                                    <option>Pilih ... </option>
                                                    <option value="Data PT-Dashboard.html">Detail</option>
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
                                                <select class="form-control-sm form-control" onchange="location = this.value;">
                                                    <option>Pilih ... </option>
                                                    <option value="Data PT-Dashboard.html">Detail</option>
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
                                                <select class="form-control-sm form-control" onchange="location = this.value;">
                                                    <option>Pilih ... </option>
                                                    <option value="Data PT-Dashboard.html">Detail</option>
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
                                                <select class="form-control-sm form-control" onchange="location = this.value;">
                                                    <option>Pilih ... </option>
                                                    <option value="Data PT-Dashboard.html">Detail</option>
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
                                                <select class="form-control-sm form-control" onchange="location = this.value;">
                                                    <option>Pilih ... </option>
                                                    <option value="Data PT-Dashboard.html">Detail</option>
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
                                                <select class="form-control-sm form-control" onchange="location = this.value;">
                                                    <option>Pilih ... </option>
                                                    <option value="Data PT-Dashboard.html">Detail</option>
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
                                                <select class="form-control-sm form-control" onchange="location = this.value;">
                                                    <option>Pilih ... </option>
                                                    <option value="Data PT-Dashboard.html">Detail</option>
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
                                                <select class="form-control-sm form-control" onchange="location = this.value;">
                                                    <option>Pilih ... </option>
                                                    <option value="Data PT-Dashboard.html">Detail</option>
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
                                                <select class="form-control-sm form-control" onchange="location = this.value;">
                                                    <option>Pilih ... </option>
                                                    <option value="Data PT-Dashboard.html">Detail</option>
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
                                                <select class="form-control-sm form-control" onchange="location = this.value;">
                                                    <option>Pilih ... </option>
                                                    <option value="Data PT-Dashboard.html">Detail</option>
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
</div>