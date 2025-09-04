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
    <?php require("components/header.php") ?>



    <!-- cursor start -->
    <!-- cursor start -->
    <div id="cursor" class="cursor">
        <img src="<?= base_url() ?>public/assets/img/cursor3.png" alt="Bird Cursor" class="bird-cursor" width="200px" />
    </div>
    <!-- cursor end -->
    <!-- cursor end -->

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
                        <div data-split='lines' data-anim="split-lines delay-3" class="pageHero__content text-center">
                            <!-- <div class="pageHero__subtitle text-white uppercase mb-20">SINCE 1998</div> -->
                            <h1 class="pageHero__title lh-11 capitalize text-white">About Wild Parrot</h1>
                            <p class="pageHero__text text-white">At Wild Parrot, we blend nature's tranquility with
                                unparalleled luxury, offering a unique retreat experience.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="layout-pt-lg layout-pb-lg">
            <div class="container">
                <div data-anim-wrap class="row y-gap-40 justify-between items-center">
                    <div data-anim="img-right cover-white delay-1" class="col-xl-6 col-lg-6">
                        <img src="<?= base_url() ?>public/assets/img/wild/IMG_5349.jpg" alt="image">
                    </div>

                    <div data-split='lines' data-anim="split-lines delay-3" class="col-xl-5 col-lg-6">
                        <h3 class="text-40 md:text-30 capitalize">
                            Who we are
                        </h3>

                        <p class="lh-17 pt-40">
                            Welcome to Wild Parrot A premium Villas & Resorts, a premium destination nestled in the lush
                            landscapes of
                            Koolikadavu, Attappadi. Spread across 3.5 acres of greenery, Wild Parrot offers the
                            perfect blend of nature, luxury, and comfort. <br> <br>

                            Our vision is to create an exclusive retreat where you can experience tranquility amidst
                            nature, while enjoying world-class amenities. Whether it’s building your own villa,
                            exploring our luxury resort concepts, or dining at our fine restaurants, Wild Parrot is
                            designed to be a true escape into paradise.<br> <br>

                            Located near Anaikatti, Kerala – God’s Own Country, our project is surrounded by rivers,
                            forests, and serene mountain views, making it an ideal getaway for relaxation,
                            investment, and premium living.<br> <br>

                            At Wild Parrot, we don’t just sell land – we create a lifestyle, a community, and a
                            sustainable escape where nature and modern living come together.
                        </p>
                    </div>
                </div>

                <div class="row y-gap-30 justify-between pt-60 md:pt-40">

                    <div data-split='lines' data-anim="split-lines delay-7" class="col-auto">
                        <h3 class="text-64 md:text-30">Greenery</h3>
                        <div class="uppercase lh-1 mt-20">3.5 Acres</div>
                    </div>

                    <div data-split='lines' data-anim="split-lines delay-9" class="col-auto">
                        <h3 class="text-64 md:text-30">Luxury</h3>
                        <div class="uppercase lh-1 mt-20">Modern and eco-friendly</div>
                    </div>

                    <div data-split='lines' data-anim="split-lines delay-11" class="col-auto">
                        <h3 class="text-64 md:text-30">Private Pools</h3>
                        <div class="uppercase lh-1 mt-20">exclusive lifestyle</div>
                    </div>

                    <div data-split='lines' data-anim="split-lines delay-13" class="col-auto">
                        <h3 class="text-64 md:text-30">Fine Dining</h3>
                        <div class="uppercase lh-1 mt-20">Multi-cuisine </div>
                    </div>

                </div>

            </div>
        </section>

        <section class="layout-pt-lg layout-pb-lg bg-light-1">
            <div data-anim-wrap class="container">
                <div class="row justify-center text-center">
                    <div data-split='lines' data-anim-child="split-lines delay-2" class="col-auto">
                        <div class="text-15 uppercase mb-30 sm:mb-10">OUR FUTURE SERVICES</div>
                        <h2 class="text-64 md:text-40">Amenities</h2>
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


        <section class="layout-pt-lg layout-pb-lg">
            <div class="container">

                <div class="row justify-center text-center">
                    <div data-split='lines' data-anim="split-lines delay-1" class="col-auto">
                        <div class="text-15 uppercase mb-30 sm:mb-10">There's So Much to Discover</div>
                        <h2 class="text-64 md:text-40">Project Layout</h2>
                    </div>
                </div>
                <div data-anim-wrap class="row y-gap-40 justify-between items-center">
                    <div data-anim="img-right cover-white delay-1" class="col-xl-12 col-lg-12">
                        <img src="<?= base_url() ?>public/assets/img/layout.jpg" alt="image">
                    </div>


                </div>



            </div>
        </section>



        <section class="cta -type-1">
            <div class="cta__bg">
                <img src="<?= base_url() ?>public/assets/img/1.png" alt="image">
            </div>

            <div class="container">
                <div class="row justify-center text-center">
                    <div class="col-auto">
                        <h2 class="text-92 lg:text-64 md:text-30 text-white">
                            Luxury Awaits.<br class="lg:d-none"> Reserve Your Experience.!
                        </h2>

                        <a href="<?= base_url() ?>contact"><button
                                class="button -md -type-2 bg-accent-2 -accent-1 mx-auto mt-40">BOOK NOW</button></a>
                    </div>
                </div>
            </div>
        </section>

        <?php require("components/footer.php") ?>


    </main>
    <?php require("components/jsfile.php") ?>
</body>

</html>