<header class="header_area">
    <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between light left">
        <!-- Classy Menu -->
        <nav class="classy-navbar" id="essenceNav">
            <!-- Logo -->
            <a class="nav-brand" href="home"><img src="img/core-img/logobaru.png"  width="72" height="42" alt=""></a>
            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
                <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>
            <!-- Menu -->
            <div class="classy-menu">
                <!-- close btn -->
                <div class="classycloseIcon">
                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                </div>
                <!-- Nav Start -->
                <div class="classynav">
                    <ul>
                        <li><a href="checkout">Pesanan (<?= $keranjang['jml'] ?>)</a></li>
                    </ul>
                    <ul>
                        <li><a href="status">Status Order</a></li>
                    </ul>
                    <ul>
                        <li><a href="profil">Profil</a></li>
                    </ul>
                    <ul>
                        <li><a href="contact">Contact</a></li>
                    </ul>
                    <ul>
                        <li><a href="include/logout">logout</a></li>
                    </ul>
                </div>
                <!-- Nav End -->
            </div>
        </nav>
        <a style="  position: absolute;
  right: 20px;"><?= $data_member['nm_user']; ?></a>
    </div>
</header>