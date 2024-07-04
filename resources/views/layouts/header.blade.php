

<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 45, 'stickySetTop': '-45px', 'stickyChangeLogo': true}">
    <div class="header-body">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="/">
                                <img alt="SPIRIT AUTOMOBILE" style="height:100px !important;" data-sticky-width="100%" data-sticky-height="100%" data-sticky-top="25" src="img/log.png">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">

                    <div class="header-row">
                        <div class="header-nav pt-1">
                            <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                <nav class="collapse">

                                    <ul class="nav nav-pills" id="mainNav">
                                        <li><a class="{{ Request::is('/') ? 'active' : '' }}" href="/">Accueil</a></li>
                                        <!-- <li><a class="{{ Request::is('about') ? 'active' : '' }}" href="#">A Propos</a></li> -->
                                        <li><a class="{{ Request::is('pieces') ? 'active' : '' }}" href="/pieces">Pièces Auto</a></li>
                                        <li><a class="{{ Request::is('garage') ? 'active' : '' }}" href="/garage">Garage</a></li>
                                        <li><a class="{{ Request::is('contact') ? 'active' : '' }}" href="/contact">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <ul class="header-social-icons social-icons d-none d-sm-block">
                                <li class="social-icons-facebook"><a href="#" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-icons-instagram"><a href="#" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                            <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
