<header class="header -h-110 -mx-60 -blur -border-bottom-1 js-header" data-add-bg="bg-accent-1" data-x="header"
    data-x-toggle="-is-menu-opened">
    <div class="header__container h-full items-center">
        <div class="header__left d-flex items-center">
            <button class="d-flex items-center cursor-pointer js-menuFullScreen-toggle">
                <i class="icon-menu text-9 text-white"></i>
                <div class="text-15 uppercase text-white ml-30 sm:d-none">Menu</div>
            </button>

            <div class="d-flex items-center ml-90 xl:d-none mobile-view">
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

        <div class="header__right d-flex items-center h-full mobile-view">
            <a href="<?= base_url() ?>gallery" class="button text-white mr-30 xl:mr-0"> Gallery</a>

            <div class="line -vertical bg-white-10 h-full ml-90 mr-90 xl:d-none"></div>

            <a class="button text-white mr-30 xl:d-none book-enquiry">BOOK YOUR ENQUIRY</a>
        </div>
    </div>
</header>

<div class="modal fade" id="booknowModal" tabindex="-1" aria-labelledby="booknowModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="booknowModal">Book Your Enquiry</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="contactForm">
                    <div class="mb-3 form-input-">
                        <label for="recipient-name" class="col-form-label">Name</label>
                        <input type="text" class="cust-name" name="cust_name">
                    </div>

                    <div class="mb-3 form-input-">
                        <label for="recipient-name" class="col-form-label">Number</label>
                        <input type="number" class="cust-number" name="number" >
                    </div>
                    <div class="mb-3 form-input-">
                        <label for="recipient-name" class="col-form-label">Email</label>
                        <input type="email" class="cust-email" name="email">
                    </div>

                    <div class="mb-3 form-input-">
                        <label for="recipient-name" class="col-form-label">Email</label>
                        <select class="services" name="services">
                            <option value="">Select Services</option>

                            <option value="Investment / Villa Ownership">Investment / Villa Ownership
                            </option>
                            <option value="Book a Site Visit">Book a Site Visit</option>
                            <option value="Pre-Booking / Early Reservation">Pre-Booking / Early Reservation
                            </option>
                            <option value="Get Project Updates">Get Project Updates</option>
                            <option value="Partnership / Collaboration">Partnership / Collaboration</option>
                            <option value="Request Pricing Details">Request Pricing Details</option>
                            <option value="Download Brochure / Master Plan">Download Brochure / Master Plan
                            </option>
                            <option value="Schedule a Call / Consultation">Schedule a Call / Consultation
                            </option>

                        </select>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-dark">Send message</button>

                    </div>
                </form>
            </div>

        </div>
    </div>
</div>