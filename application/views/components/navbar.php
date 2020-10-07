<header>
    <!-- Header Start -->
    <div class="header-area header-transparent">
        <div class="main-header ">
            <div class="header-bottom  header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo">
                                <a href="<?= base_url('PageController')?>"><img src="<?= base_url('project/1.png')?>" alt="" width="80"> <span style="font-weight: bold;font-size: 20px">E-Learning</span></a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">                                                                                          
                                            <li class="active" >
                                                <a href="<?= base_url('PageController/about')?>">Tentang E-learning</a>
                                            </li>
                                            <li><a href="#">Produk</a>
                                                <ul class="submenu">
                                                    <li><a href="<?= base_url('PageController/login')?>">E-learn PTN</a></li>
                                                    <li><a href="#">E-learn CPNS</a></li>
                                                    <li><a href="#">E-learn STAN</a></li>
                                                    <li><a href="#">E-learn Quiz</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="<?= base_url('PageController/testimonial')?>">Testimonial</a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url('PageController/blog')?>">Blog</a>
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