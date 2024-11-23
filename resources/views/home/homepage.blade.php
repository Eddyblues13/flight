@include('home.header')

        <!-- ========== MAIN CONTENT ========== -->
        <main id="content">
            <!-- ========== HERO ========== -->
            <div class="hero-block hero-v8 bg-img-hero-bottom text-center gradient-overlay-half-bg-violet-light z-index-2" style="background-image: url(../../assets/img/1920x650/img1.jpg);">
                <div class="container space-2 space-top-lg-3 space-top-xl-6">
                    <div class="row justify-content-md-center pb-4">
                        <!-- Info -->
                        <div class="pb-lg-8 pb-xl-11 pb-3">
                            <h1 class="font-size-60 font-size-xs-30 text-white font-weight-bold">Where do you want to explore?</h1>
                        </div>
                        <!-- End Info -->
                    </div>
                    <div class="pt-xl-11 mb-lg-n17">
                        <div class="card border-0 tab-shadow">
                            <div class="card-body">
                                <ul class="nav tab-nav tab-nav-inner flex-nowrap pb-4 px-lg-3 px-2 pb-xl-0" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link font-weight-medium active" id="pills-one-example2-tab" data-toggle="pill" href="#pills-one-example2" role="tab" aria-controls="pills-one-example2" aria-selected="true">
                                            <div class="d-flex flex-column flex-md-row  position-relative text-black align-items-center">
                                                <span class="tabtext mt-2 mt-md-0 font-size-12 font-weight-semi-bold">ROUND-TRIP</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link font-weight-medium" id="pills-two-example2-tab" data-toggle="pill" href="#pills-two-example2" role="tab" aria-controls="pills-two-example2" aria-selected="true">
                                            <div class="d-flex flex-column flex-md-row  position-relative text-black align-items-center">
                                                <span class="tabtext mt-2 mt-md-0 font-size-12 font-weight-semi-bold">ONE-WAY</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link font-weight-medium" id="pills-three-example2-tab" data-toggle="pill" href="#pills-three-example2" role="tab" aria-controls="pills-three-example2" aria-selected="true">
                                            <div class="d-flex flex-column flex-md-row  position-relative text-black align-items-center">
                                                <span class="tabtext mt-2 mt-md-0 font-size-12 font-weight-semi-bold">MULTI-CITY</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content hero-tab-pane">
                                    <div class="tab-pane fade pt-xl-4 active show" id="pills-one-example2" role="tabpanel" aria-labelledby="pills-one-example2-tab">
                                        <form class="js-validate">
                                          <div class="row nav-select d-block d-lg-flex mb-lg-2 px-lg-3 px-2">
                                            <div class="col-sm-12 col-lg-2dot3 mb-4 mb-lg-0 ">
                                                <!-- Input -->
                                                <span class="d-block text-gray-1 text-left font-weight-normal mb-0">From where</span>
                                                <div class="js-focus-state">
                                                    <div class="input-group border-bottom border-width-2 border-color-1">
                                                        <i class="flaticon-pin-1 d-flex align-items-center mr-2 text-primary font-weight-semi-bold"></i>
                                                      <input type="text" class="form-control font-size-lg-16 shadow-none hero-form font-weight-bold border-0 pl-0" placeholder="city or airport" aria-label="Keyword or title">
                                                    </div>
                                                </div>
                                                <!-- End Input -->
                                            </div>
                                            <div class="col-sm-12 col-lg-2dot3 mb-4 mb-lg-0 ">
                                                <!-- Input -->
                                                <span class="d-block text-gray-1 text-left font-weight-normal mb-0">To where</span>
                                                <div class="js-focus-state">
                                                    <div class="input-group border-bottom border-width-2 border-color-1">
                                                        <i class="flaticon-pin-1 d-flex align-items-center mr-2 text-primary font-weight-semi-bold"></i>
                                                      <input type="text" class="form-control font-size-lg-16 shadow-none hero-form font-weight-bold border-0 pl-0" placeholder="city or airport" aria-label="Keyword or title">
                                                    </div>
                                                </div>
                                                <!-- End Input -->
                                            </div>

                                            <div class="col-sm-12 col-lg-3 mb-4 mb-lg-0 ">
                                                <!-- Input -->
                                                <span class="d-block text-gray-1 text-left font-weight-normal mb-0">Depart-Return</span>
                                                <div class="border-bottom border-width-2 border-color-1">
                                                    <div id="datepickerWrapperFromOne" class="u-datepicker input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="d-flex align-items-center mr-2">
                                                              <i class="flaticon-calendar text-primary font-weight-semi-bold"></i>
                                                            </span>
                                                        </div>
                                                         <input class="js-range-datepicker font-size-lg-16 shadow-none font-weight-bold form-control hero-form bg-transparent  border-0" type="date"
                                                             data-rp-wrapper="#datepickerWrapperFromOne"
                                                             data-rp-type="range"
                                                             data-rp-date-format="M d / Y"
                                                             data-rp-default-date='["Jul 7 / 2020", "Aug 25 / 2020"]'>
                                                    </div>
                                                     <!-- End Datepicker -->
                                                </div>
                                                <!-- End Input -->
                                            </div>

                                            <div class="col-sm-12 col-lg-2dot4 text-left mb-4 mb-lg-0">
                                                <!-- Input -->
                                                <span class="d-block text-gray-1 font-weight-normal mb-0">Travelers</span>
                                                <div class="js-focus-state">
                                                    <div class="d-flex border-bottom border-width-2 border-color-1">
                                                        <i class="flaticon-backpack d-flex align-items-center mr-2 text-primary font-weight-semi-bold"></i>
                                                        <select class="js-select selectpicker dropdown-select">
                                                            <option value="2 Rooms - 3 Guests" selected>1 Adult - Ecconomy</option>
                                                            <option value="2 Rooms - 3 Guests">3 Adults - Ecconomy</option>
                                                            <option value="2 Rooms - 3 Guests">2 Adults - Business</option>
                                                            <option value="2 Rooms - 3 Guests">4 Adults - Business</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- End Input -->
                                            </div>

                                            <div class="col-sm-12 col-lg-1dot8 text-left align-self-lg-end">
                                                <button type="submit" class="btn btn-primary text-white border-radius-2 font-weight-bold btn-md mb-xl-0 mb-lg-1 transition-3d-hover"><i class="flaticon-magnifying-glass mr-2"></i>Search</button>
                                            </div>
                                          </div>
                                          <!-- End Checkbox -->
                                        </form>
                                    </div>
                                    <div class="tab-pane fade pt-xl-4" id="pills-two-example2" role="tabpanel" aria-labelledby="pills-two-example2-tab">
                                        <form class="js-validate">
                                          <div class="row nav-select d-block d-lg-flex mb-lg-2 px-lg-3 px-2">
                                            <div class="col-sm-12 col-lg-3dot7 mb-4 mb-lg-0 ">
                                                <!-- Input -->
                                                <span class="d-block text-gray-1 text-left font-weight-normal mb-0">From where</span>
                                                <div class="js-focus-state">
                                                    <div class="input-group border-bottom border-width-2 border-color-1">
                                                        <i class="flaticon-pin-1 d-flex align-items-center mr-2 text-primary font-weight-semi-bold"></i>
                                                      <input type="text" class="form-control font-size-lg-16 shadow-none hero-form font-weight-bold border-0 pl-0" placeholder="city or airport" aria-label="Keyword or title">
                                                    </div>
                                                </div>
                                                <!-- End Input -->
                                            </div>
                                            <div class="col-sm-12 col-lg-3dot6 mb-4 mb-lg-0 ">
                                                <!-- Input -->
                                                <span class="d-block text-gray-1 text-left font-weight-normal mb-0">Depart</span>
                                                <div class="border-bottom border-width-2 border-color-1">
                                                    <div id="datepickerWrapperFromtwo" class="u-datepicker input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="d-flex align-items-center mr-2">
                                                              <i class="flaticon-calendar text-primary font-weight-semi-bold"></i>
                                                            </span>
                                                        </div>
                                                         <input class="js-range-datepicker font-size-lg-16 shadow-none font-weight-bold form-control hero-form bg-transparent  border-0" type="date"
                                                             data-rp-wrapper="#datepickerWrapperFromtwo"
                                                             data-rp-type="range"
                                                             data-rp-date-format="M d / Y"
                                                             data-rp-default-date='["Jul 7 / 2020", "Aug 25 / 2020"]'>
                                                    </div>
                                                     <!-- End Datepicker -->
                                                </div>
                                                <!-- End Input -->
                                            </div>

                                            <div class="col-sm-12 col-lg-2dot8 text-left mb-4 mb-lg-0">
                                                <!-- Input -->
                                                <span class="d-block text-gray-1 font-weight-normal mb-0">Travelers</span>
                                                <div class="js-focus-state">
                                                    <div class="d-flex border-bottom border-width-2 border-color-1">
                                                        <i class="flaticon-backpack d-flex align-items-center mr-2 text-primary font-weight-semi-bold"></i>
                                                        <select class="js-select selectpicker dropdown-select">
                                                            <option value="2 Rooms - 3 Guests" selected>1 Adult - Ecconomy</option>
                                                            <option value="2 Rooms - 3 Guests">3 Adults - Ecconomy</option>
                                                            <option value="2 Rooms - 3 Guests">2 Adults - Business</option>
                                                            <option value="2 Rooms - 3 Guests">4 Adults - Business</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- End Input -->
                                            </div>

                                            <div class="col-sm-12 col-lg-1dot8 text-left align-self-lg-end">
                                                <button type="submit" class="btn btn-primary text-white border-radius-2 font-weight-bold btn-md mb-xl-0 mb-lg-1 transition-3d-hover"><i class="flaticon-magnifying-glass mr-2"></i>Search</button>
                                            </div>
                                          </div>
                                          <!-- End Checkbox -->
                                        </form>
                                    </div>
                                    <div class="tab-pane fade pt-xl-4" id="pills-three-example2" role="tabpanel" aria-labelledby="pills-three-example2-tab">
                                        <form class="js-validate">
                                          <div class="row nav-select d-block d-lg-flex mb-lg-2 px-lg-3 px-2">
                                            <div class="col-sm-12 col-lg-3dot7 mb-4 mb-lg-0 ">
                                                <!-- Input -->
                                                <span class="d-block text-gray-1 text-left font-weight-normal mb-0">From where</span>
                                                <div class="js-focus-state">
                                                    <div class="input-group border-bottom border-width-2 border-color-1">
                                                        <i class="flaticon-pin-1 d-flex align-items-center mr-2 text-primary font-weight-semi-bold"></i>
                                                      <input type="text" class="form-control font-size-lg-16 shadow-none hero-form font-weight-bold border-0 pl-0" placeholder="city or airport" aria-label="Keyword or title">
                                                    </div>
                                                </div>
                                                <!-- End Input -->
                                            </div>
                                            <div class="col-sm-12 col-lg-3dot6 mb-4 mb-lg-0 ">
                                                <!-- Input -->
                                                <span class="d-block text-gray-1 text-left font-weight-normal mb-0">Depart</span>
                                                <div class="border-bottom border-width-2 border-color-1">
                                                    <div id="datepickerWrapperFromthree" class="u-datepicker input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="d-flex align-items-center mr-2">
                                                              <i class="flaticon-calendar text-primary font-weight-semi-bold"></i>
                                                            </span>
                                                        </div>
                                                         <input class="js-range-datepicker font-size-lg-16 shadow-none font-weight-bold form-control hero-form bg-transparent  border-0" type="date"
                                                             data-rp-wrapper="#datepickerWrapperFromthree"
                                                             data-rp-type="range"
                                                             data-rp-date-format="M d / Y"
                                                             data-rp-default-date='["Jul 7 / 2020", "Aug 25 / 2020"]'>
                                                    </div>
                                                     <!-- End Datepicker -->
                                                </div>
                                                <!-- End Input -->
                                            </div>

                                            <div class="col-sm-12 col-lg-2dot8 text-left mb-4 mb-lg-0">
                                                <!-- Input -->
                                                <span class="d-block text-gray-1 font-weight-normal mb-0">Travelers</span>
                                                <div class="js-focus-state">
                                                    <div class="d-flex border-bottom border-width-2 border-color-1">
                                                        <i class="flaticon-backpack d-flex align-items-center mr-2 text-primary font-weight-semi-bold"></i>
                                                        <select class="js-select selectpicker dropdown-select">
                                                            <option value="2 Rooms - 3 Guests" selected>1 Adult - Ecconomy</option>
                                                            <option value="2 Rooms - 3 Guests">3 Adults - Ecconomy</option>
                                                            <option value="2 Rooms - 3 Guests">2 Adults - Business</option>
                                                            <option value="2 Rooms - 3 Guests">4 Adults - Business</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- End Input -->
                                            </div>

                                            <div class="col-sm-12 col-lg-1dot8 text-left align-self-lg-end">
                                                <button type="submit" class="btn btn-primary text-white border-radius-2 font-weight-bold btn-md mb-xl-0 mb-lg-1 transition-3d-hover"><i class="flaticon-magnifying-glass font-size-20 mr-2"></i>Search</button>
                                            </div>
                                          </div>
                                          <!-- End Checkbox -->
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ========== END HERO ========== -->

            <!-- Product Cards -->
            <div class="product-card-block product-card-v7 border-bottom border-color-8">
                <div class="container space-1 space-top-lg-3">
                    <div class="w-md-80 w-lg-50 text-center mx-md-auto pb-5 mt-5 pt-1">
                        <h2 class="section-title text-black font-size-30 font-weight-bold mb-0">Featured Flight Deals</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xl-3 mb-3 mb-md-4 pb-1">
                            <div class="card transition-3d-hover shadow-hover-2 h-100">
                                <div class="position-relative">
                                    <a href="{{url('flight-list')}}" class="d-block gradient-overlay-half-bg-gradient-v5">
                                        <img class="card-img-top" src="../../assets/img/300x230/img27.jpg" alt="Image Description">
                                    </a>
                                    <div class="position-absolute top-0 left-0 pt-5 pl-3">
                                    <a href="{{url('flight-list')}}">
                                        <span class="badge badge-pill bg-white text-primary px-4 py-2 font-size-14 font-weight-normal">Paris</span>
                                    </a>
                                        <span class="ml-2 text-white">Delta Airline</span>
                                    </div>
                                    <div class="position-absolute bottom-0 left-0 right-0">
                                        <div class="px-3 pb-2">
                                            <div class="text-white my-1">
                                                <span class="mr-1 font-size-14">From</span>
                                                <span class="font-weight-bold font-size-19">£350.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-3 pt-2">
                                    <a href="{{url('flight-list')}}" class="card-title font-size-17 font-weight-bold mb-0 text-dark pt-1 pb-1 d-block">London to Paris</a>
                                    <div class="font-size-14 text-gray-1">
                                        Oneway Flight
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-3 mb-md-4 pb-1">
                            <div class="card transition-3d-hover shadow-hover-2 h-100">
                                <div class="position-relative">
                                    <a href="{{url('flight-list')}}" class="d-block gradient-overlay-half-bg-gradient-v5">
                                        <img class="card-img-top" src="../../assets/img/300x230/img28.jpg" alt="Image Description">
                                    </a>
                                    <div class="position-absolute top-0 left-0 pt-5 pl-3">
                                    <a href="{{url('flight-list')}}">
                                        <span class="badge badge-pill bg-white text-primary px-4 py-2 font-size-14 font-weight-normal">Spain</span>
                                    </a>
                                        <span class="ml-2 text-white">United Airline</span>
                                    </div>
                                    <div class="position-absolute bottom-0 left-0 right-0">
                                        <div class="px-3 pb-2">
                                            <div class="text-white my-1">
                                                <span class="mr-1 font-size-14">From</span>
                                                <span class="font-weight-bold font-size-19">£350.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-3 pt-2">
                                    <a href="{{url('flight-list')}}" class="card-title font-size-17 font-weight-bold mb-0 text-dark pt-1 pb-1 d-block">Dubai to Spain</a>
                                    <div class="font-size-14 text-gray-1">
                                        Oneway Flight
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-3 mb-md-4 pb-1">
                            <div class="card transition-3d-hover shadow-hover-2 h-100">
                                <div class="position-relative">
                                    <a href="{{url('flight-list')}}" class="d-block gradient-overlay-half-bg-gradient-v5">
                                        <img class="card-img-top" src="../../assets/img/300x230/img26.jpg" alt="Image Description">
                                    </a>
                                    <div class="position-absolute top-0 left-0 pt-5 pl-3">
                                    <a href="{{url('flight-list')}}">
                                        <span class="badge badge-pill bg-white text-primary px-4 py-2 font-size-14 font-weight-normal">Australia</span>
                                    </a>
                                        <span class="ml-2 text-white">Air Asia Airline</span>
                                    </div>
                                    <div class="position-absolute bottom-0 left-0 right-0">
                                        <div class="px-3 pb-2">
                                            <div class="text-white my-1">
                                                <span class="mr-1 font-size-14">From</span>
                                                <span class="font-weight-bold font-size-19">£350.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-3 pt-2">
                                    <a href="{{url('flight-list')}}" class="card-title font-size-17 font-weight-bold mb-0 text-dark pt-1 pb-1 d-block">Rome to Australia</a>
                                    <div class="font-size-14 text-gray-1">
                                        Oneway Flight
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-3 mb-md-4 pb-1">
                            <div class="card transition-3d-hover shadow-hover-2 h-100">
                                <div class="position-relative">
                                    <a href="{{url('flight-list')}}" class="d-block gradient-overlay-half-bg-gradient-v5">
                                        <img class="card-img-top" src="../../assets/img/300x230/img25.jpg" alt="Image Description">
                                    </a>
                                    <div class="position-absolute top-0 left-0 pt-5 pl-3">
                                    <a href="{{url('flight-list')}}">
                                        <span class="badge badge-pill bg-white text-primary px-4 py-2 font-size-14 font-weight-normal">Istanbul</span>
                                    </a>
                                        <span class="ml-2 text-white">Turkish Airline</span>
                                    </div>
                                    <div class="position-absolute bottom-0 left-0 right-0">
                                        <div class="px-3 pb-2">
                                            <div class="text-white my-1">
                                                <span class="mr-1 font-size-14">From</span>
                                                <span class="font-weight-bold font-size-19">£350.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-3 pt-2">
                                    <a href="{{url('flight-list')}}" class="card-title font-size-17 font-weight-bold mb-0 text-dark pt-1 pb-1 d-block">London to Istanbul</a>
                                    <div class="font-size-14 text-gray-1">
                                        Oneway Flight
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Product Cards -->

            <!-- Product Cards Carousel with Brands -->
            <div class="product-card-block product-card-v8">
                <div class="container space-1">
                    <div class="w-md-80 w-lg-50 text-center mx-md-auto pb-4 mb-2 mt-3">
                        <h2 class="section-title text-black font-size-30 font-weight-bold mb-0">Cheap Flights & Air Tickets</h2>
                    </div>
                    <div class="js-slick-carousel u-slick u-slick--equal-height u-slick--gutters-3 mb-4"
                        data-slides-show="4"
                        data-slides-scroll="1"
                        data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic v1 u-slick__arrow-classic--v1 u-slick__arrow-centered--y rounded-circle"
                        data-arrow-left-classes="fas fa-chevron-left u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left slick-shadow"
                        data-arrow-right-classes="fas fa-chevron-right u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right slick-shadow"
                        data-pagi-classes="d-lg-none text-center u-slick__pagination mt-4"
                        data-responsive='[{
                        "breakpoint": 1025,
                        "settings": {
                        "slidesToShow": 3
                        }
                        }, {
                        "breakpoint": 992,
                        "settings": {
                        "slidesToShow": 2
                        }
                        }, {
                        "breakpoint": 768,
                        "settings": {
                        "slidesToShow": 1
                        }
                        }, {
                        "breakpoint": 554,
                        "settings": {
                        "slidesToShow": 1
                        }
                        }]'>
                        <div class="js-slide">
                            <div class="card mb-1 w-100">
                                <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-booking.html" class="d-block mb-0 mx-1 mt-1 p-3">
                                    <img class="card-img-top" src="../../assets/img/260x200/img1.jpg" alt="Image Description">
                                </a>
                                <div class="card-body px-3 pt-0 pb-3 my-0 mx-1">
                                    <div class="row">
                                        <div class="col-8">
                                            <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-booking.html" class="card-title text-dark font-size-17 font-weight-bold">Paris</a>
                                            <span class="h5 mb-0 font-weight-bold font-size-17 d-block text-color-1">£350.00<small class="ml-2">Oneway</small></span>
                                        </div>
                                        <div class="col-4">
                                            <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-booking.html" class="badge badge-pill badge-primary py-2 px-3 font-size-14 border-radius-3 font-weight-normal w-100">Select</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="js-slide">
                            <div class="card mb-1 w-100">
                                <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-booking.html" class="d-block mb-0 mx-1 mt-1 p-3">
                                    <img class="card-img-top" src="../../assets/img/260x200/img2.jpg" alt="Image Description">
                                </a>
                                <div class="card-body px-3 pt-0 pb-3 my-0 mx-1">
                                    <div class="row">
                                        <div class="col-8">
                                            <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-booking.html" class="card-title text-dark font-size-17 font-weight-bold">Paris</a>
                                            <span class="h5 mb-0 font-weight-bold font-size-17 d-block text-color-1">£350.00<small class="ml-2">Oneway</small></span>
                                        </div>
                                        <div class="col-4">
                                            <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-booking.html" class="badge badge-pill badge-primary py-2 px-3 font-size-14 border-radius-3 font-weight-normal w-100">Select</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="js-slide">
                            <div class="card mb-1 w-100">
                                <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-booking.html" class="d-block mb-0 mx-1 mt-1 p-3">
                                    <img class="card-img-top" src="../../assets/img/260x200/img3.jpg" alt="Image Description">
                                </a>
                                <div class="card-body px-3 pt-0 pb-3 my-0 mx-1">
                                    <div class="row">
                                        <div class="col-8">
                                            <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-booking.html" class="card-title text-dark font-size-17 font-weight-bold">Paris</a>
                                            <span class="h5 mb-0 font-weight-bold font-size-17 d-block text-color-1">£350.00<small class="ml-2">Oneway</small></span>
                                        </div>
                                        <div class="col-4">
                                            <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-booking.html" class="badge badge-pill badge-primary py-2 px-3 font-size-14 border-radius-3 font-weight-normal w-100">Select</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="js-slide">
                            <div class="card mb-1 w-100">
                                <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-booking.html" class="d-block mb-0 mx-1 mt-1 p-3">
                                    <img class="card-img-top" src="../../assets/img/260x200/img4.jpg" alt="Image Description">
                                </a>
                                <div class="card-body px-3 pt-0 pb-3 my-0 mx-1">
                                    <div class="row">
                                        <div class="col-8">
                                            <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-booking.html" class="card-title text-dark font-size-17 font-weight-bold">Paris</a>
                                            <span class="h5 mb-0 font-weight-bold font-size-17 d-block text-color-1">£350.00<small class="ml-2">Oneway</small></span>
                                        </div>
                                        <div class="col-4">
                                            <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-booking.html" class="badge badge-pill badge-primary py-2 px-3 font-size-14 border-radius-3 font-weight-normal w-100">Select</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="js-slide">
                            <div class="card mb-1 w-100">
                                <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-booking.html" class="d-block mb-0 mx-1 mt-1 p-3">
                                    <img class="card-img-top" src="../../assets/img/260x200/img1.jpg" alt="Image Description">
                                </a>
                                <div class="card-body px-3 pt-0 pb-3 my-0 mx-1">
                                    <div class="row">
                                        <div class="col-8">
                                            <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-booking.html" class="card-title text-dark font-size-17 font-weight-bold">Paris</a>
                                            <span class="h5 mb-0 font-weight-bold font-size-17 d-block text-color-1">£350.00<small class="ml-2">Oneway</small></span>
                                        </div>
                                        <div class="col-4">
                                            <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-booking.html" class="badge badge-pill badge-primary py-2 px-3 font-size-14 border-radius-3 font-weight-normal w-100">Select</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="js-slide">
                            <div class="card mb-1 w-100">
                                <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-booking.html" class="d-block mb-0 mx-1 mt-1 p-3">
                                    <img class="card-img-top" src="../../assets/img/260x200/img2.jpg" alt="Image Description">
                                </a>
                                <div class="card-body px-3 pt-0 pb-3 my-0 mx-1">
                                    <div class="row">
                                        <div class="col-8">
                                            <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-booking.html" class="card-title text-dark font-size-17 font-weight-bold">Paris</a>
                                            <span class="h5 mb-0 font-weight-bold font-size-17 d-block text-color-1">£350.00<small class="ml-2">Oneway</small></span>
                                        </div>
                                        <div class="col-4">
                                            <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-booking.html" class="badge badge-pill badge-primary py-2 px-3 font-size-14 border-radius-3 font-weight-normal w-100">Select</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="js-slide">
                            <div class="card mb-1 w-100">
                                <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-booking.html" class="d-block mb-0 mx-1 mt-1 p-3">
                                    <img class="card-img-top" src="../../assets/img/260x200/img3.jpg" alt="Image Description">
                                </a>
                                <div class="card-body px-3 pt-0 pb-3 my-0 mx-1">
                                    <div class="row">
                                        <div class="col-8">
                                            <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-booking.html" class="card-title text-dark font-size-17 font-weight-bold">Paris</a>
                                            <span class="h5 mb-0 font-weight-bold font-size-17 d-block text-color-1">£350.00<small class="ml-2">Oneway</small></span>
                                        </div>
                                        <div class="col-4">
                                            <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-booking.html" class="badge badge-pill badge-primary py-2 px-3 font-size-14 border-radius-3 font-weight-normal w-100">Select</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="js-slide">
                            <div class="card mb-1 w-100">
                                <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-booking.html" class="d-block mb-0 mx-1 mt-1 p-3">
                                    <img class="card-img-top" src="../../assets/img/260x200/img4.jpg" alt="Image Description">
                                </a>
                                <div class="card-body px-3 pt-0 pb-3 my-0 mx-1">
                                    <div class="row">
                                        <div class="col-8">
                                            <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-booking.html" class="card-title text-dark font-size-17 font-weight-bold">Paris</a>
                                            <span class="h5 mb-0 font-weight-bold font-size-17 d-block text-color-1">£350.00<small class="ml-2">Oneway</small></span>
                                        </div>
                                        <div class="col-4">
                                            <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-booking.html" class="badge badge-pill badge-primary py-2 px-3 font-size-14 border-radius-3 font-weight-normal w-100">Select</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Product Cards Carousel with Brands -->

            <!-- Deals-List v1 -->
            <div class="deal-list-block deal-list-v1 bg-img-hero min-height-600" style="background-image: url(../../assets/img/1920x600/img2.jpg);">
                <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-8 pb-1 pt-7">
                    <h2 class="section-title-1 text-white font-size-30 font-weight-bold mb-0">Travel Deals</h2>
                </div>
                <div class="container">
                    <div class="row mb-xl-5">
                        <div class="col-md-6 col-xl-3">
                            <a class="d-block mb-4 mb-xl-0" href="https://transvelo.github.io/mytravel-html/html/flights/flights-booking.html">
                                <div class="text-hover bg-white p-3 rounded-xs d-flex justify-content-between transition-3d-hover">
                                    <h6 class="font-size-17 font-weight-normal text-gray-5 ml-1 mb-0">Las Vegas</h6>
                                    <span class="font-size-19 font-weight-bold text-gray-1 mr-1">£350.00</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <a class="d-block mb-4 mb-xl-0" href="https://transvelo.github.io/mytravel-html/html/flights/flights-booking.html">
                                <div class="text-hover bg-white p-3 rounded-xs d-flex justify-content-between transition-3d-hover">
                                    <h6 class="font-size-17 font-weight-normal text-gray-5 ml-1 mb-0">Hawaii</h6>
                                    <span class="font-size-19 font-weight-bold text-gray-1 mr-1">£350.00</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <a class="d-block mb-4 mb-xl-0" href="https://transvelo.github.io/mytravel-html/html/flights/flights-booking.html">
                                <div class="text-hover bg-white p-3 rounded-xs d-flex justify-content-between transition-3d-hover">
                                    <h6 class="font-size-17 font-weight-normal text-gray-5 ml-1 mb-0">Florida</h6>
                                    <span class="font-size-19 font-weight-bold text-gray-1 mr-1">£350.00</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <a class="d-block mb-4 mb-xl-0" href="https://transvelo.github.io/mytravel-html/html/flights/flights-booking.html">
                                <div class="text-hover bg-white p-3 rounded-xs d-flex justify-content-between transition-3d-hover">
                                    <h6 class="font-size-17 font-weight-normal text-gray-5 ml-1 mb-0">Philippines</h6>
                                    <span class="font-size-19 font-weight-bold text-gray-1 mr-1">£350.00</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row mb-xl-5">
                        <div class="col-md-6 col-xl-3">
                            <a class="d-block mb-4 mb-xl-0" href="https://transvelo.github.io/mytravel-html/html/flights/flights-booking.html">
                                <div class="text-hover bg-white p-3 rounded-xs d-flex justify-content-between transition-3d-hover">
                                    <h6 class="font-size-17 font-weight-normal text-gray-5 ml-1 mb-0">Mexico</h6>
                                    <span class="font-size-19 font-weight-bold text-gray-1 mr-1">£350.00</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <a class="d-block mb-4 mb-xl-0" href="https://transvelo.github.io/mytravel-html/html/flights/flights-booking.html">
                                <div class="text-hover bg-white p-3 rounded-xs d-flex justify-content-between transition-3d-hover">
                                    <h6 class="font-size-17 font-weight-normal text-gray-5 ml-1 mb-0">India</h6>
                                    <span class="font-size-19 font-weight-bold text-gray-1 mr-1">£350.00</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <a class="d-block mb-4 mb-xl-0" href="https://transvelo.github.io/mytravel-html/html/flights/flights-booking.html">
                                <div class="text-hover bg-white p-3 rounded-xs d-flex justify-content-between transition-3d-hover">
                                    <h6 class="font-size-17 font-weight-normal text-gray-5 ml-1 mb-0">Australia</h6>
                                    <span class="font-size-19 font-weight-bold text-gray-1 mr-1">£350.00</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <a class="d-block mb-4 mb-xl-0" href="https://transvelo.github.io/mytravel-html/html/flights/flights-booking.html">
                                <div class="text-hover bg-white p-3 rounded-xs d-flex justify-content-between transition-3d-hover">
                                    <h6 class="font-size-17 font-weight-normal text-gray-5 ml-1 mb-0">California</h6>
                                    <span class="font-size-19 font-weight-bold text-gray-1 mr-1">£350.00</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row mb-xl-5">
                        <div class="col-md-6 col-xl-3">
                            <a class="d-block mb-4 mb-xl-0" href="https://transvelo.github.io/mytravel-html/html/flights/flights-booking.html">
                                <div class="text-hover bg-white p-3 rounded-xs d-flex justify-content-between transition-3d-hover">
                                    <h6 class="font-size-17 font-weight-normal text-gray-5 ml-1 mb-0">Europe</h6>
                                    <span class="font-size-19 font-weight-bold text-gray-1 mr-1">£350.00</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <a class="d-block mb-4 mb-xl-0" href="https://transvelo.github.io/mytravel-html/html/flights/flights-booking.html">
                                <div class="text-hover bg-white p-3 rounded-xs d-flex justify-content-between transition-3d-hover">
                                    <h6 class="font-size-17 font-weight-normal text-gray-5 ml-1 mb-0">Italy</h6>
                                    <span class="font-size-19 font-weight-bold text-gray-1 mr-1">£350.00</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <a class="d-block mb-4 mb-xl-0" href="https://transvelo.github.io/mytravel-html/html/flights/flights-booking.html">
                                <div class="text-hover bg-white p-3 rounded-xs d-flex justify-content-between transition-3d-hover">
                                    <h6 class="font-size-17 font-weight-normal text-gray-5 ml-1 mb-0">Spain</h6>
                                    <span class="font-size-19 font-weight-bold text-gray-1 mr-1">£350.00</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <a class="d-block mb-4 mb-xl-0" href="https://transvelo.github.io/mytravel-html/html/flights/flights-booking.html">
                                <div class="text-hover bg-white p-3 rounded-xs d-flex justify-content-between transition-3d-hover">
                                    <h6 class="font-size-17 font-weight-normal text-gray-5 ml-1 mb-0">Costa Rica</h6>
                                    <span class="font-size-19 font-weight-bold text-gray-1 mr-1">£350.00</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row mb-0">
                        <div class="col-md-6 col-xl-3">
                            <a class="d-block mb-4 mb-xl-0" href="https://transvelo.github.io/mytravel-html/html/flights/flights-booking.html">
                                <div class="text-hover bg-white p-3 rounded-xs d-flex justify-content-between transition-3d-hover">
                                    <h6 class="font-size-17 font-weight-normal text-gray-5 ml-1 mb-0">San Francisco</h6>
                                    <span class="font-size-19 font-weight-bold text-gray-1 mr-1">£350.00</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <a class="d-block mb-4 mb-xl-0" href="https://transvelo.github.io/mytravel-html/html/flights/flights-booking.html">
                                <div class="text-hover bg-white p-3 rounded-xs d-flex justify-content-between transition-3d-hover">
                                    <h6 class="font-size-17 font-weight-normal text-gray-5 ml-1 mb-0">Atlanda</h6>
                                    <span class="font-size-19 font-weight-bold text-gray-1 mr-1">£350.00</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <a class="d-block mb-4 mb-xl-0" href="https://transvelo.github.io/mytravel-html/html/flights/flights-booking.html">
                                <div class="text-hover bg-white p-3 rounded-xs d-flex justify-content-between transition-3d-hover">
                                    <h6 class="font-size-17 font-weight-normal text-gray-5 ml-1 mb-0">Germany</h6>
                                    <span class="font-size-19 font-weight-bold text-gray-1 mr-1">£350.00</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <a class="d-block mb-6 mb-xl-0" href="https://transvelo.github.io/mytravel-html/html/flights/flights-booking.html">
                                <div class="text-hover bg-white p-3 rounded-xs d-flex justify-content-between transition-3d-hover">
                                    <h6 class="font-size-17 font-weight-normal text-gray-5 ml-1 mb-0">Mexico</h6>
                                    <span class="font-size-19 font-weight-bold text-gray-1 mr-1">£350.00</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Deals-List v1 -->

            <!-- Destinantion v6 -->
            <div class="destination-block destination-v6 border-bottom border-color-8">
                <div class="container space-1">
                    <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mt-3">
                        <h2 class="section-title text-black font-size-30 font-weight-bold mb-0">Top Destination</h2>
                    </div>
                    <div class="row">
                        <!-- Card Block -->
                        <div class="col-md-4 col-lg-6 col-xl-2dot4 mb-3 mb-md-4 pb-1">
                            <a class="d-block" href="https://transvelo.github.io/mytravel-html/html/others/destination.html">
                                <div class="min-height-240 rounded-border px-4 py-5 bg-img-hero transition-3d-hover gradient-overlay-half-bg-gradient-v2 gradient-overlay shadow-hover-2 dropdown" style="background-image: url(../../assets/img/235x240/img3.jpg);">
                                    <header class="w-100 d-flex justify-content-between">
                                        <div class="position-relative">
                                            <h5 class="text-white font-weight-bold font-size-17 mb-1 text-lh-2 d-block">Turkey</h5>
                                        </div>
                                    </header>
                                </div>
                            </a>
                        </div>
                        <!-- End Card Block -->

                        <!-- Card Block -->
                        <div class="col-md-4 col-lg-6 col-xl-2dot4 mb-3 mb-md-4 pb-1">
                            <a class="d-block" href="https://transvelo.github.io/mytravel-html/html/others/destination.html">
                                <div class="min-height-240 rounded-border px-4 py-5 bg-img-hero transition-3d-hover gradient-overlay-half-bg-gradient-v2 gradient-overlay shadow-hover-2 dropdown" style="background-image: url(../../assets/img/235x240/img7.jpg);">
                                    <header class="w-100 d-flex justify-content-between">
                                        <div class="position-relative">
                                            <h5 class="text-white font-weight-bold font-size-17 mb-1 text-lh-2 d-block">United States</h5>
                                        </div>
                                    </header>
                                </div>
                            </a>
                        </div>
                        <!-- End Card Block -->

                        <!-- Card Block -->
                        <div class="col-md-4 col-lg-6 col-xl-2dot4 mb-3 mb-md-4 pb-1">
                            <a class="d-block" href="https://transvelo.github.io/mytravel-html/html/others/destination.html">
                                <div class="min-height-240 rounded-border px-4 py-5 bg-img-hero transition-3d-hover gradient-overlay-half-bg-gradient-v2 gradient-overlay shadow-hover-2 dropdown" style="background-image: url(../../assets/img/235x240/img6.jpg);">
                                    <header class="w-100 d-flex justify-content-between">
                                        <div class="position-relative">
                                            <h5 class="text-white font-weight-bold font-size-17 mb-1 text-lh-2 d-block">Ukraine</h5>
                                        </div>
                                    </header>
                                </div>
                            </a>
                        </div>
                        <!-- End Card Block -->

                        <!-- Card Block -->
                        <div class="col-md-4 col-lg-6 col-xl-2dot4 mb-3 mb-md-4 pb-1">
                            <a class="d-block" href="https://transvelo.github.io/mytravel-html/html/others/destination.html">
                                <div class="min-height-240 rounded-border px-4 py-5 bg-img-hero transition-3d-hover gradient-overlay-half-bg-gradient-v2 gradient-overlay shadow-hover-2 dropdown" style="background-image: url(../../assets/img/235x240/img10.jpg);">
                                    <header class="w-100 d-flex justify-content-between">
                                        <div class="position-relative">
                                            <h5 class="text-white font-weight-bold font-size-17 mb-1 text-lh-2 d-block">France</h5>
                                        </div>
                                    </header>
                                </div>
                            </a>
                        </div>
                        <!-- End Card Block -->

                        <!-- Card Block -->
                        <div class="col-md-4 col-lg-6 col-xl-2dot4 mb-3 mb-md-4 pb-1">
                            <a class="d-block" href="https://transvelo.github.io/mytravel-html/html/others/destination.html">
                                <div class="min-height-240 rounded-border px-4 py-5 bg-img-hero transition-3d-hover gradient-overlay-half-bg-gradient-v2 gradient-overlay shadow-hover-2 dropdown" style="background-image: url(../../assets/img/235x240/img2.jpg);">
                                    <header class="w-100 d-flex justify-content-between">
                                        <div class="position-relative">
                                            <h5 class="text-white font-weight-bold font-size-17 mb-1 text-lh-2 d-block">India</h5>
                                        </div>
                                    </header>
                                </div>
                            </a>
                        </div>
                        <!-- End Card Block -->

                        <!-- Card Block -->
                        <div class="col-md-4 col-lg-6 col-xl-2dot4 mb-3 mb-md-4 pb-1">
                            <a class="d-block" href="https://transvelo.github.io/mytravel-html/html/others/destination.html">
                                <div class="min-height-240 rounded-border px-4 py-5 bg-img-hero transition-3d-hover gradient-overlay-half-bg-gradient-v2 gradient-overlay shadow-hover-2 dropdown" style="background-image: url(../../assets/img/235x240/img5.jpg);">
                                    <header class="w-100 d-flex justify-content-between">
                                        <div class="position-relative">
                                            <h5 class="text-white font-weight-bold font-size-17 mb-1 text-lh-2 d-block">United Kingdom</h5>
                                        </div>
                                    </header>
                                </div>
                            </a>
                        </div>
                        <!-- End Card Block -->

                        <!-- Card Block -->
                        <div class="col-md-4 col-lg-6 col-xl-2dot4 mb-3 mb-md-4 pb-1">
                            <a class="d-block" href="https://transvelo.github.io/mytravel-html/html/others/destination.html">
                                <div class="min-height-240 rounded-border px-4 py-5 bg-img-hero transition-3d-hover gradient-overlay-half-bg-gradient-v2 gradient-overlay shadow-hover-2 dropdown" style="background-image: url(../../assets/img/235x240/img9.jpg);">
                                    <header class="w-100 d-flex justify-content-between">
                                        <div class="position-relative">
                                            <h5 class="text-white font-weight-bold font-size-17 mb-1 text-lh-2 d-block">Germany</h5>
                                        </div>
                                    </header>
                                </div>
                            </a>
                        </div>
                        <!-- End Card Block -->

                        <!-- Card Block -->
                        <div class="col-md-4 col-lg-6 col-xl-2dot4 mb-3 mb-md-4 pb-1">
                            <a class="d-block" href="https://transvelo.github.io/mytravel-html/html/others/destination.html">
                                <div class="min-height-240 rounded-border px-4 py-5 bg-img-hero transition-3d-hover gradient-overlay-half-bg-gradient-v2 gradient-overlay shadow-hover-2 dropdown" style="background-image: url(../../assets/img/235x240/img8.jpg);">
                                    <header class="w-100 d-flex justify-content-between">
                                        <div class="position-relative">
                                            <h5 class="text-white font-weight-bold font-size-17 mb-1 text-lh-2 d-block">Greece</h5>
                                        </div>
                                    </header>
                                </div>
                            </a>
                        </div>
                        <!-- End Card Block -->

                        <!-- Card Block -->
                        <div class="col-md-4 col-lg-6 col-xl-2dot4 mb-3 mb-md-4 pb-1">
                            <a class="d-block" href="https://transvelo.github.io/mytravel-html/html/others/destination.html">
                                <div class="min-height-240 rounded-border px-4 py-5 bg-img-hero transition-3d-hover gradient-overlay-half-bg-gradient-v2 gradient-overlay shadow-hover-2 dropdown" style="background-image: url(../../assets/img/235x240/img1.jpg);">
                                    <header class="w-100 d-flex justify-content-between">
                                        <div class="position-relative">
                                            <h5 class="text-white font-weight-bold font-size-17 mb-1 text-lh-2 d-block">Canada</h5>
                                        </div>
                                    </header>
                                </div>
                            </a>
                        </div>
                        <!-- End Card Block -->

                        <!-- Card Block -->
                        <div class="col-md-4 col-lg-6 col-xl-2dot4 mb-3 mb-md-4 pb-1">
                            <a class="d-block" href="https://transvelo.github.io/mytravel-html/html/others/destination.html">
                                <div class="min-height-240 rounded-border px-4 py-5 bg-img-hero transition-3d-hover gradient-overlay-half-bg-gradient-v2 gradient-overlay shadow-hover-2 dropdown" style="background-image: url(../../assets/img/235x240/img4.jpg);">
                                    <header class="w-100 d-flex justify-content-between">
                                        <div class="position-relative">
                                            <h5 class="text-white font-weight-bold font-size-17 mb-1 text-lh-2 d-block">Italy</h5>
                                        </div>
                                    </header>
                                </div>
                            </a>
                        </div>
                        <!-- End Card Block -->
                    </div>
                </div>
            </div>
            <!-- End Destinantion v6 -->

            <!-- Recent Article -->
            <div class="recent-article-block recent-article-v1">
                <div class="container space-1 mt-3 mb-lg-4">
                    <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5">
                        <h2 class="section-title text-black font-size-30 font-weight-bold mb-0">Recent Articles</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="mb-4 mb-lg-0 text-md-center text-lg-left">
                                <a class="d-block mb-3" href="https://transvelo.github.io/mytravel-html/html/blog/blog-single.html">
                                    <img class="img-fluid rounded-xs w-100" src="../../assets/img/410x300/img1.jpg" alt="Image-Description">
                                </a>
                                <h6 class="text-gray-6 font-size-17 pt-xl-1 font-weight-bold font-weight-bold mb-1">
                                    <a href="https://transvelo.github.io/mytravel-html/html/blog/blog-single.html">How to travel with paper map</a>
                                </h6>
                                <a class="text-gray-1" href="https://transvelo.github.io/mytravel-html/html/blog/blog-single.html">
                                    <span>June 6, 2019</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="mb-4 mb-lg-0 text-md-center text-lg-left">
                                <a class="d-block mb-3" href="https://transvelo.github.io/mytravel-html/html/blog/blog-single.html">
                                    <img class="img-fluid rounded-xs w-100" src="../../assets/img/410x300/img2.jpg" alt="Image-Description">
                                </a>
                                <h6 class="text-gray-6 font-size-17 pt-xl-1 font-weight-bold font-weight-bold mb-1">
                                    <a href="https://transvelo.github.io/mytravel-html/html/blog/blog-single.html">Change your place and get fresh air</a>
                                </h6>
                                <a class="text-gray-1" href="https://transvelo.github.io/mytravel-html/html/blog/blog-single.html">
                                    <span>June 6, 2019</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="mb-0 text-md-center text-lg-left">
                                <a class="d-block mb-3" href="https://transvelo.github.io/mytravel-html/html/blog/blog-single.html">
                                    <img class="img-fluid rounded-xs w-100" src="../../assets/img/410x300/img3.jpg" alt="Image-Description">
                                </a>
                                <h6 class="text-gray-6 font-size-17 pt-xl-1 font-weight-bold font-weight-bold mb-1">
                                    <a href="https://transvelo.github.io/mytravel-html/html/blog/blog-single.html">Pityful a rethoric question ran</a>
                                </h6>
                                <a class="text-gray-1" href="https://transvelo.github.io/mytravel-html/html/blog/blog-single.html">
                                    <span>June 6, 2019</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Recent Article -->

            <!-- End Clients v1 -->
            <div class="clients-block clients-v1 border-bottom border-color-8">
                <div class="container space-1">
                    <div class="row justify-content-between text-center text-md-left">
                        <div class="col-12 col-md mb-5 mb-md-3 pb-md-1">
                            <img class="img-fluid" src="../../assets/img/200x200/img11.png" alt="Image Description">
                        </div>
                        <div class="col-12 col-md mb-5 mb-md-3 pb-md-1">
                            <img class="img-fluid" src="../../assets/img/200x200/img12.png" alt="Image Description">
                        </div>
                        <div class="col-12 col-md mb-5 mb-md-3 pb-md-1">
                            <img class="img-fluid" src="../../assets/img/200x200/img13.png" alt="Image Description">
                        </div>
                        <div class="col-12 col-md mb-5 mb-md-3 pb-md-1">
                            <img class="img-fluid" src="../../assets/img/200x200/img14.png" alt="Image Description">
                        </div>
                        <div class="col-12 col-md mb-md-3 pb-md-1">
                            <img class="img-fluid" src="../../assets/img/200x200/img15.png" alt="Image Description">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Clients v1 -->
        </main>
        <!-- ========== END MAIN CONTENT ========== -->

      @include('home.footer')