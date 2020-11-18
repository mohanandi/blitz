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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Data TKA</a></li>
                                    <li class="active breadcrumb-item" aria-current="page">Edit TKA</li>
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
                        <div class="card-header">Tambah TKA
                        </div>
                        <div class="table-responsive" style="padding: 20px;">
                            <form class="">
                                <div class="position-relative row form-group"><label for="NamaTKA" class="col-sm-2 col-form-label">Nama TKA</label>
                                    <div class="col-sm-10"><input name="email" id="NamaTKA" type="text" class="form-control"></div>
                                </div>
                                <div class="position-relative row form-group"><label for="Kewarganegaraan" class="col-sm-2 col-form-label">Kewarganegaraan</label>
                                    <div class="col-sm-10"><input name="email" id="Kewarganegaraan" type="text" class="form-control"></div>
                                </div>
                                <div class="position-relative row form-group"><label for="passport" class="col-sm-2 col-form-label">Passport</label>
                                    <div class="col-sm-10"><input name="email" id="passport" type="text" class="form-control"></div>
                                </div>
                                <div class="position-relative row form-group"><label for="expassport" class="col-sm-2 col-form-label">Expired Passport</label>
                                    <div class="col-sm-10"><input name="email" id="expassport" type="text" class="form-control"></div>
                                </div>
                                <div class="position-relative row form-group"><label for="ttl" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-10"><input name="email" id="ttl" type="date" class="form-control"></div>
                                </div>
                                <div class="position-relative row form-group"><label for="Keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                                    <div class="col-sm-10"><input name="email" id="Keterangan" type="text" class="form-control"></div>
                                </div>
                                <div class="position-relative row form-group"><label for="Detail" class="col-sm-2 col-form-label">Detail</label>
                                    <div class="col-sm-10"><input name="email" id="Detail" type="text" class="form-control"></div>
                                </div>
                                <div class="position-relative row form-check">
                                    <div class="right">
                                        <button class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>