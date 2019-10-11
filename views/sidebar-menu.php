<div class="col-xl-3 col-lg-3 d-none d-lg-block side-menu__wrap" id="side-menu">
    <div class="blue-container side-menu">
        <h5 class="text-uppercase text-right close-mob-menu d-lg-none">
            <button class="mobile-menu d-lg-none close-mob-menu__btn" onclick="sideMenuMobileDropDown();">
                <span class="d-inline-flex h-100 align-items-center">Close menu <i class="icon-cross"></i></span>
            </button>
        </h5>
        <h5 class="side-menu-title">
            <i class="icon-world"></i>
            <a href="<?php echo $_SERVER["REQUEST_SCHEME"] . '://' . $_SERVER["HTTP_HOST"] ?>/karta">Världskarta</a>
            <a href="#" class="mobile-menu-icon-link d-lg-none" id="menu__search-btn"><i class="icon-search"></i></a>
            <a href="#" class="mobile-menu-icon-link d-lg-none mr-2"><i class="icon-info-circle"></i></a>
            <a href="#" class="mobile-menu-icon-link d-lg-none mr-2"><i class="icon-calendar-default"></i></a>
        </h5>
        <h5 class="side-menu-title">
            <i class="icon-star"></i>
            <a href="<?php echo $_SERVER["REQUEST_SCHEME"] . '://' . $_SERVER["HTTP_HOST"] ?>/sista-minuten">Sista minuten</a>
            <a href="#" class="mobile-menu-icon-link d-lg-none" id="menu__search-btn"><i class="icon-search"></i></a>
            <a href="#" class="mobile-menu-icon-link d-lg-none mr-2"><i class="icon-info-circle"></i></a>
            <a href="#" class="mobile-menu-icon-link d-lg-none mr-2"><i class="icon-calendar-default"></i></a>
        </h5>
        <form action="" class="mobile-search d-none">
            <label for="mobile-search">
                <input type="text" placeholder="Search...">
            </label>
            <button class="mobile-search__close-btn fz-20" id="mobile-search__close"><i class="icon-cross"></i></button>
        </form>
        <!-- SIDE MENU SECTION 1 -->

        <? foreach($sidebardata as $group => $categoryList){ ?>
            <ul class="side-menu-section">
                <? foreach($categoryList as $category => $tripList){ ?>
                    <li class="side-menu-dropdown"><a href="#"><?= $category ?></a>
                        <ul class="side-menu-dropdown-list blue-container">
                            <a href="#" class="side-menu-dropdown-list__back" id="menu__back-btn">back</a>
                            <h5 class="text-uppercase close-mob-menu">
                                <button class="mobile-menu d-lg-none close-mob-menu__btn" onclick="sideMenuMobileDropDown();">
                                    <span class="d-inline-flex h-100 align-items-center">Close menu <i class="icon-cross"></i></span>
                                </button>
                            </h5>
                            <? foreach($tripList as $trip){ ?>
                                <li><a href="/<?= $trip['url'] ?>"><?= $trip['tripname'] ?></a></li>
                            <? } ?>
                        </ul>
                    </li>
                <? } ?>
            </ul>
        <? } ?>


    </div>
</div>