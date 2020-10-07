<style type="text/css">
     @media(max-width:800px){
        .imgg{
            width: 45px;
        }
     }
</style>
<header>
    <!-- Header Start -->
    <div class="header-area header-transparent">
        <div class="main-header ">
            <div class="header-bottom  header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="<?= base_url('PageController')?>"><img src="<?= base_url('assets/user/')?>assets/img/gallery/1.png" alt="" width="100" class="imgg"></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10">
                            <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">                                                                                          
                                            <li class="active" >
                                                <a href="<?= base_url('PageController/event')?>">Event</a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url('PageController/ranking')?>">Rangking</a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url('PageController/riwayat_pembelian')?>">Riwayat Pembelian</a>
                                            </li>
                                            <li><a href="#">Produk</a>
                                                <ul class="submenu" style="margin-left: -100px">
                                                    <li><a href="<?= base_url('PageController/event')?>">E-learn PTN</a></li>
                                                    <li><a href="blog.html">E-learn CPNS</a></li>
                                                    <li><a href="blog.html">E-learn STAN</a></li>
                                                    <li><a href="blog.html">E-learn Quiz</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Profil</a>
                                                <ul class="submenu" style="margin-left: -100px">
                                                    <li><a href="<?= base_url('PageController/profile')?>">My Profil</a></li>
                                                    <li><a href="<?= base_url('PageController/login')?>">Logout</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div> 
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>