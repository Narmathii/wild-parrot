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


                        </p>
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
            </div>
        </section>



        <section class="layout-pt-lg layout-pb-lg">
            <div class="container">
                <div data-anim-wrap class="row y-gap-40 justify-between items-center">


                    <div data-split='lines' data-anim="split-lines delay-3" class="col-xl-5 col-lg-6">
                        <h3 class="text-40 md:text-30 capitalize">
                            A Sustainable Future
                        </h3>

                        <p class="lh-17 pt-40">
                            At Wild Parrot, we do more than offer luxurious living. We are deeply committed to
                            sustainability and responsible living. As part of our holistic approach to nature, a portion
                            of the proceeds from the sale of our land will go directly towards supporting our organic
                            cow farms. This initiative allows us to provide high-quality, locally sourced dairy products
                            and support the agricultural community while maintaining the land’s ecological integrity.
                            <br> <br>

                            Our cow farms, nestled within the same natural surroundings, serve as an extension of the
                            Wild Parrot experience. Through sustainable farming practices, we aim to enrich the land,
                            contribute to the local economy, and provide you with a connection to the natural rhythms of
                            life here in the heart of Kerala.<br> <br>


                        </p>
                    </div>

                    <div data-anim="img-right cover-white delay-1" class="col-xl-6 col-lg-6">
                        <img src="<?= base_url() ?>public/assets/img/farm.jpg" alt="image">
                    </div>
                </div>


                <div class="row y-gap-30 justify-between pt-60 md:pt-40">
                    <div data-split='lines' data-anim="split-lines delay-7" class="col-auto text-center">
                        <h3 class="text-40 md:text-24">Eco Living</h3>
                        <div class="uppercase lh-1 mt-20">Sustainable Farming</div>
                    </div>

                    <div data-split='lines' data-anim="split-lines delay-9" class="col-auto text-center">
                        <h3 class="text-40 md:text-24">Premium Lifestyle</h3>
                        <div class="uppercase lh-1 mt-20">Supporting Local Farmers</div>
                    </div>

                    <div data-split='lines' data-anim="split-lines delay-11" class="col-auto text-center">
                        <h3 class="text-40 md:text-24">Organic Harmony</h3>
                        <div class="uppercase lh-1 mt-20">Organic Cow Farms</div>
                    </div>

                    <div data-split='lines' data-anim="split-lines delay-13" class="col-auto text-center">
                        <h3 class="text-40 md:text-24">Community Living</h3>
                        <div class="uppercase lh-1 mt-20">Community Contribution</div>
                    </div>
                </div>

            </div>
        </section>


        <section class="layout-pt-lg layout-pb-lg">
            <div class="container">
                <div data-anim-wrap class="row y-gap-40 justify-between items-center">

                    <!-- Image Column -->
                    <div data-anim="img-right cover-white delay-1" class="col-xl-6 col-lg-6">
                        <img src="<?= base_url() ?>public/assets/img/DJI_0819.jpg" alt="image">
                    </div>

                    <!-- Content Column -->
                    <div data-split='lines' data-anim="split-lines delay-3" class="col-xl-5 col-lg-6">
                        <h3 class="text-40 md:text-30 capitalize">
                            Our Location
                        </h3>

                        <p class="lh-17 pt-40">
                            Located near Anaikatti, Kerala—God’s Own Country, Wild Parrot sits in the heart of nature’s
                            abundance. Surrounded by majestic mountains, flowing rivers, and untouched forests, this
                            location offers more than scenic beauty; it offers peace of mind, fresh air, and a true
                            escape from the rush of city life.<br>

                            From morning mist rolling over the hills to starlit nights by the riverside, the setting
                            provides the perfect backdrop for relaxation, wellness, and inspiration. With proximity to
                            Anaikatti, Coimbatore.
                        </p>


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


        <section class="layout-pt-lg layout-pb-lg">
            <div data-anim-wrap class="container">
                <div class="row justify-center text-center">
                    <div data-split='lines' data-anim-child="split-lines delay-2" class="col-auto">
                        <div class="text-15 uppercase mb-30 sm:mb-10">There's So Much to Discover</div>
                        <h2 class="text-64 md:text-40">Unforgettable Experience</h2>
                    </div>
                </div>

                <div class="overflow-hidden pt-100 sm:pt-50 js-section-slider" data-gap="30"
                    data-slider-cols="xl-4 lg-4 md-3 sm-2 base-1" data-pagination="js-slider3-pagination">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="#" class="baseCard -type-1">
                                <div class="baseCard__image ratio ratio-33:45 rounded-16"
                                    data-anim-child="img-right cover-white delay-10">
                                    <img src="<?= base_url() ?>public/assets/img/wild/about/DJI_0841.JPG" alt="image"
                                        class="img-ratio">
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="baseCard -type-1">
                                <div class="baseCard__image ratio ratio-33:45 rounded-16"
                                    data-anim-child="img-right cover-white delay-2">
                                    <img src="<?= base_url() ?>public/assets/img/wild/about/DJI_0832.jpg" alt="image"
                                        class="img-ratio">
                                </div>


                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="#" class="baseCard -type-1">
                                <div class="baseCard__image ratio ratio-33:45 rounded-16"
                                    data-anim-child="img-right cover-white delay-4">
                                    <img src="<?= base_url() ?>public/assets/img/wild/IMG_5343.JPG" alt="image"
                                        class="img-ratio">
                                </div>


                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="#" class="baseCard -type-1">
                                <div class="baseCard__image ratio ratio-33:45 rounded-16"
                                    data-anim-child="img-right cover-white delay-6">
                                    <img src="<?= base_url() ?>public/assets/img/wild/IMG_5349.JPG" alt="image"
                                        class="img-ratio">
                                </div>


                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="#" class="baseCard -type-1">
                                <div class="baseCard__image ratio ratio-33:45 rounded-16"
                                    data-anim-child="img-right cover-white delay-8">
                                    <img src="<?= base_url() ?>public/assets/img/DJI_0819.jpg" alt="image"
                                        class="img-ratio">
                                </div>


                            </a>
                        </div>



                        <div class="swiper-slide">
                            <a href="#" class="baseCard -type-1">
                                <div class="baseCard__image ratio ratio-33:45 rounded-16"
                                    data-anim-child="img-right cover-white delay-12">
                                    <img src="<?= base_url() ?>public/assets/img/wild/about/IMG_5413.JPG" alt="image"
                                        class="img-ratio">
                                </div>


                            </a>
                        </div>
                    </div>

                    <div class="row justify-center pt-100 sm:pt-50 pb-20">
                        <div class="col-auto">
                            <div class="pagination -type-1 -accent-1 js-slider3-pagination"></div>
                        </div>
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