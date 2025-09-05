<!DOCTYPE html>
<html lang="en" data-x="html" data-x-toggle="html-overflow-hidden">
<?php require("components/head.php") ?>

<style>
  #container-animated {
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

  <main class="">
    <?php require("components/headerMain.php") ?>

    <section data-anim-wrap class="hero -type-1 z-1 Background">
      <canvas class="Background"></canvas>
      <div data-anim-child="img-right cover-white" class="hero__bg">
        <img src="<?= base_url() ?>public/assets/img/bg3.jpg" alt="image">
      </div>

      <div data-anim-wrap class="container animated" id="container-animated">
        <div class="row justify-center text-center">
          <div class="col-xl-8 col-lg-10">
            <div data-split='lines' data-anim="split-lines delay-2" class="hero__content">
              <div class="hero__subtitle text-white">
                Where Elegance Meets Comfort
              </div>

              <h1 class="hero__title text-white">
                Experience Unparalleled Comfort
              </h1>
            </div>
          </div>
        </div>
      </div>


      <!-- <div data-anim-child="slide-up delay-7" class="hero__filter">
        <div class="searchForm -type-1 -blur-1 rounded-200 -text-white">
          <div class="searchForm__form">
            <div class="searchFormItem js-select-control js-form-dd js-calendar">
              <div class="searchFormItem__button" data-x-click="calendar">
                <div>
                  <span class="js-first-date">Check In - Check Out</span>
                  <span class="js-last-date"></span>
                </div>
                <i class="icon-arrow-down ml-10"></i>
              </div>


              <div class="searchFormItemDropdown -calendar" data-x="calendar" data-x-toggle="is-active">
                <div class="searchFormItemDropdown__container">

                  <div class="searchMenu-date -searchForm js-form-dd js-calendar-el">
                    <div class="searchMenu-date__field shadow-2" data-x-dd="searchMenu-date"
                      data-x-dd-toggle="-is-active">
                      <div class="rounded-4">
                        <div class="elCalendar js-calendar-el-calendar"></div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>

            <div class="searchFormItem js-select-control js-form-dd">
              <div class="searchFormItem__button" data-x-click="rooms">
                <div class="js-select-control-chosen">Rooms</div>
                <i class="icon-arrow-down ml-10"></i>
              </div>
              <div class="searchFormItemDropdown -counter" data-x="rooms" data-x-toggle="is-active">
                <div class="searchFormItemDropdown__container">
                  <div class="searchFormItemDropdown__list">

                    <div class="searchFormItemDropdown__item js-select-control-counter">
                      <div class="fw-500 js-search-title">Rooms</div>
                      <div class="d-flex fw-500 js-search-counter">
                        <div class="cursor-pointer size-40 flex-center js-remove">
                          <i class="custom-icon-minus">
                            <span></span>
                          </i>
                        </div>

                        <div class="size-40 flex-center js-number">0</div>

                        <div class="cursor-pointer size-40 flex-center js-add">
                          <i class="custom-icon-plus">
                            <span></span>
                            <span></span>
                          </i>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>

            </div>

            <div class="searchFormItem js-select-control js-form-dd">
              <div class="searchFormItem__button" data-x-click="guests">
                <div class="js-select-control-chosen">Guests</div>
                <i class="icon-arrow-down ml-10"></i>
              </div>
              <div class="searchFormItemDropdown -counter" data-x="guests" data-x-toggle="is-active">
                <div class="searchFormItemDropdown__container">
                  <div class="searchFormItemDropdown__list">

                    <div class="searchFormItemDropdown__item js-select-control-counter">
                      <div class="fw-500 js-search-title">Adults</div>
                      <div class="d-flex fw-500 js-search-counter">
                        <div class="cursor-pointer size-40 flex-center js-remove">
                          <i class="custom-icon-minus">
                            <span></span>
                          </i>
                        </div>

                        <div class="size-40 flex-center js-number">0</div>

                        <div class="cursor-pointer size-40 flex-center js-add">
                          <i class="custom-icon-plus">
                            <span></span>
                            <span></span>
                          </i>
                        </div>
                      </div>
                    </div>

                    <div class="searchFormItemDropdown__item js-select-control-counter">
                      <div class="fw-500 js-search-title">Children</div>
                      <div class="d-flex fw-500 js-search-counter">
                        <div class="cursor-pointer size-40 flex-center js-remove">
                          <i class="custom-icon-minus">
                            <span></span>
                          </i>
                        </div>

                        <div class="size-40 flex-center js-number">0</div>

                        <div class="cursor-pointer size-40 flex-center js-add">
                          <i class="custom-icon-plus">
                            <span></span>
                            <span></span>
                          </i>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="searchForm__button">
            <button class="button -accent-1 bg-accent-2 size-50 rounded-full">Go</button>
          </div>
        </div>
      </div> -->


    </section>

    <section id="secondSection" data-anim-wrap class="layout-pt-lg layout-pb-lg">

      <div class="container">


        <div class="row justify-center text-center">
          <div class="col-auto">
            <div data-anim-child="slide-up delay-1" class="text-15 uppercase mb-30 sm:mb-10">PREMIUM VILLAS & RESORT
            </div>
            <h2 data-anim-child="slide-up delay-2" class="text-64 md:text-40">Future of Premium Living</h2>
          </div>
        </div>

        <div class="row y-gap-30 pt-100 sm:pt-50">
          <div class="col-lg-6">
            <div data-anim-child="slide-up delay-3" class="col-lg-8 px-0">
              <p>Welcome to Wild Parrot, a place where luxury meets nature. Located in the beautiful Koolikadavu,
                Attapadi, we are excited to bring a brand new resort and villa community to this peaceful and stunning
                area.
              </p>
            </div>

            <div data-anim-child="slide-up delay-4">
              <a href="<?= base_url() ?>contact" class="button -type-1 mt-60 md:mt-30">
                <i class="-icon">
                  <svg width="50" height="30" viewBox="0 0 50 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M35.8 28.0924C43.3451 28.0924 49.4616 21.9759 49.4616 14.4308C49.4616 6.88577 43.3451 0.769287 35.8 0.769287C28.255 0.769287 22.1385 6.88577 22.1385 14.4308C22.1385 21.9759 28.255 28.0924 35.8 28.0924Z"
                      stroke="#122223" />
                    <path
                      d="M33.4808 10.2039L32.9985 10.8031L37.2931 14.2623H0.341553V15.0315H37.28L33.0008 18.4262L33.4785 19.0285L39 14.6492L33.4808 10.2039Z"
                      fill="#122223" />
                  </svg>
                </i>
                Book now
              </a>
            </div>

            <div class="lg:d-none mt-60 md:mt-30" data-anim-child="slide-up delay-6">
              <img src="<?= base_url() ?>public/assets/img/wild/about/DJI_0841.JPG" alt="image" width="670px"
                height="586px">
            </div>
          </div>

          <div class="col-lg-6 lg:d-none">
            <div data-anim-child="slide-up delay-7">
              <img src="<?= base_url() ?>public/assets/img/wild/about/IMG_5304.JPG" alt="image">
            </div>
            <div class="mt-30" data-anim-child="slide-up delay-8">
              <img src="<?= base_url() ?>public/assets/img/wild/about/IMG_5349.JPG" alt="image" width="400px"
                height="200px">
            </div>

          </div>
        </div>

        <div data-anim-child="slide-up delay-4" class="d-none lg:d-flex mt-40">
          <img src="<?= base_url() ?>public/assets/img/wild/about/DJI_0841.JPG" alt="image" class="w-1/1">
        </div>
      </div>
    </section>

    <section class="layout-pt-lg layout-pb-lg bg-accent-1">
      <div class="container">
        <div class="row y-gap-30 justify-between items-end">
          <div class="col-auto">
            <div class="text-15 uppercase text-white mb-30 sm:mb-10">EXPLORE</div>
            <h2 class="text-64 md:text-40 lh-065 text-white">Our Future Villas & Residences</h2>
          </div>

          <div class="col-auto">
            <button class="button -type-1 text-white">
              <i class="-icon">
                <svg width="50" height="30" viewBox="0 0 50 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M35.8 28.0924C43.3451 28.0924 49.4616 21.9759 49.4616 14.4308C49.4616 6.88577 43.3451 0.769287 35.8 0.769287C28.255 0.769287 22.1385 6.88577 22.1385 14.4308C22.1385 21.9759 28.255 28.0924 35.8 28.0924Z"
                    stroke="#FFF" />
                  <path
                    d="M33.4808 10.2039L32.9985 10.8031L37.2931 14.2623H0.341553V15.0315H37.28L33.0008 18.4262L33.4785 19.0285L39 14.6492L33.4808 10.2039Z"
                    fill="#FFF" />
                </svg>
              </i>
              Book now
            </button>
          </div>
        </div>

        <div class="row y-gap-30 pt-100 sm:pt-50">
          <div class="col-xl-7">
            <div class="js-section-slider" data-gap="30" data-slider-cols="xl-1 lg-1 md-1 sm-1 base-1"
              data-nav-prev="js-slider1-prev" data-nav-next="js-slider1-next" data-pagination="js-slider1-pagination">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <a href="<?= base_url() ?>contact" data-anim-wrap
                    class="roomCard -type-1 -hover-button-center- -image-border">
                    <div data-anim-child="img-right cover-accent-1 delay-1">
                      <div class="roomCard__image ratio ratio-76:62 -hover-button-center__wrap">
                        <img src="<?= base_url() ?>public/assets/img/wild/img1.jpeg" alt="image" class="img-ratio">

                        <div class="-image-border__item"></div>

                        <div
                          class="-hover-button-center__button flex-center size-130 rounded-full bg-accent-1-50 blur-1 border-white-10">
                          <span class="text-15 fw-500 text-white">BOOK NOW</span>
                        </div>
                      </div>
                    </div>

                    <div class="roomCard__content mt-30" data-anim-child="slide-up delay-5">
                      <div class="d-flex justify-between items-center">
                        <h3 class="roomCard__title text-40 md:text-30 text-white">Luxury Suite</h3>
                        <!-- <div class="roomCard__price text-white">$499 / NIGHT</div> -->
                      </div>

                      <!-- <div class="d-flex items-center x-gap-10 text-white pt-30 md:pt-20">
                        <div>30M2</div>
                        <div>
                          <div class="circle bg-white-10"></div>
                        </div>
                        <div>2 ADULTS</div>
                        <div>
                          <div class="circle bg-white-10"></div>
                        </div>
                        <div>1 CHILDREN</div>
                      </div> -->
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="<?= base_url() ?>contact" data-anim-wrap
                    class="roomCard -type-1 -hover-button-center- -image-border">
                    <div data-anim-child="img-right cover-accent-1 delay-1">
                      <div class="roomCard__image ratio ratio-76:62 -hover-button-center__wrap">
                        <img src="<?= base_url() ?>public/assets/img/wild/img2.jpeg" alt="image" class="img-ratio">

                        <div class="-image-border__item"></div>

                        <div
                          class="-hover-button-center__button flex-center size-130 rounded-full bg-accent-1-50 blur-1 border-white-10">
                          <span class="text-15 fw-500 text-white">BOOK NOW</span>
                        </div>
                      </div>
                    </div>

                    <div class="roomCard__content mt-30" data-anim-child="slide-up delay-5">
                      <div class="d-flex justify-between items-center">
                        <h3 class="roomCard__title text-40 md:text-30 text-white">Classic & Premium</h3>
                        <!-- <div class="roomCard__price text-white">$499 / NIGHT</div> -->
                      </div>

                      <!-- <div class="d-flex items-center x-gap-10 text-white pt-30 md:pt-20">
                        <div>30M2</div>
                        <div>
                          <div class="circle bg-white-10"></div>
                        </div>
                        <div>2 ADULTS</div>
                        <div>
                          <div class="circle bg-white-10"></div>
                        </div>
                        <div>1 CHILDREN</div>
                      </div> -->
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="<?= base_url() ?>contact" data-anim-wrap
                    class="roomCard -type-1 -hover-button-center- -image-border">
                    <div data-anim-child="img-right cover-accent-1 delay-1">
                      <div class="roomCard__image ratio ratio-76:62 -hover-button-center__wrap">
                        <img src="<?= base_url() ?>public/assets/img/wild/img7.jpeg" alt="image" class="img-ratio">

                        <div class="-image-border__item"></div>

                        <div
                          class="-hover-button-center__button flex-center size-130 rounded-full bg-accent-1-50 blur-1 border-white-10">
                          <span class="text-15 fw-500 text-white">BOOK NOW</span>
                        </div>
                      </div>
                    </div>

                    <div class="roomCard__content mt-30" data-anim-child="slide-up delay-5">
                      <div class="d-flex justify-between items-center">
                        <h3 class="roomCard__title text-40 md:text-30 text-white">Deluxe Room</h3>
                        <!-- <div class="roomCard__price text-white">$499 / NIGHT</div> -->
                      </div>

                      <!-- <div class="d-flex items-center x-gap-10 text-white pt-30 md:pt-20">
                        <div>30M2</div>
                        <div>
                          <div class="circle bg-white-10"></div>
                        </div>
                        <div>2 ADULTS</div>
                        <div>
                          <div class="circle bg-white-10"></div>
                        </div>
                        <div>1 CHILDREN</div>
                      </div> -->
                    </div>
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="<?= base_url() ?>contact" data-anim-wrap
                    class="roomCard -type-1 -hover-button-center- -image-border">
                    <div data-anim-child="img-right cover-accent-1 delay-1">
                      <div class="roomCard__image ratio ratio-76:62 -hover-button-center__wrap">
                        <img src="<?= base_url() ?>public/assets/img/wild/img3.jpeg" alt="image" class="img-ratio">

                        <div class="-image-border__item"></div>

                        <div
                          class="-hover-button-center__button flex-center size-130 rounded-full bg-accent-1-50 blur-1 border-white-10">
                          <span class="text-15 fw-500 text-white">BOOK NOW</span>
                        </div>
                      </div>
                    </div>

                    <div class="roomCard__content mt-30" data-anim-child="slide-up delay-5">
                      <div class="d-flex justify-between items-center">
                        <h3 class="roomCard__title text-40 md:text-30 text-white">Standard & Comfort</h3>
                        <!-- <div class="roomCard__price text-white">$499 / NIGHT</div> -->
                      </div>

                      <!-- <div class="d-flex items-center x-gap-10 text-white pt-30 md:pt-20">
                        <div>30M2</div>
                        <div>
                          <div class="circle bg-white-10"></div>
                        </div>
                        <div>2 ADULTS</div>
                        <div>
                          <div class="circle bg-white-10"></div>
                        </div>
                        <div>1 CHILDREN</div>
                      </div> -->
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="<?= base_url() ?>contact" data-anim-wrap
                    class="roomCard -type-1 -hover-button-center- -image-border">
                    <div data-anim-child="img-right cover-accent-1 delay-1">
                      <div class="roomCard__image ratio ratio-76:62 -hover-button-center__wrap">
                        <img src="<?= base_url() ?>public/assets/img/wild/img6.jpeg" alt="image" class="img-ratio">

                        <div class="-image-border__item"></div>

                        <div
                          class="-hover-button-center__button flex-center size-130 rounded-full bg-accent-1-50 blur-1 border-white-10">
                          <span class="text-15 fw-500 text-white">BOOK NOW</span>
                        </div>
                      </div>
                    </div>

                    <div class="roomCard__content mt-30" data-anim-child="slide-up delay-5">
                      <div class="d-flex justify-between items-center">
                        <h3 class="roomCard__title text-40 md:text-30 text-white">Cozy & Spacious</h3>
                        <!-- <div class="roomCard__price text-white">$499 / NIGHT</div> -->
                      </div>

                      <!-- <div class="d-flex items-center x-gap-10 text-white pt-30 md:pt-20">
                        <div>30M2</div>
                        <div>
                          <div class="circle bg-white-10"></div>
                        </div>
                        <div>2 ADULTS</div>
                        <div>
                          <div class="circle bg-white-10"></div>
                        </div>
                        <div>1 CHILDREN</div>
                      </div> -->
                    </div>
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="<?= base_url() ?>contact" data-anim-wrap
                    class="roomCard -type-1 -hover-button-center- -image-border">
                    <div data-anim-child="img-right cover-accent-1 delay-1">
                      <div class="roomCard__image ratio ratio-76:62 -hover-button-center__wrap">
                        <img src="<?= base_url() ?>public/assets/img/wild/img10.jpeg" alt="image" class="img-ratio">

                        <div class="-image-border__item"></div>

                        <div
                          class="-hover-button-center__button flex-center size-130 rounded-full bg-accent-1-50 blur-1 border-white-10">
                          <span class="text-15 fw-500 text-white">BOOK NOW</span>
                        </div>
                      </div>
                    </div>

                    <div class="roomCard__content mt-30" data-anim-child="slide-up delay-5">
                      <div class="d-flex justify-between items-center">
                        <h3 class="roomCard__title text-40 md:text-30 text-white">Superior & Executive</h3>
                        <!-- <div class="roomCard__price text-white">$499 / NIGHT</div> -->
                      </div>

                      <!-- <div class="d-flex items-center x-gap-10 text-white pt-30 md:pt-20">
                        <div>30M2</div>
                        <div>
                          <div class="circle bg-white-10"></div>
                        </div>
                        <div>2 ADULTS</div>
                        <div>
                          <div class="circle bg-white-10"></div>
                        </div>
                        <div>1 CHILDREN</div>
                      </div> -->
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row justify-between items-center pt-100 sm:pt-50">
          <div class="col-auto">
            <button
              class="button -outline-white text-white size-80 md:size-60 flex-center rounded-full js-slider1-prev">
              <i class="icon-arrow-left text-24 md:text-19"></i>
            </button>
          </div>

          <div class="col-auto">
            <div class="pagination -type-1 -light js-slider1-pagination"></div>
          </div>

          <div class="col-auto">
            <button
              class="button -outline-white text-white size-80 md:size-60 flex-center rounded-full js-slider1-next">
              <i class="icon-arrow-right text-24 md:text-19"></i>
            </button>
          </div>
        </div>
      </div>
    </section>

    <section class="layout-pt-lg layout-pb-lg bg-accent-2">
      <div data-anim-wrap class="container">
        <div class="hoverTitleInteraction">
          <div class="row y-gap-30 justify-between items-center">
            <div class="col-lg-6 offset-lg-1 lg:order-2 lg:pt-50">
              <div class="hoverTitleInteraction__images d-flex justify-end">

                <div class="is-active">
                  <div class="imageGrid -type-1">
                    <div>
                      <div data-anim-child="img-right cover-accent-2 delay-1">
                        <img src="<?= base_url() ?>public/assets/img/future/2.png" alt="image" class="">
                      </div>
                    </div>
                    <div>
                      <div data-anim-child="img-right cover-accent-2 delay-3">
                        <img src="<?= base_url() ?>public/assets/img/future/1.png" alt="image" class="">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="">
                  <div class="imageGrid -type-1">
                    <div>
                      <div data-anim-child="img-right cover-accent-2 delay-1">
                        <img src="<?= base_url() ?>public/assets/img/future/rooms/3/5.png" alt="image" class="">
                      </div>
                    </div>
                    <div>
                      <div data-anim-child="img-right cover-accent-2 delay-3">
                        <img src="<?= base_url() ?>public/assets/img/future/rooms/4/1.png" alt="image" class="">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="">
                  <div class="imageGrid -type-1">
                    <div>
                      <div data-anim-child="img-right cover-accent-2 delay-1">
                        <img src="<?= base_url() ?>public/assets/img/wild/about/pool1.png" alt="image" class="">
                      </div>
                    </div>
                    <div>
                      <div data-anim-child="img-right cover-accent-2 delay-3">
                        <img src="<?= base_url() ?>public/assets/img/wild/about/pool2.png" alt="image" class=""
                          width="620px" height="744px">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="">
                  <div class="imageGrid -type-1">
                    <div>
                      <div data-anim-child="img-right cover-accent-2 delay-1">
                        <img src="<?= base_url() ?>public/assets/img/future/rooms/3/5.png" alt="image" class="">
                      </div>
                    </div>
                    <div>
                      <div data-anim-child="img-right cover-accent-2 delay-3">
                        <img src="<?= base_url() ?>public/assets/img/future/rooms/4/3.png" alt="image" class="">
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <div class="col-xl-4 col-lg-5 lg:order-1">
              <div class="hoverTitleInteraction__links">
                <a href="#" class="hoverTitle text-sec text-52 md:text-40 fw-500">
                  The Restaurant
                  <i class="icon-arrow-right text-40 ml-50"></i>
                </a>

                <a href="#" class="hoverTitle text-sec text-52 md:text-40 fw-500 pt-60 lg:pt-0">
                  Cottages
                  <i class="icon-arrow-right text-40 ml-50"></i>
                </a>

                <a href="#" class="hoverTitle text-sec text-52 md:text-40 fw-500 pt-60 lg:pt-0">
                  Swimming Pool
                  <i class="icon-arrow-right text-40 ml-50"></i>
                </a>

                <a href="#" class="hoverTitle text-sec text-52 md:text-40 fw-500 pt-60 lg:pt-0">
                  Delux cottages
                  <i class="icon-arrow-right text-40 ml-50"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="layout-pt-lg layout-pb-lg">
      <div data-anim-wrap class="container">
        <div class="row justify-center text-center">
          <div data-anim-child="slide-up delay-1" class="col-auto">
            <div class="text-15 uppercase mb-30 sm:mb-10">OUR FUTURE SERVICES</div>
            <h2 class="text-64 md:text-40">Amenities</h2>
          </div>
        </div>

        <div class="row y-gap-30 justify-between pt-100 sm:pt-50">

          <div data-anim-child="slide-up delay-3" class="col-lg-auto col-6">
            <div class="iconCard -type-1 -hover-1">
              <div class="iconCard__icon text-50">
                <div class="iconCard__icon__circle bg-light-1"></div>
                <i class="icon-wifi"></i>
              </div>
              <h4 class="text-24 text-center mt-20">Wifi &amp; Internet</h4>
            </div>
          </div>

          <div data-anim-child="slide-up delay-4" class="col-lg-auto col-6">
            <div class="iconCard -type-1 -hover-1">
              <div class="iconCard__icon text-50">
                <div class="iconCard__icon__circle bg-light-1"></div>
                <i class="icon-bus"></i>
              </div>
              <h4 class="text-24 text-center mt-20">Airport Transfer</h4>
            </div>
          </div>

          <div data-anim-child="slide-up delay-5" class="col-lg-auto col-6">
            <div class="iconCard -type-1 -hover-1">
              <div class="iconCard__icon text-50">
                <div class="iconCard__icon__circle bg-light-1"></div>
                <i class="icon-tv"></i>
              </div>
              <h4 class="text-24 text-center mt-20">Smart TV</h4>
            </div>
          </div>

          <div data-anim-child="slide-up delay-6" class="col-lg-auto col-6">
            <div class="iconCard -type-1 -hover-1">
              <div class="iconCard__icon text-50">
                <div class="iconCard__icon__circle bg-light-1"></div>
                <i class="icon-bed"></i>
              </div>
              <h4 class="text-24 text-center mt-20">Breakfast in Bed</h4>
            </div>
          </div>

          <div data-anim-child="slide-up delay-7" class="col-lg-auto col-6">
            <div class="iconCard -type-1 -hover-1">
              <div class="iconCard__icon text-50">
                <div class="iconCard__icon__circle bg-light-1"></div>
                <i class="icon-laundry"></i>
              </div>
              <h4 class="text-24 text-center mt-20">Laundry Services</h4>
            </div>
          </div>

          <div data-anim-child="slide-up delay-8" class="col-lg-auto col-6">
            <div class="iconCard -type-1 -hover-1">
              <div class="iconCard__icon text-50">
                <div class="iconCard__icon__circle bg-light-1"></div>
                <i class="icon-housekeeper"></i>
              </div>
              <h4 class="text-24 text-center mt-20">Housekeeper Services</h4>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- <section class="relative layout-pt-lg layout-pb-lg md:pt-0 md:pb-0">
      <div data-anim-wrap class="container">
        <div class="sideImages -type-1">
          <div data-anim-child="img-right cover-white delay-1">
            <img src="<?= base_url() ?>public/assets/img/cta/1/1.png" alt="image">
          </div>
          <div data-anim-child="img-right cover-white delay-1">
            <img src="<?= base_url() ?>public/assets/img/cta/1/2.png" alt="image">
          </div>
        </div>

        <div class="row justify-center text-center">
          <div class="col-xxl-5 col-xl-6">
            <div data-anim-child="slide-up delay-1" class="text-15 uppercase mb-30 sm:mb-10">MEETING & EVENTS</div>
            <div data-split='lines' data-anim-child="split-lines delay-2">
              <h2 class="text-64 lg:text-52 md:text-30">
                A Warm, Exquisite,<br class="lg:d-none">
                Practical And<br class="lg:d-none">
                Urban Space.
              </h2>
            </div>

            <div data-anim-child="slide-up delay-1">
              <button class="button -md -type-2 bg-accent-2 -accent-1 mt-50 md:mt-30 mx-auto">FIND OUt MORE</button>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- <section class="layout-pt-lg layout-pb-lg">
      <div data-anim-wrap class="container">
        <div class="row justify-center text-center">
          <div data-anim-child="slide-up delay-1" class="col-auto">
            <div class="text-15 uppercase mb-30 sm:mb-10">There's So Much to Discover</div>
            <h2 class="text-64 md:text-40">Unforgettable Experience</h2>
          </div>
        </div>

        <div class="overflow-hidden pt-100 sm:pt-50 js-section-slider" data-gap="30"
          data-slider-cols="xl-4 lg-4 md-3 sm-2 base-1" data-pagination="js-slider2-pagination">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <a href="#" class="baseCard -type-1 -hover-image-scale">
                <div class="-hover-image-scale__image">
                  <div data-anim-child="img-right cover-white delay-2" class="baseCard__image ratio ratio-33:45">
                    <img src="<?= base_url() ?>public/assets/img/cards/1/1.png" alt="image" class="img-ratio">
                  </div>
                </div>

                <div class="baseCard__content d-flex flex-column justify-end text-center">
                  <h4 class="text-30 md:text-25 text-white">Bike Rides</h4>
                  <div class="text-white mt-10">$280/Person</div>
                </div>
              </a>
            </div>

            <div class="swiper-slide">
              <a href="#" class="baseCard -type-1 -hover-image-scale">
                <div class="-hover-image-scale__image">
                  <div data-anim-child="img-right cover-white delay-4" class="baseCard__image ratio ratio-33:45">
                    <img src="<?= base_url() ?>public/assets/img/cards/1/2.png" alt="image" class="img-ratio">
                  </div>
                </div>

                <div class="baseCard__content d-flex flex-column justify-end text-center">
                  <h4 class="text-30 md:text-25 text-white">Golf</h4>
                  <div class="text-white mt-10">$280/Person</div>
                </div>
              </a>
            </div>

            <div class="swiper-slide">
              <a href="#" class="baseCard -type-1 -hover-image-scale">
                <div class="-hover-image-scale__image">
                  <div data-anim-child="img-right cover-white delay-6" class="baseCard__image ratio ratio-33:45">
                    <img src="<?= base_url() ?>public/assets/img/cards/1/3.png" alt="image" class="img-ratio">
                  </div>
                </div>

                <div class="baseCard__content d-flex flex-column justify-end text-center">
                  <h4 class="text-30 md:text-25 text-white">Snowsports</h4>
                  <div class="text-white mt-10">$280/Person</div>
                </div>
              </a>
            </div>

            <div class="swiper-slide">
              <a href="#" class="baseCard -type-1 -hover-image-scale">
                <div class="-hover-image-scale__image">
                  <div data-anim-child="img-right cover-white delay-8" class="baseCard__image ratio ratio-33:45">
                    <img src="<?= base_url() ?>public/assets/img/cards/1/4.png" alt="image" class="img-ratio">
                  </div>
                </div>

                <div class="baseCard__content d-flex flex-column justify-end text-center">
                  <h4 class="text-30 md:text-25 text-white">Climbing</h4>
                  <div class="text-white mt-10">$280/Person</div>
                </div>
              </a>
            </div>

            <div class="swiper-slide">
              <a href="#" class="baseCard -type-1 -hover-image-scale">
                <div class="-hover-image-scale__image">
                  <div data-anim-child="img-right cover-white delay-10" class="baseCard__image ratio ratio-33:45">
                    <img src="<?= base_url() ?>public/assets/img/cards/1/5.png" alt="image" class="img-ratio">
                  </div>
                </div>

                <div class="baseCard__content d-flex flex-column justify-end text-center">
                  <h4 class="text-30 md:text-25 text-white">Bike Rides</h4>
                  <div class="text-white mt-10">$280/Person</div>
                </div>
              </a>
            </div>

            <div class="swiper-slide">
              <a href="#" class="baseCard -type-1 -hover-image-scale">
                <div class="-hover-image-scale__image">
                  <div data-anim-child="img-right cover-white delay-12" class="baseCard__image ratio ratio-33:45">
                    <img src="<?= base_url() ?>public/assets/img/cards/1/6.png" alt="image" class="img-ratio">
                  </div>
                </div>

                <div class="baseCard__content d-flex flex-column justify-end text-center">
                  <h4 class="text-30 md:text-25 text-white">Golf</h4>
                  <div class="text-white mt-10">$280/Person</div>
                </div>
              </a>
            </div>

            <div class="swiper-slide">
              <a href="#" class="baseCard -type-1 -hover-image-scale">
                <div class="-hover-image-scale__image">
                  <div data-anim-child="img-right cover-white delay-14" class="baseCard__image ratio ratio-33:45">
                    <img src="<?= base_url() ?>public/assets/img/cards/1/7.png" alt="image" class="img-ratio">
                  </div>
                </div>

                <div class="baseCard__content d-flex flex-column justify-end text-center">
                  <h4 class="text-30 md:text-25 text-white">Snowsports</h4>
                  <div class="text-white mt-10">$280/Person</div>
                </div>
              </a>
            </div>

          </div>

          <div class="row justify-center pt-100 sm:pt-50 pb-20">
            <div class="col-auto">
              <div class="pagination -type-1 -accent-1 js-slider2-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <section class="layout-pt-md layout-pb-lg bg-light-1">
      <div class="container">
        <div class="row justify-center text-center">
          <div class="col-auto">
            <div class="mb-40">
              <svg width="45" height="44" viewBox="0 0 45 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d_428_953)">
                  <path
                    d="M9.67883 38C6.64234 38 4.27007 36.9524 2.56204 34.8571C0.854015 32.6667 0 29.4286 0 25.1429C0 20.6667 0.99635 16.381 2.98905 12.2857C5.07664 8.19048 8.01825 4.14286 11.8139 0.142864C11.9088 0.0476213 12.0511 0 12.2409 0C12.5255 0 12.7153 0.142858 12.8102 0.428574C13 0.619048 13.0474 0.857143 12.9526 1.14286C10.6752 4.19048 9.10949 7.14286 8.25548 10C7.49635 12.7619 7.11679 15.8571 7.11679 19.2857C7.11679 21.8571 7.44891 23.8571 8.11314 25.2857C8.77737 26.7143 9.67883 28 10.8175 29.1429L5.40876 30.1429C5.31387 28.5238 5.74088 27.2857 6.68978 26.4286C7.73358 25.5714 9.06205 25.1429 10.6752 25.1429C12.6679 25.1429 14.1861 25.7143 15.2299 26.8571C16.3686 28 16.938 29.5714 16.938 31.5714C16.938 33.6667 16.2737 35.2857 14.9453 36.4286C13.7117 37.4762 11.9562 38 9.67883 38ZM31.5985 38C28.562 38 26.1898 36.9524 24.4818 34.8571C22.8686 32.6667 22.062 29.4286 22.062 25.1429C22.062 20.5714 23.0584 16.2381 25.0511 12.1429C27.0438 8.04762 29.9854 4.04762 33.8759 0.142864C33.9708 0.0476213 34.1131 0 34.3029 0C34.5876 0 34.7774 0.142858 34.8723 0.428574C35.062 0.619048 35.1095 0.857143 35.0146 1.14286C32.7372 4.19048 31.1715 7.14286 30.3175 10C29.5584 12.7619 29.1788 15.8571 29.1788 19.2857C29.1788 21.8571 29.4635 23.9048 30.0328 25.4286C30.6971 26.8571 31.5985 28.0952 32.7372 29.1429L27.4708 30.1429C27.3759 28.5238 27.8029 27.2857 28.7518 26.4286C29.7007 25.5714 31.0292 25.1429 32.7372 25.1429C34.7299 25.1429 36.2482 25.7143 37.292 26.8571C38.4307 28 39 29.5714 39 31.5714C39 33.6667 38.3358 35.2857 37.0073 36.4286C35.7737 37.4762 33.9708 38 31.5985 38Z"
                    fill="#122223" />
                </g>
                <defs>
                  <filter id="filter0_d_428_953" x="0" y="0" width="45" height="44" filterUnits="userSpaceOnUse"
                    color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                      result="hardAlpha" />
                    <feOffset dx="6" dy="6" />
                    <feComposite in2="hardAlpha" operator="out" />
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" />
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_428_953" />
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_428_953" result="shape" />
                  </filter>
                </defs>
              </svg>
            </div>
            <div class="text-15 uppercase mb-30 sm:mb-15">VOICE FROM OUR GUESTS</div>
            <h2 class="text-64 md:text-40 lh-065">Testimonials</h2>
          </div>
        </div>
      </div>

      <div class="relative container">
        <div class="row justify-center pt-100 sm:pt-50">
          <div class="col-xl-8 col-lg-10 col-9">
            <div class="overflow-hidden js-section-slider" data-gap="30" data-slider-cols="xl-1 lg-1 md-1 sm-1 base-1"
              data-nav-prev="js-slider3-prev" data-nav-next="js-slider3-next">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="text-center">
                    <div class="text-sec text-40 md:text-24">
                      “Investing in Wild Parrot was the best decision I’ve made. The location near Koolikadavu,
                      Attapadi, is not only tranquil but has great potential for growth. The natural beauty and serene
                      environment made me feel instantly connected to the land, and I can already see the potential for
                      high returns. I can’t wait to build my villa here and enjoy the peace and luxury it offers.”
                    </div>
                    <div class="mt-50">Ravi Menon, Real Estate Investor</div>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="text-center">
                    <div class="text-sec text-40 md:text-24">
                      “Wild Parrot is truly an escape into paradise. The moment I stepped onto the property, I felt
                      immersed in nature, surrounded by lush greenery and the soothing sounds of nearby rivers. It’s a
                      rare place where you can experience such harmony between modern living and the beauty of the
                      outdoors. I’m already planning my next stay here and can’t wait to see the villas in person.”
                    </div>
                    <div class="mt-50">Anjali Sharma, Nature Enthusiast</div>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="text-center">
                    <div class="text-sec text-40 md:text-24">
                      “Building my dream villa in such a pristine location was always on my mind, and Wild Parrot made
                      it a reality. The resort-like atmosphere and luxury offerings are second to none. The view of the
                      mountains and the proximity to Anaikatti makes it the perfect blend of comfort and natural beauty.
                      I am thrilled with my decision to choose Wild Parrot for my new home.”
                    </div>
                    <div class="mt-50">Vishal Kumar, Luxury Villa Buyer</div>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="text-center">
                    <div class="text-sec text-40 md:text-24">
                      “Our family had the most unforgettable vacation at Wild Parrot. The resort concept is beyond
                      amazing, with everything from fine dining to world-class amenities. The kids loved the open spaces
                      and the peaceful surroundings. It was the perfect place to relax and reconnect with nature, and
                      we’ll definitely be returning for many more vacations in the future!”
                    </div>
                    <div class="mt-50">Nandita & Arun Iyer, Happy Guests</div>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="text-center">
                    <div class="text-sec text-40 md:text-24">
                      “As someone who’s passionate about sustainable living, Wild Parrot’s approach really impressed me.
                      The development respects the natural environment while providing luxury living options. I’m
                      excited about being part of a community that not only offers modern comforts but also promotes a
                      balanced and eco-friendly lifestyle. It’s the ideal place to invest in the future while being in
                      harmony with nature.”
                    </div>
                    <div class="mt-50">Sanjay Reddy, Sustainable Living Advocate</div>
                  </div>
                </div>

              </div>

              <div class="navAbsolute">
                <button class="size-80 flex-center rounded-full js-slider3-prev">
                  <i class="icon-arrow-left text-24"></i>
                </button>

                <button class="size-80 flex-center rounded-full js-slider3-next">
                  <i class="icon-arrow-right text-24"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- <section class="layout-pt-lg">
      <div data-anim-wrap class="container">
        <div class="row y-gap-30 justify-between items-end">
          <div data-anim-child="slide-up delay-1" class="col-auto">
            <div class="text-15 uppercase mb-30 sm:mb-10">BLOG</div>
            <h2 class="text-64 md:text-40">Offers & News</h2>
          </div>

          <div data-anim-child="slide-up delay-3" class="col-auto">
            <button class="button -type-1">
              <i class="-icon">
                <svg width="50" height="30" viewBox="0 0 50 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M35.8 28.0924C43.3451 28.0924 49.4616 21.9759 49.4616 14.4308C49.4616 6.88577 43.3451 0.769287 35.8 0.769287C28.255 0.769287 22.1385 6.88577 22.1385 14.4308C22.1385 21.9759 28.255 28.0924 35.8 28.0924Z"
                    stroke="#122223" />
                  <path
                    d="M33.4808 10.2039L32.9985 10.8031L37.2931 14.2623H0.341553V15.0315H37.28L33.0008 18.4262L33.4785 19.0285L39 14.6492L33.4808 10.2039Z"
                    fill="#122223" />
                </svg>
              </i>
              VIEW ALL MORE
            </button>
          </div>
        </div>

        <div class="row y-gap-30 x-gap-85 justify-between pt-100 sm:pt-50">

          <div data-anim-child="img-right cover-white delay-2" class="col-lg-4 col-md-6">
            <a href="blog-list-1.html" class="baseCard -type-2">
              <div class="baseCard__image ratio ratio-41:50">
                <img src="<?= base_url() ?>public/assets/img/cards/2/1.png" alt="image" class="img-ratio">
              </div>

              <div class="baseCard__content mt-30">
                <div class="row x-gap-10">
                  <div class="col-auto">
                    Spa &amp; Wellness
                  </div>

                  <div class="col-auto">
                    06 April 2023
                  </div>
                </div>

                <h4 class="text-30 md:text-25 mt-15">Hotel June&#39;s Upcoming Artist in Residence</h4>

                <div class="d-flex mt-20">
                  <button class="button -type-1">
                    <i class="-icon">
                      <svg width="50" height="30" viewBox="0 0 50 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M35.8 28.0924C43.3451 28.0924 49.4616 21.9759 49.4616 14.4308C49.4616 6.88577 43.3451 0.769287 35.8 0.769287C28.255 0.769287 22.1385 6.88577 22.1385 14.4308C22.1385 21.9759 28.255 28.0924 35.8 28.0924Z"
                          stroke="#122223" />
                        <path
                          d="M33.4808 10.2039L32.9985 10.8031L37.2931 14.2623H0.341553V15.0315H37.28L33.0008 18.4262L33.4785 19.0285L39 14.6492L33.4808 10.2039Z"
                          fill="#122223" />
                      </svg>
                    </i>
                    READ MORE
                  </button>
                </div>
              </div>
            </a>
          </div>

          <div data-anim-child="img-right cover-white delay-4" class="col-lg-4 col-md-6">
            <a href="blog-list-1.html" class="baseCard -type-2">
              <div class="baseCard__image ratio ratio-41:50">
                <img src="<?= base_url() ?>public/assets/img/cards/2/2.png" alt="image" class="img-ratio">
              </div>

              <div class="baseCard__content mt-30">
                <div class="row x-gap-10">
                  <div class="col-auto">
                    Event
                  </div>

                  <div class="col-auto">
                    06 April 2023
                  </div>
                </div>

                <h4 class="text-30 md:text-25 mt-15">Where to travel in 2023: 10 places you need to go in 2023!</h4>

                <div class="d-flex mt-20">
                  <button class="button -type-1">
                    <i class="-icon">
                      <svg width="50" height="30" viewBox="0 0 50 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M35.8 28.0924C43.3451 28.0924 49.4616 21.9759 49.4616 14.4308C49.4616 6.88577 43.3451 0.769287 35.8 0.769287C28.255 0.769287 22.1385 6.88577 22.1385 14.4308C22.1385 21.9759 28.255 28.0924 35.8 28.0924Z"
                          stroke="#122223" />
                        <path
                          d="M33.4808 10.2039L32.9985 10.8031L37.2931 14.2623H0.341553V15.0315H37.28L33.0008 18.4262L33.4785 19.0285L39 14.6492L33.4808 10.2039Z"
                          fill="#122223" />
                      </svg>
                    </i>
                    READ MORE
                  </button>
                </div>
              </div>
            </a>
          </div>

          <div data-anim-child="img-right cover-white delay-6" class="col-lg-4 col-md-6">
            <a href="blog-list-1.html" class="baseCard -type-2">
              <div class="baseCard__image ratio ratio-41:50">
                <img src="<?= base_url() ?>public/assets/img/cards/2/3.png" alt="image" class="img-ratio">
              </div>

              <div class="baseCard__content mt-30">
                <div class="row x-gap-10">
                  <div class="col-auto">
                    Restaurant
                  </div>

                  <div class="col-auto">
                    06 April 2023
                  </div>
                </div>

                <h4 class="text-30 md:text-25 mt-15">Tips For Picking Vacation Accommodation</h4>

                <div class="d-flex mt-20">
                  <button class="button -type-1">
                    <i class="-icon">
                      <svg width="50" height="30" viewBox="0 0 50 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M35.8 28.0924C43.3451 28.0924 49.4616 21.9759 49.4616 14.4308C49.4616 6.88577 43.3451 0.769287 35.8 0.769287C28.255 0.769287 22.1385 6.88577 22.1385 14.4308C22.1385 21.9759 28.255 28.0924 35.8 28.0924Z"
                          stroke="#122223" />
                        <path
                          d="M33.4808 10.2039L32.9985 10.8031L37.2931 14.2623H0.341553V15.0315H37.28L33.0008 18.4262L33.4785 19.0285L39 14.6492L33.4808 10.2039Z"
                          fill="#122223" />
                      </svg>
                    </i>
                    READ MORE
                  </button>
                </div>
              </div>
            </a>
          </div>

        </div>
      </div>
    </section> -->

    <?php require("components/instagram.php") ?>


    <?php require("components/footer.php") ?>


  </main>

  <!-- JavaScript -->
  <?php require("components/jsfile.php") ?>





</body>

</html>