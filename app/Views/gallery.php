<!DOCTYPE html>
<html lang="en" data-x="html" data-x-toggle="html-overflow-hidden">

<?php require("components/head.php") ?>

<style>
    .container-animated {
        position: absolute !important;
        top: 50% !important;
        left: 50% !important;
        transform: translate(-50%, -50%) !important;
        text-align: center !important;
        width: 100% !important;
    }
</style>

<body>
    <div id="loader">
        <img src="<?= base_url() ?>public/assets/loader.gif" alt="Loading...">
    </div>


    <?php require("components/header.php") ?>


    <?php require("components/commonAudio.php") ?>


    <main>
        <?php require("components/headerMain.php") ?>


        <section data-anim-wrap class="pageHero -type-2 -items-center Background">
            <canvas class="Background"></canvas>
            <div data-anim-child="img-right cover-white delay-1" class="pageHero__bg">
                <img src="<?= base_url() ?>public/assets/img/wild/about/background.jpg" alt="image">
            </div>

            <div class="container container-animated">
                <div class="row justify-center">
                    <div class="col-auto">
                        <div data-split='lines' data-anim="split-lines delay-3"
                            class="pageHero__content text-center mobile-banner">
                            <!-- <div class="pageHero__subtitle text-white uppercase mb-20">SINCE 1998</div> -->
                            <h1 class="pageHero__title lh-11 capitalize text-white">Gallery</h1>
                            <p class="pageHero__text text-white">Nestled in the serene landscapes of Anaikatti, Kerala,
                                it’s your ultimate escape into paradise.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="layout-pt-lg layout-pb-lg">
            <div class="container">
                <div class="row justify-center text-center">
                    <div class="col-xl-6 col-lg-8 col-md-10" data-split='lines' data-anim="split-lines delay-1">
                        <div class="text-15 uppercase mb-30 sm:mb-10">
                            OUR GALLERY
                        </div>
                        <h2 class="text-64 md:text-40 lh-11">
                            Discover Our Upcoming &
                            Suites and Villas
                        </h2>

                    </div>
                </div>

                <div class="row x-gap-30 y-gap-60 pt-100 sm:pt-50">

                    <div class="col-lg-4 col-md-6" data-anim="slide-up delay-1">
                        <a class="roomCard -type-2 -hover-button-center">
                            <div class="roomCard__image -no-rounded ratio ratio-45:54 -hover-button-center__wrap">
                                <img src="<?= base_url() ?>public/assets/img/wild/img2.jpeg" alt="image"
                                    class="img-ratio">
                            </div>

                            <div class="roomCard__content mt-30">
                                <div class="d-flex justify-between items-end">
                                    <h3 class="roomCard__title lh-065 text-40 md:text-24">Luxury Suite</h3>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6" data-anim="slide-up delay-1">
                        <a class="roomCard -type-2 -hover-button-center">
                            <div class="roomCard__image -no-rounded ratio ratio-45:54 -hover-button-center__wrap">
                                <img src="<?= base_url() ?>public/assets/img/wild/img3.jpeg" alt="image"
                                    class="img-ratio">




                            </div>

                            <div class="roomCard__content mt-30">
                                <div class="d-flex justify-between items-end">
                                    <h3 class="roomCard__title lh-065 text-40 md:text-24">Classic & Premium</h3>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6" data-anim="slide-up delay-1">
                        <a class="roomCard -type-2 -hover-button-center">
                            <div class="roomCard__image -no-rounded ratio ratio-45:54 -hover-button-center__wrap">
                                <img src="<?= base_url() ?>public/assets/img/wild/img4.jpeg" alt="image"
                                    class="img-ratio">




                            </div>

                            <div class="roomCard__content mt-30">
                                <div class="d-flex justify-between items-end">
                                    <h3 class="roomCard__title lh-065 text-40 md:text-24">Deluxe Suite </h3>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6" data-anim="slide-up delay-1">
                        <a class="roomCard -type-2 -hover-button-center">
                            <div class="roomCard__image -no-rounded ratio ratio-45:54 -hover-button-center__wrap">
                                <img src="<?= base_url() ?>public/assets/img/wild/img5.jpeg" alt="image"
                                    class="img-ratio">




                            </div>

                            <div class="roomCard__content mt-30">
                                <div class="d-flex justify-between items-end">
                                    <h3 class="roomCard__title lh-065 text-40 md:text-24">Standard & Comfort</h3>
                                </div>


                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6" data-anim="slide-up delay-1">
                        <a class="roomCard -type-2 -hover-button-center">
                            <div class="roomCard__image -no-rounded ratio ratio-45:54 -hover-button-center__wrap">
                                <img src="<?= base_url() ?>public/assets/img/wild/img7.jpeg" alt="image"
                                    class="img-ratio">




                            </div>

                            <div class="roomCard__content mt-30">
                                <div class="d-flex justify-between items-end">
                                    <h3 class="roomCard__title lh-065 text-40 md:text-24">Cozy & Spacious</h3>
                                </div>


                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6" data-anim="slide-up delay-1">
                        <a class="roomCard -type-2 -hover-button-center">
                            <div class="roomCard__image -no-rounded ratio ratio-45:54 -hover-button-center__wrap">
                                <img src="<?= base_url() ?>public/assets/img/wild/img9.jpeg" alt="image"
                                    class="img-ratio">




                            </div>

                            <div class="roomCard__content mt-30">
                                <div class="d-flex justify-between items-end">
                                    <h3 class="roomCard__title lh-065 text-40 md:text-24">Superior & Executive</h3>
                                </div>


                            </div>
                        </a>
                    </div>



                    <div class="col-lg-4 col-md-6" data-anim="slide-up delay-1">
                        <a class="roomCard -type-2 -hover-button-center">
                            <div class="roomCard__image -no-rounded ratio ratio-45:54 -hover-button-center__wrap">
                                <img src="<?= base_url() ?>public/assets/img/wild/img8.jpeg" alt="image"
                                    class="img-ratio">
                            </div>

                            <div class="roomCard__content mt-30">
                                <div class="d-flex justify-between items-end">
                                    <h3 class="roomCard__title lh-065 text-40 md:text-24">Luxury Villa</h3>
                                </div>


                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6" data-anim="slide-up delay-1">
                        <a class="roomCard -type-2 -hover-button-center">
                            <div class="roomCard__image -no-rounded ratio ratio-45:54 -hover-button-center__wrap">
                                <img src="<?= base_url() ?>public/assets/img/wild/img10.jpeg" alt="image"
                                    class="img-ratio">




                            </div>

                            <div class="roomCard__content mt-30">
                                <div class="d-flex justify-between items-end">
                                    <h3 class="roomCard__title lh-065 text-40 md:text-24">Premium villa</h3>
                                </div>


                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6" data-anim="slide-up delay-1">
                        <a class="roomCard -type-2 -hover-button-center">
                            <div class="roomCard__image -no-rounded ratio ratio-45:54 -hover-button-center__wrap">
                                <img src="<?= base_url() ?>public/assets/img/wild/img1.jpeg" alt="image"
                                    class="img-ratio">



                            </div>

                            <div class="roomCard__content mt-30">
                                <div class="d-flex justify-between items-end">
                                    <h3 class="roomCard__title lh-065 text-40 md:text-24">Luxury villa</h3>
                                </div>


                            </div>
                        </a>
                    </div>




                </div>

                <!-- <div class="row justify-center pt-100 sm:pt-50">
                    <div class="col-auto">
                        <button class="button -md -type-2 -outline-accent-1 mt-50 md:mt-30 mx-auto">LOAD MORE</button>
                    </div>
                </div> -->
            </div>
        </section>

        <section class="layout-pt-lg layout-pb-lg bg-light-1">
            <div data-anim-wrap class="container">
                <div class="row justify-center text-center">
                    <div data-split='lines' data-anim-child="split-lines delay-2" class="col-auto">
                        <div class="text-15 uppercase mb-30 sm:mb-10">OUR SERVICES</div>
                        <h2 class="text-64 md:text-40">Hotel Facilities</h2>
                    </div>
                </div>

                <div class="row y-gap-40 justify-between pt-100 sm:pt-50">

                    <div data-anim-child="slide-up delay-4" class="col-lg-auto col-md-4 col-6">
                        <div class="iconCard -type-1 -hover-1 text-center">
                            <div class="iconCard__icon text-50">
                                <div class="iconCard__icon__circle bg-white"></div>
                                <i class="icon-wifi"></i>
                            </div>
                            <h4 class="text-24 sm:text-21 lh-1 mt-30 sm:mt-15">Wifi &amp; Internet</h4>
                        </div>
                    </div>

                    <div data-anim-child="slide-up delay-5" class="col-lg-auto col-md-4 col-6">
                        <div class="iconCard -type-1 -hover-1 text-center">
                            <div class="iconCard__icon text-50">
                                <div class="iconCard__icon__circle bg-white"></div>
                                <i class="icon-bus"></i>
                            </div>
                            <h4 class="text-24 sm:text-21 lh-1 mt-30 sm:mt-15">Airport Transfer</h4>
                        </div>
                    </div>

                    <div data-anim-child="slide-up delay-6" class="col-lg-auto col-md-4 col-6">
                        <div class="iconCard -type-1 -hover-1 text-center">
                            <div class="iconCard__icon text-50">
                                <div class="iconCard__icon__circle bg-white"></div>
                                <i class="icon-tv"></i>
                            </div>
                            <h4 class="text-24 sm:text-21 lh-1 mt-30 sm:mt-15">Smart TV</h4>
                        </div>
                    </div>

                    <div data-anim-child="slide-up delay-7" class="col-lg-auto col-md-4 col-6">
                        <div class="iconCard -type-1 -hover-1 text-center">
                            <div class="iconCard__icon text-50">
                                <div class="iconCard__icon__circle bg-white"></div>
                                <i class="icon-bed"></i>
                            </div>
                            <h4 class="text-24 sm:text-21 lh-1 mt-30 sm:mt-15">Breakfast in Bed</h4>
                        </div>
                    </div>

                    <div data-anim-child="slide-up delay-8" class="col-lg-auto col-md-4 col-6">
                        <div class="iconCard -type-1 -hover-1 text-center">
                            <div class="iconCard__icon text-50">
                                <div class="iconCard__icon__circle bg-white"></div>
                                <i class="icon-laundry"></i>
                            </div>
                            <h4 class="text-24 sm:text-21 lh-1 mt-30 sm:mt-15">Laundry Services</h4>
                        </div>
                    </div>

                    <div data-anim-child="slide-up delay-9" class="col-lg-auto col-md-4 col-6">
                        <div class="iconCard -type-1 -hover-1 text-center">
                            <div class="iconCard__icon text-50">
                                <div class="iconCard__icon__circle bg-white"></div>
                                <i class="icon-housekeeper"></i>
                            </div>
                            <h4 class="text-24 sm:text-21 lh-1 mt-30 sm:mt-15">Housekeeper Services</h4>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <?php require("components/footer.php") ?>


    </main>

    <!-- JavaScript -->
    <?php require("components/jsfile.php") ?>
</body>

</html>