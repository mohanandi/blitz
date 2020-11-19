<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $judul ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

    <link href="<?= base_url(); ?>assets/main.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
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
            <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="assets/images/avatars/3.jpg" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button href="User Profile.html" type="button" tabindex="0" class="dropdown-item"><a href="User Profile.html">Profil</a></button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <button type="button" tabindex="0" class="dropdown-item" style="color:red;">Logout</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        Andi Rahmadi
                                    </div>
                                    <div class="widget-subheading">
                                        VP People Manager
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                                <a href="<?= base_url('Home'); ?>">
                                    <i class="metismenu-icon pe-7s-home"></i>
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('Data_Tka'); ?>">
                                    <i class="metismenu-icon pe-7s-users"></i>
                                    Data TKA
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('Data_Pt'); ?>" class="mm-active">
                                    <i class="metismenu-icon pe-7s-portfolio"></i>
                                    Data PT
                                </a>
                            </li>
							<li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-ticket"></i>
                                        Data Voucher
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
										<li>
                                            <a href="<?= base_url('Data_Voucher'); ?>">
                                                <i class="metismenu-icon"></i>
                                                Data Voucher Dashboard
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('Data_Voucher'); ?>">
                                                <i class="metismenu-icon"></i>
                                                Input Voucher VISA
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('Data_Voucher/other'); ?>">
                                                <i class="metismenu-icon">
                                                </i>Input Voucher Other
                                            </a>
                                        </li>
                                        <li>
                                            <a href="elements-icons.html">
                                                <i class="metismenu-icon">
                                                </i>Riwayat Voucher Visa
                                            </a>
                                        </li>
                                        <li>
                                            <a href="elements-badges-labels.html">
                                                <i class="metismenu-icon">
                                                </i>Riwayat Voucher Other
                                            </a>
                                        </li>
                                        <li>
                                            <a href="elements-cards.html">
                                                <i class="metismenu-icon">
                                                </i>Report Voucher
                                            </a>
                                        </li>
                                    </ul>
							</li>
                            <li>
                                <a href="<?= base_url('Data_Voucher'); ?>">
                                    <i class="metismenu-icon pe-7s-ticket"></i>
                                    Data Voucher
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('Data_RPTKA'); ?>">
                                    <i class="metismenu-icon pe-7s-share"></i>
                                    Data RPTKA
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('Data_Visa'); ?>">
                                    <i class="metismenu-icon pe-7s-photo-gallery"></i>
                                    Data VISA
                                </a>
                            </li>
                        </ul>
						<ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">Manajemen User</li>
                            <li>
                                <a href="<?= base_url('Tambah_User'); ?>">
                                    <i class="metismenu-icon pe-7s-user"></i>
                                    Tambah User
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>


            </div>

