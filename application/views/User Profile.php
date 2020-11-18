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
                                    <li class="active breadcrumb-item" aria-current="page">User Profile</li>
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
                <div class="col-lg-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Edit Profil</h5>
                            <table class="mb-0 table">
                                <tbody>
                                    <tr>
                                        <th>Nama User</th>
                                        <td> Andi Rahmadi </td>
                                    </tr>
                                    <tr>
                                        <th>Username</th>
                                        <td> Andi96 </td>
                                    </tr>
                                    <tr>
                                        <th>Password</th>
                                        <td> ******** </td>
                                    </tr>
                                    <tr>
                                        <th>Keterangan</th>
                                        <td> Pekerja </td>
                                    </tr>
                                </tbody>
                            </table>
                            <button type="button" class="btn mr-2 mb-2 btn-warning" data-toggle="modal" data-target="#exampleModal" style="float: right; color: white;">
                                Edit
                            </button>
                        </div>
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
                <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="">
                    <div class="position-relative form-group"><label for="Nama" class="">Nama</label><input name="Nama" id="Nama" placeholder="Andi Rahmadi" type="text" class="form-control"></div>
                    <div class="position-relative form-group"><label for="Username" class="">Username</label><input name="Username" id="Username" placeholder="Andi96" type="username" class="form-control"></div>
                    <div class="position-relative form-group"><label for="Username" class="">Password</label><input name="Password" id="Password" placeholder="******" type="password" class="form-control"></div>
                    <div class="position-relative form-group"><label for="Keterangan" class="">Keterangan</label><input name="Keterangan" id="Keterangan" placeholder="Keterangan" type="username" class="form-control"></div>
                    <button class="mt-1 btn btn-primary" style="float: right;">Submit</button>
                </form>
            </div>
        </div>
    </div>

</div>