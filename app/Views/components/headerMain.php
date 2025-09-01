<header class="header -h-110 -mx-60 -blur -border-bottom-1 js-header" data-add-bg="bg-accent-1" data-x="header"
    data-x-toggle="-is-menu-opened">
    <div class="header__container h-full items-center">
        <div class="header__left d-flex items-center">
            <button class="d-flex items-center cursor-pointer js-menuFullScreen-toggle">
                <i class="icon-menu text-9 text-white"></i>
                <div class="text-15 uppercase text-white ml-30 sm:d-none">Menu</div>
            </button>

            <div class="d-flex items-center ml-90 xl:d-none">
                <i class="icon-phone text-20 text-white mr-30"></i>
                <div class="text-15 uppercase text-white">+91 880716781</div>
            </div>
        </div>

        <div class="header__center">
            <div class="header__logo">
                <a href="<?= base_url() ?>"> <img src="<?= base_url() ?>public/assets/img/350_logo_dark.png" alt="logo"
                        width="130px"></a>
            </div>
        </div>

        <div class="header__right d-flex items-center h-full">
            <a href="<?= base_url() ?>gallery" class="button text-white mr-30 xl:mr-0"> Gallery</a>

            <div class="line -vertical bg-white-10 h-full ml-90 mr-90 xl:d-none"></div>

            <a href="<?= base_url() ?>contact" class="button text-white mr-30 xl:d-none">BOOK YOUR ENQUIRY</a>
        </div>
    </div>
</header>