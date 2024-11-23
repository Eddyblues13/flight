@include('home.header')


        <!-- ========== MAIN CONTENT ========== -->
        <main id="content" role="main">
            <div class="bg-gray-33 py-1">
                <div class="container">
                    <div class="border-0">
                        <div class="card-body">
                            <ul class="nav tab-nav tab-nav-1-inner flex-nowrap pb-2 mb-md-1 px-lg-3 px-2" role="tablist">
                                <li class="nav-item flex-shrink-0 flex-shrink-md-1">
                                    <a class="nav-link font-weight-medium active" id="pills-one-example2-tab" data-toggle="pill" href="#pills-one-example2" role="tab" aria-controls="pills-one-example2" aria-selected="true">
                                        <div class="d-flex flex-column flex-md-row  position-relative text-black align-items-center">
                                            <span class="tabtext font-size-12 font-weight-semi-bold">ROUND-TRIP</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item flex-shrink-0 flex-shrink-md-1">
                                    <a class="nav-link font-weight-medium" id="pills-two-example2-tab" data-toggle="pill" href="#pills-two-example2" role="tab" aria-controls="pills-two-example2" aria-selected="true">
                                        <div class="d-flex flex-column flex-md-row  position-relative text-black align-items-center">
                                            <span class="tabtext font-size-12 font-weight-semi-bold">ONE-WAY</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item flex-shrink-0 flex-shrink-md-1">
                                    <a class="nav-link font-weight-medium" id="pills-three-example2-tab" data-toggle="pill" href="#pills-three-example2" role="tab" aria-controls="pills-three-example2" aria-selected="true">
                                        <div class="d-flex flex-column flex-md-row  position-relative text-black align-items-center">
                                            <span class="tabtext font-size-12 font-weight-semi-bold">MULTI-CITY</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content hero-tab-pane">
                                <div class="tab-pane fade active show" id="pills-one-example2" role="tabpanel" aria-labelledby="pills-one-example2-tab">
                                    <form class="js-validate">
                                      <div class="row nav-select nav-select-1 d-block d-lg-flex mb-lg-2 px-lg-3 px-2 align-items-end">
                                        <div class="col-sm-12 col-lg-6 col-xl-2dot3 mb-4 mb-xl-0 ">
                                            <!-- Input -->
                                            <span class="d-block text-gray-1 text-left font-weight-normal mb-0">From where</span>
                                            <div class="js-focus-state">
                                                <div class="input-group border-bottom-1">
                                                    <i class="flaticon-pin-1 d-flex align-items-center mr-2 text-primary font-weight-semi-bold"></i>
                                                  <input type="text" class="form-control font-size-lg-16 shadow-none hero-form font-weight-bold border-0 pl-0 bg-transparent" placeholder="city or airport" aria-label="Keyword or title">
                                                </div>
                                            </div>
                                            <!-- End Input -->
                                        </div>
                                        <div class="col-sm-12 col-lg-6 col-xl-2dot3 mb-4 mb-xl-0 ">
                                            <!-- Input -->
                                            <span class="d-block text-gray-1 text-left font-weight-normal mb-0">To where</span>
                                            <div class="js-focus-state">
                                                <div class="input-group border-bottom-1">
                                                    <i class="flaticon-pin-1 d-flex align-items-center mr-2 text-primary font-weight-semi-bold"></i>
                                                  <input type="text" class="form-control font-size-lg-16 shadow-none hero-form font-weight-bold border-0 pl-0 bg-transparent" placeholder="city or airport" aria-label="Keyword or title">
                                                </div>
                                            </div>
                                            <!-- End Input -->
                                        </div>

                                        <div class="col-sm-12 col-lg-6 col-xl-3 mb-4 mb-xl-0 ">
                                            <!-- Input -->
                                            <span class="d-block text-gray-1 text-left font-weight-normal mb-0">Depart-Return</span>
                                            <div class="border-bottom-1">
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

                                        <div class="col-sm-12 col-lg-6 col-xl-2dot4 text-left mb-4 mb-xl-0">
                                            <!-- Input -->
                                            <span class="d-block text-gray-1 font-weight-normal mb-0">Travelers</span>
                                            <div class="js-focus-state">
                                                <div class="d-flex border-bottom-1">
                                                    <i class="flaticon-plus d-flex align-items-center mr-2 text-primary font-weight-semi-bold"></i>
                                                    <select class="js-select selectpicker dropdown-select">
                                                        <option value="2 Rooms - 3 Guests" selected>1 Adult - Economy</option>
                                                        <option value="2 Rooms - 3 Guests">3 Adults - Economy</option>
                                                        <option value="2 Rooms - 3 Guests">2 Adults - Business</option>
                                                        <option value="2 Rooms - 3 Guests">4 Adults - Business</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- End Input -->
                                        </div>

                                        <div class="col-sm-12 col-lg col-xl-1dot8">
                                            <button type="submit" class="btn btn-blue-1 width-lg-200 text-white border-radius-2 font-weight-bold btn-md mb-xl-0 mb-lg-1 transition-3d-hover w-100 w-md-auto"><i class="flaticon-magnifying-glass mr-2"></i>Search</button>
                                        </div>
                                      </div>
                                      <!-- End Checkbox -->
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="pills-two-example2" role="tabpanel" aria-labelledby="pills-two-example2-tab">
                                    <form class="js-validate">
                                      <div class="row nav-select nav-select-1 d-block d-lg-flex mb-lg-2 px-lg-3 px-2 align-items-end">
                                        <div class="col-sm-12 col-lg-6 col-xl-3dot7 mb-4 mb-xl-0">
                                            <!-- Input -->
                                            <span class="d-block text-gray-1 text-left font-weight-normal mb-0">From where</span>
                                            <div class="js-focus-state">
                                                <div class="input-group border-bottom-1">
                                                    <i class="flaticon-pin-1 d-flex align-items-center mr-2 text-primary font-weight-semi-bold"></i>
                                                  <input type="text" class="form-control font-size-lg-16 shadow-none hero-form font-weight-bold border-0 pl-0 bg-transparent" placeholder="city or airport" aria-label="Keyword or title">
                                                </div>
                                            </div>
                                            <!-- End Input -->
                                        </div>
                                        <div class="col-sm-12 col-lg-6 col-xl-3dot6 mb-4 mb-xl-0">
                                            <!-- Input -->
                                            <span class="d-block text-gray-1 text-left font-weight-normal mb-0">Depart</span>
                                            <div class="border-bottom-1">
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

                                        <div class="col-sm-12 col-lg-6 col-xl-2dot8 text-left mb-4 mb-xl-0">
                                            <!-- Input -->
                                            <span class="d-block text-gray-1 font-weight-normal mb-0">Travelers</span>
                                            <div class="js-focus-state">
                                                <div class="d-flex border-bottom-1">
                                                    <i class="flaticon-plus d-flex align-items-center mr-2 text-primary font-weight-semi-bold"></i>
                                                    <select class="js-select selectpicker dropdown-select">
                                                        <option value="2 Rooms - 3 Guests" selected>1 Adult - Economy</option>
                                                        <option value="2 Rooms - 3 Guests">3 Adults - Economy</option>
                                                        <option value="2 Rooms - 3 Guests">2 Adults - Business</option>
                                                        <option value="2 Rooms - 3 Guests">4 Adults - Business</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- End Input -->
                                        </div>

                                        <div class="col-sm-12 col-lg-12 col-xl-1dot8">
                                            <button type="submit" class="btn btn-blue-1 width-lg-200 text-white border-radius-2 font-weight-bold btn-md mb-xl-0 mb-lg-1 transition-3d-hover w-100 w-md-auto"><i class="flaticon-magnifying-glass mr-2"></i>Search</button>
                                        </div>
                                      </div>
                                      <!-- End Checkbox -->
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="pills-three-example2" role="tabpanel" aria-labelledby="pills-three-example2-tab">
                                    <form class="js-validate">
                                      <div class="row nav-select nav-select-1 d-block d-lg-flex mb-lg-2 px-lg-3 px-2 align-items-end">
                                        <div class="col-sm-12 col-lg-6 col-xl-3dot7 mb-4 mb-xl-0">
                                            <!-- Input -->
                                            <span class="d-block text-gray-1 text-left font-weight-normal mb-0">From where</span>
                                            <div class="js-focus-state">
                                                <div class="input-group border-bottom-1">
                                                    <i class="flaticon-pin-1 d-flex align-items-center mr-2 text-primary font-weight-semi-bold"></i>
                                                  <input type="text" class="form-control font-size-lg-16 shadow-none hero-form font-weight-bold border-0 pl-0 bg-transparent" placeholder="city or airport" aria-label="Keyword or title">
                                                </div>
                                            </div>
                                            <!-- End Input -->
                                        </div>
                                        <div class="col-sm-12 col-lg-6 col-xl-3dot6 mb-4 mb-xl-0 ">
                                            <!-- Input -->
                                            <span class="d-block text-gray-1 text-left font-weight-normal mb-0">Depart</span>
                                            <div class="border-bottom-1">
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

                                        <div class="col-sm-12 col-lg-6 col-xl-2dot8 text-left mb-4 mb-xl-0">
                                            <!-- Input -->
                                            <span class="d-block text-gray-1 font-weight-normal mb-0">Travelers</span>
                                            <div class="js-focus-state">
                                                <div class="d-flex border-bottom-1">
                                                    <i class="flaticon-plus d-flex align-items-center mr-2 text-primary font-weight-semi-bold"></i>
                                                    <select class="js-select selectpicker dropdown-select">
                                                        <option value="2 Rooms - 3 Guests" selected>1 Adult - Economy</option>
                                                        <option value="2 Rooms - 3 Guests">3 Adults - Economy</option>
                                                        <option value="2 Rooms - 3 Guests">2 Adults - Business</option>
                                                        <option value="2 Rooms - 3 Guests">4 Adults - Business</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- End Input -->
                                        </div>

                                        <div class="col-sm-12 col-lg-12 col-xl-1dot8">
                                            <button type="submit" class="btn btn-blue-1 width-lg-200 text-white border-radius-2 font-weight-bold btn-md mb-xl-0 mb-lg-1 transition-3d-hover w-100 w-md-auto"><i class="flaticon-magnifying-glass mr-2"></i>Search</button>
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
            <div class="container">
                <div class="row pt-5 pt-xl-8 mb-5 mb-xl-9 pb-xl-1">
                    <div class="col-lg-4 col-xl-3 mt-xl-1">
                        <div class="navbar-expand-xl navbar-expand-xl-collapse-block">
                            <button class="btn d-xl-none mb-5 p-0 collapsed" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="far fa-caret-square-down text-primary font-size-20 card-btn-arrow ml-0"></i>
                                <span class="text-primary ml-2">Sidebar</span>
                            </button>
                            <div id="sidebar" class="collapse navbar-collapse">
                                <div class="mb-6 w-100">
                                    <div class="sidenav border border-color-8 rounded-xs">
                                        <!-- Accordiaon -->
                                        <div id="shopCategoryAccordion" class="accordion rounded-0 shadow-none">
                                            <div class="border-0">
                                                <div class="card-collapse" id="shopCategoryHeadingOne">
                                                    <h3 class="mb-0">
                                                        <button type="button" class="btn btn-link btn-block card-btn py-2 px-5 text-lh-3 collapsed" data-toggle="collapse" data-target="#shopCategoryOne" aria-expanded="false" aria-controls="shopCategoryOne">
                                                            <span class="row align-items-center">
                                                                <span class="col-9">
                                                                    <span class="font-weight-bold font-size-17 text-dark mb-3">Stops
                                                                    </span>
                                                                </span>
                                                                <span class="col-3 text-right">
                                                                    <span class="card-btn-arrow">
                                                                        <span class="fas fa-chevron-down small"></span>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </button>
                                                    </h3>
                                                </div>
                                                <div id="shopCategoryOne" class="collapse show" aria-labelledby="shopCategoryHeadingOne" data-parent="#shopCategoryAccordion">
                                                    <div class="card-body pt-0 mt-1 px-5 pb-4">
                                                       <!-- Checkboxes -->
                                                        <div class="form-group font-size-1 text-lh-md text-gray-1 mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="1">
                                                                <label class="custom-control-label" for="1">Non Stop</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group font-size-1 text-lh-md text-gray-1 mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="2">
                                                                <label class="custom-control-label" for="2">1 Stop</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group font-size-1 text-lh-md text-gray-1 mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="3">
                                                                <label class="custom-control-label" for="3">2 Stop</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group font-size-1 text-lh-md text-gray-1 mb-1">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="4">
                                                                <label class="custom-control-label" for="4">3 Stop</label>
                                                            </div>
                                                        </div>
                                                        <!-- End Checkboxes -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Accordion -->
                                        <!-- Accordiaon -->
                                        <div id="shopCartAccordion" class="accordion rounded shadow-none border-top">
                                            <div class="border-0">
                                                <div class="card-collapse" id="shopCardHeadingOne">
                                                    <h3 class="mb-0">
                                                        <button type="button" class="btn btn-link btn-block card-btn py-2 px-5 text-lh-3 collapsed" data-toggle="collapse" data-target="#shopCardOne" aria-expanded="false" aria-controls="shopCardOne">
                                                            <span class="row align-items-center">
                                                                <span class="col-9">
                                                                    <span class="d-block font-size-lg-15 font-size-17 font-weight-bold text-dark">Price Range($)</span>
                                                                </span>
                                                                <span class="col-3 text-right">
                                                                    <span class="card-btn-arrow">
                                                                        <span class="fas fa-chevron-down small"></span>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </button>
                                                    </h3>
                                                </div>
                                                <div id="shopCardOne" class="collapse show" aria-labelledby="shopCardHeadingOne" data-parent="#shopCartAccordion">
                                                    <div class="card-body pt-0 px-5">
                                                        <div class="pb-3 mb-1 d-flex text-lh-1">
                                                            <span>£</span>
                                                            <span id="rangeSliderExample3MinResult" class=""></span>
                                                            <span class="mx-0dot5"> — </span>
                                                            <span>£</span>
                                                            <span id="rangeSliderExample3MaxResult" class=""></span>
                                                        </div>
                                                        <input class="js-range-slider" type="text"
                                                        data-extra-classes="u-range-slider height-35"
                                                        data-type="double"
                                                        data-grid="false"
                                                        data-hide-from-to="true"
                                                        data-min="0"
                                                        data-max="3456"
                                                        data-from="200"
                                                        data-to="3456"
                                                        data-prefix="$"
                                                        data-result-min="#rangeSliderExample3MinResult"
                                                        data-result-max="#rangeSliderExample3MaxResult">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Accordion -->

                                        <div id="facilityCategoryAccordion" class="accordion rounded-0 shadow-none border-top">
                                            <div class="border-0">
                                                <div class="card-collapse" id="facilityCategoryHeadingOne">
                                                    <h3 class="mb-0">
                                                        <button type="button" class="btn btn-link btn-block card-btn py-2 px-5 text-lh-3 collapsed" data-toggle="collapse" data-target="#facilityCategoryOne" aria-expanded="false" aria-controls="facilityCategoryOne">
                                                            <span class="row align-items-center">
                                                                <span class="col-9">
                                                                    <span class="font-weight-bold font-size-17 text-dark mb-3">Airlines</span>
                                                                </span>
                                                                <span class="col-3 text-right">
                                                                    <span class="card-btn-arrow">
                                                                        <span class="fas fa-chevron-down small"></span>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </button>
                                                    </h3>
                                                </div>
                                                <div id="facilityCategoryOne" class="collapse show" aria-labelledby="facilityCategoryHeadingOne" data-parent="#facilityCategoryAccordion">
                                                    <div class="card-body pt-0 mt-1 px-5 pb-4">
                                                        <div class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-gray-1 mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="brandAdidas">
                                                                <label class="custom-control-label" for="brandAdidas">Turkish Airlines</label>
                                                            </div>
                                                            <small>749</small>
                                                        </div>
                                                        <div class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-gray-1 mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="brandNewBalance">
                                                                <label class="custom-control-label" for="brandNewBalance">United Airlines</label>
                                                            </div>
                                                            <small>630</small>
                                                        </div>
                                                        <div class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-gray-1 mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="brandNike">
                                                                <label class="custom-control-label" for="brandNike">Major Airline</label>
                                                            </div>
                                                            <small>58</small>
                                                        </div>
                                                        <div class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-gray-1 mb-3 pb-1">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="brandFredPerry">
                                                                <label class="custom-control-label" for="brandFredPerry">Alitalia</label>
                                                            </div>
                                                            <small>29</small>
                                                        </div>
                                                        <div class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-gray-1 mb-3 pb-1">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="brandPerry">
                                                                <label class="custom-control-label" for="brandPerry">Air France</label>
                                                            </div>
                                                            <small>58</small>
                                                        </div>
                                                        <!-- End Checkboxes -->

                                                        <!-- View More - Collapse -->
                                                        <div class="collapse" id="collapseBrand1">
                                                            <div class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-gray-1 mb-1">
                                                                <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="brandGucci">
                                                                <label class="custom-control-label" for="brandGucci">Gucci</label>
                                                                </div>
                                                                <small>5</small>
                                                            </div>
                                                            <div class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-gray-1 mb-3">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="brandMango">
                                                                    <label class="custom-control-label" for="brandMango">Mango</label>
                                                                </div>
                                                                <small>1</small>
                                                            </div>
                                                        </div>
                                                        <!-- End View More - Collapse -->

                                                        <!-- Link -->
                                                        <a class="link link-collapse small font-size-1" data-toggle="collapse" href="#collapseBrand1" role="button" aria-expanded="false" aria-controls="collapseBrand1">
                                                          <span class="link-collapse__default font-size-14">Show all 13</span>
                                                          <span class="link-collapse__active font-size-14">Show less</span>
                                                        </a>
                                                        <!-- End Link -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- End Accordion -->
                                        <div id="propertyCategoryAccordion" class="accordion rounded-0 shadow-none border-top">
                                            <div class="border-0">
                                                <div class="card-collapse" id="propertyCategoryHeadingOne">
                                                    <h3 class="mb-0">
                                                        <button type="button" class="btn btn-link btn-block card-btn py-2 px-5 text-lh-3 collapsed" data-toggle="collapse" data-target="#propertyCategoryOne" aria-expanded="false" aria-controls="propertyCategoryOne">
                                                            <span class="row align-items-center">
                                                                <span class="col-9">
                                                                    <span class="font-weight-bold font-size-17 text-dark mb-3">Flight Type</span>
                                                                </span>
                                                                <span class="col-3 text-right">
                                                                    <span class="card-btn-arrow">
                                                                        <span class="fas fa-chevron-down small"></span>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </button>
                                                    </h3>
                                                </div>
                                                <div id="propertyCategoryOne" class="collapse show" aria-labelledby="propertyCategoryHeadingOne" data-parent="#propertyCategoryAccordion">
                                                    <div class="card-body pt-0 mt-1 px-5 pb-4">
                                                        <div class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-gray-1 mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="brandhotel">
                                                                <label class="custom-control-label" for="brandhotel">Business</label>
                                                            </div>
                                                            <small>749</small>
                                                        </div>
                                                        <div class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-gray-1 mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="brandapartmet">
                                                                <label class="custom-control-label" for="brandapartmet">First Class</label>
                                                            </div>
                                                            <small>630</small>
                                                        </div>
                                                        <div class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-gray-1 mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="brandbed">
                                                                <label class="custom-control-label" for="brandbed">Economy</label>
                                                            </div>
                                                            <small>58</small>
                                                        </div>
                                                        <div class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-gray-1 mb-1">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="brandresorts">
                                                                <label class="custom-control-label" for="brandresorts">Premium Economy</label>
                                                            </div>
                                                            <small>29</small>
                                                        </div>
                                                        <!-- End Checkboxes -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Accordion -->
                                        <div id="cityCategoryAccordion" class="accordion rounded-0 shadow-none border-top">
                                            <div class="border-0">
                                                <div class="card-collapse" id="cityCategoryHeadingOne">
                                                    <h3 class="mb-0">
                                                        <button type="button" class="btn btn-link btn-block card-btn py-2 px-5 text-lh-3 collapsed" data-toggle="collapse" data-target="#cityCategoryOne" aria-expanded="false" aria-controls="cityCategoryOne">
                                                            <span class="row align-items-center">
                                                                <span class="col-9">
                                                                    <span class="font-weight-bold font-size-17 text-dark mb-3">Inflight Experience</span>
                                                                </span>
                                                                <span class="col-3 text-right">
                                                                    <span class="card-btn-arrow">
                                                                        <span class="fas fa-chevron-down small"></span>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </button>
                                                    </h3>
                                                </div>
                                                <div id="cityCategoryOne" class="collapse show" aria-labelledby="cityCategoryHeadingOne" data-parent="#cityCategoryAccordion">
                                                    <div class="card-body pt-0 mt-1 px-5 pb-4">
                                                        <div class="form-group font-size-1 text-lh-md text-secondary mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="branddining">
                                                                <label class="custom-control-label" for="branddining">Inflight Dining
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group font-size-1 text-lh-md text-secondary mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="brandmusic">
                                                                <label class="custom-control-label" for="brandmusic">Music</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group font-size-1 text-lh-md text-secondary mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="brandshopping">
                                                                <label class="custom-control-label" for="brandshopping">Sky Shopping
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group font-size-1 text-lh-md text-secondary mb-1">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="brandcabin">
                                                                <label class="custom-control-label" for="brandcabin">Seats & Cabin
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <!-- End Checkboxes -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Accordion -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 mt-xl-1">
                        <!-- Shop-control-bar Title -->
                        <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center mb-4 pb-1">
                            <h3 class="font-size-21 font-weight-bold mb-4 mb-md-0 text-lh-1 text-center text-md-left">1984 results found.</h3>
                            <div class="d-flex align-items-center justify-content-between justify-content-md-start">
                                <div class="position-relative">
                                    <a id="basicDropdownClickInvoker" class="dropdown-nav-link dropdown-toggle" href="javascript:;" role="button" aria-controls="basicDropdownClick" aria-haspopup="true" aria-expanded="false" data-unfold-event="hover" data-unfold-target="#basicDropdownClick" data-unfold-type="css-animation"data-unfold-duration="300" data-unfold-delay="300" data-unfold-hide-on-scroll="true" data-unfold-animation-in="slideInUp" data-unfold-animation-out="fadeOut">
                                    <span class="font-weight-bold text-gray-3"> Sorted By</span>
                                  </a>

                                  <div id="basicDropdownClick" class="dropdown-menu dropdown-unfold" aria-labelledby="basicDropdownClickInvoker">
                                    <a class="dropdown-item active" href="#">One</a>
                                    <a class="dropdown-item" href="#">Two</a>
                                    <a class="dropdown-item" href="#">Three</a>
                                  </div>
                                </div>
                                <ul class="nav tab-nav-shop flex-nowrap" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link font-size-22 p-0 ml-4" id="pills-three-example1-tab" data-toggle="pill" href="#pills-three-example1" role="tab" aria-controls="pills-three-example1" aria-selected="true">
                                            <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                <i class="fa fa-list"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link font-size-22 p-0 ml-2 active" id="pills-one-example1-tab" data-toggle="pill" href="#pills-one-example1" role="tab" aria-controls="pills-one-example1" aria-selected="false">
                                            <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                <i class="fa fa-th"></i>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="border mb-5 rounded">
                            <div class="js-slick-carousel u-slick px-9"
                                data-slides-show="5"
                                data-slides-scroll="1"
                                data-arrows-classes="u-slick__arrow-classic__v1 u-slick__arrow-centered--y h-100 width-70 z-index-2 bg-white cursor-pointer font-size-20"
                                data-arrow-left-classes="fas fa-chevron-left u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left rounded-left"
                                data-arrow-right-classes="fas fa-chevron-right u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right rounded-right"
                                data-responsive='[{
                                    "breakpoint": 992,
                                    "settings": {
                                        "slidesToShow": 3
                                    }
                                }, {
                                    "breakpoint": 768,
                                    "settings": {
                                        "slidesToShow": 2
                                    }
                                }, {
                                    "breakpoint": 554,
                                    "settings": {
                                        "slidesToShow": 1
                                    }
                                }]'>
                                <div class="js-slide">
                                    <div class="py-3 border-right text-hover-primary">
                                        <div class="text-center py-1">
                                            <a href="#">
                                                <h6 class="font-weight-bold text-gray-3 mb-0">Fri,20 Sep</h6>
                                                <span class="font-weight-normal text-gray-1">£ 350.48</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide">
                                    <div class="py-3 border-right text-hover-primary">
                                        <div class="text-center py-1">
                                            <a href="#">
                                                <h6 class="font-weight-bold text-gray-3 mb-0">Sat,21 Sep</h6>
                                                <span class="font-weight-normal text-gray-1">£ 350.48</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide">
                                    <div class="py-3 border-right text-hover-primary">
                                        <div class="text-center py-1">
                                            <a href="#">
                                                <h6 class="font-weight-bold text-gray-3 mb-0">Sun,22 Sep</h6>
                                                <span class="font-weight-normal text-gray-1">£ 350.48</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide">
                                    <div class="py-3 border-right text-hover-primary">
                                        <div class="text-center py-1">
                                            <a href="#">
                                                <h6 class="font-weight-bold text-gray-3 mb-0">Mon,23 Sep</h6>
                                                <span class="font-weight-normal text-gray-1">£ 350.48</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide">
                                    <div class="py-3 border-right text-hover-primary">
                                        <div class="text-center py-1">
                                            <a href="#">
                                                <h6 class="font-weight-bold text-gray-3 mb-0">Tue,24 Sep</h6>
                                                <span class="font-weight-normal text-gray-1">£ 350.48</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide">
                                    <div class="py-3 border-right text-hover-primary">
                                        <div class="text-center py-1">
                                            <a href="#">
                                                <h6 class="font-weight-bold text-gray-3 mb-0">Wed,25 Sep</h6>
                                                <span class="font-weight-normal text-gray-1">£ 350.48</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide">
                                    <div class="py-3 border-right text-hover-primary">
                                        <div class="text-center py-1">
                                            <a href="#">
                                                <h6 class="font-weight-bold text-gray-3 mb-0">Thu,26 Sep</h6>
                                                <span class="font-weight-normal text-gray-1">£ 350.48</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-slide">
                                    <div class="py-3 border-right text-hover-primary">
                                        <div class="text-center py-1">
                                            <a href="#">
                                                <h6 class="font-weight-bold text-gray-3 mb-0">Fri,27 Sep</h6>
                                                <span class="font-weight-normal text-gray-1">£ 350.48</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End shop-control-bar Title -->
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade" id="pills-three-example1" role="tabpanel" aria-labelledby="pills-three-example1-tab" data-target-group="groups">
                                <div class="mb-5">
                                    <div class="hover-bg-gray-1 border rounded-xs py-4 px-4 px-xl-5">
                                        <div class="row align-items-center text-center">
                                            <div class="col-md mb-4 mb-md-0">
                                                <img class="img-fluid" src="../../assets/img/90x90/img1.png" alt="Image-Description">
                                            </div>
                                            <div class="col-md mb-4 mb-md-0">
                                                <div class="flex-content-center d-block d-lg-flex">
                                                    <div class="mr-lg-3 mb-1 mb-lg-0">
                                                        <i class="flaticon-aeroplane font-size-30 text-primary"></i>
                                                    </div>
                                                    <div class="text-lg-left">
                                                        <h6 class="font-weight-bold font-size-21 text-gray-5 mb-0">18:30</h6>
                                                        <span class="font-size-14 text-gray-1">New Delhi</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md mb-4 mb-md-0">
                                                <div class="flex-content-center flex-column">
                                                    <h6 class="font-size-14 font-weight-bold text-gray-5 mb-0">02 hrs 45 mins</h6>
                                                    <div class="width-60 border-top border-primary border-width-2 my-1"></div>
                                                    <div class="font-size-14 text-gray-1">Non Stop</div>
                                                </div>
                                            </div>
                                            <div class="col-md mb-4 mb-md-0">
                                                <div class="flex-content-center d-block d-lg-flex">
                                                    <div class="mr-lg-3 mb-1 mb-lg-0">
                                                        <i class="d-block rotate-90 flaticon-aeroplane font-size-30 text-primary"></i>
                                                    </div>
                                                    <div class="text-lg-left">
                                                        <h6 class="font-weight-bold font-size-21 text-gray-5 mb-0">21.15</h6>
                                                        <span class="font-size-14 text-gray-1">Bengaluru</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2gdot8">
                                                <div class="border-xl-left">
                                                    <div class="ml-xl-5">
                                                        <div class="mb-2">
                                                            <div class="mb-2 text-lh-1dot4">
                                                                <span class="font-weight-bold font-size-22">£4,177</span>
                                                            </div>
                                                            <a href="{{url('booking')}}" class="btn btn-outline-primary border-radius-3 d-flex align-items-center justify-content-center min-height-50 font-weight-bold border-width-2 py-2 w-100">Book Now</a>
                                                        </div>
                                                        <!-- On Target Modal -->
                                                        <a class="font-size-14 text-gray-1 d-block" href="#ontargetModal"
                                                            data-modal-target="#ontargetModal"
                                                            data-modal-effect="fadein">
                                                            Flight Details
                                                        </a>
                                                        <div id="ontargetModal" class="js-modal-window u-modal-window max-width-960"
                                                            data-modal-type="ontarget"
                                                            data-open-effect="fadeIn"
                                                            data-close-effect="fadeOut"
                                                            data-speed="500">
                                                            <div class="card mx-4 mx-xl-0 mb-4 mb-md-0">
                                                                <button type="button" class="border-0 width-50 height-50 bg-primary flex-content-center position-absolute rounded-circle mt-n4 mr-n4 top-0 right-0" aria-label="Close" onclick="Custombox.modal.close();">
                                                                    <i aria-hidden="true" class="flaticon-close text-white font-size-14"></i>
                                                                </button>
                                                                <!-- Header -->
                                                                <header class="card-header bg-light py-4 px-4">
                                                                    <div class="row align-items-center text-center">
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="d-block d-lg-flex flex-horizontal-center">
                                                                                <img class="img-fluid mr-3 mb-3 mb-lg-0" src="../../assets/img/90x90/img1.png" alt="Image-Description">
                                                                                <div class="font-size-14">Spicejet SG 143 | Boeing 737-700</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="mx-2 mx-xl-3 flex-content-center align-items-start d-block d-lg-flex">
                                                                                <div class="mr-lg-3 mb-1 mb-lg-0">
                                                                                    <i class="flaticon-aeroplane font-size-30 text-primary"></i>
                                                                                </div>
                                                                                <div class="text-lg-left">
                                                                                    <h6 class="font-weight-bold font-size-21 text-gray-5 mb-0">18:30</h6>
                                                                                    <div class="font-size-14 text-gray-5">Sat, 21 Sep 19</div>
                                                                                    <span class="font-size-14 text-gray-1">New Delhi, India</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="mx-2 mx-xl-3 flex-content-center flex-column">
                                                                                <h6 class="font-size-14 font-weight-bold text-gray-5 mb-0">02 hrs 45 mins</h6>
                                                                                <div class="width-60 border-top border-primary border-width-2 my-1"></div>
                                                                                <div class="font-size-14 text-gray-1">Non Stop</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="mx-2 mx-xl-3 flex-content-center align-items-start d-block d-lg-flex">
                                                                                <div class="mr-lg-3 mb-1 mb-lg-0">
                                                                                    <i class="d-block rotate-90 flaticon-aeroplane font-size-30 text-primary"></i>
                                                                                </div>
                                                                                <div class="text-lg-left">
                                                                                    <h6 class="font-weight-bold font-size-21 text-gray-5 mb-0">21.15</h6>
                                                                                    <div class="font-size-14 text-gray-5">Sun, 22 Sep 19</div>
                                                                                    <span class="font-size-14 text-gray-1">Bengaluru, India</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </header>
                                                                <!-- End Header -->

                                                                <!-- Body -->
                                                                <div class="card-body py-4 p-md-5">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <ul class="d-block d-md-flex list-group list-group-borderless list-group-horizontal list-group-flush no-gutters">
                                                                                <li class="mr-md-8 mr-lg-10 mb-5 list-group-item py-0">
                                                                                    <div class="font-weight-bold text-dark">Baggage</div>
                                                                                    <span class="text-gray-1">Adult</span>
                                                                                </li>
                                                                                <li class="mr-md-8 mr-lg-10 mb-5 list-group-item py-0">
                                                                                    <div class="font-weight-bold text-dark">Check-in</div>
                                                                                    <span class="text-gray-1">15 Kgs</span>
                                                                                </li>
                                                                                <li class="mr-md-8 mr-lg-10 mb-5 list-group-item py-0">
                                                                                    <div class="font-weight-bold text-dark">Cabin</div>
                                                                                    <span class="text-gray-1">7 Kgs</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-auto">
                                                                            <div class="min-width-250">
                                                                                <h5 class="font-size-17 font-weight-bold text-dark">Fare breakup</h5>
                                                                                <ul class="list-unstyled font-size-1 mb-0 font-size-16">
                                                                                    <li class="d-flex justify-content-between py-2">
                                                                                        <span class="font-weight-medium">Base Fare</span>
                                                                                        <span class="text-secondary">€580,00</span>
                                                                                    </li>

                                                                                    <li class="d-flex justify-content-between py-2">
                                                                                        <span class="font-weight-medium">Surcharges</span>
                                                                                        <span class="text-secondary">€0,00</span>
                                                                                    </li>


                                                                                    <li class="d-flex justify-content-between py-2 font-size-17 font-weight-bold">
                                                                                        <span class="font-weight-bold">Pay Amount</span>
                                                                                        <span class="">€580,00</span>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End Body -->
                                                            </div>
                                                        </div>
                                                        <!-- End On Target Modal -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <div class="hover-bg-gray-1 border rounded-xs py-4 px-4 px-xl-5">
                                        <div class="row align-items-center text-center">
                                            <div class="col-md mb-4 mb-md-0">
                                                <img class="img-fluid" src="../../assets/img/90x90/img2.png" alt="Image-Description">
                                            </div>
                                            <div class="col-md mb-4 mb-md-0">
                                                <div class="flex-content-center d-block d-lg-flex">
                                                    <div class="mr-lg-3 mb-1 mb-lg-0">
                                                        <i class="flaticon-aeroplane font-size-30 text-primary"></i>
                                                    </div>
                                                    <div class="text-lg-left">
                                                        <h6 class="font-weight-bold font-size-21 text-gray-5 mb-0">18:30</h6>
                                                        <span class="font-size-14 text-gray-1">New Delhi</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md mb-4 mb-md-0">
                                                <div class="flex-content-center flex-column">
                                                    <h6 class="font-size-14 font-weight-bold text-gray-5 mb-0">02 hrs 45 mins</h6>
                                                    <div class="width-60 border-top border-primary border-width-2 my-1"></div>
                                                    <div class="font-size-14 text-gray-1">Non Stop</div>
                                                </div>
                                            </div>
                                            <div class="col-md mb-4 mb-md-0">
                                                <div class="flex-content-center d-block d-lg-flex">
                                                    <div class="mr-lg-3 mb-1 mb-lg-0">
                                                        <i class="d-block rotate-90 flaticon-aeroplane font-size-30 text-primary"></i>
                                                    </div>
                                                    <div class="text-lg-left">
                                                        <h6 class="font-weight-bold font-size-21 text-gray-5 mb-0">21.15</h6>
                                                        <span class="font-size-14 text-gray-1">Bengaluru</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2gdot8">
                                                <div class="border-xl-left">
                                                    <div class="ml-xl-5">
                                                        <div class="mb-2">
                                                            <div class="mb-2 text-lh-1dot4">
                                                                <span class="font-weight-bold font-size-22">£4,177</span>
                                                            </div>
                                                            <a href="{{url('booking')}}" class="btn btn-outline-primary border-radius-3 d-flex align-items-center justify-content-center min-height-50 font-weight-bold border-width-2 py-2 w-100">Book Now</a>
                                                        </div>
                                                        <!-- On Target Modal -->
                                                        <a class="font-size-14 text-gray-1 d-block" href="#ontargetModal"
                                                            data-modal-target="#ontargetModal"
                                                            data-modal-effect="fadein">
                                                            Flight Details
                                                        </a>
                                                        <div id="ontargetModal" class="js-modal-window u-modal-window max-width-960"
                                                            data-modal-type="ontarget"
                                                            data-open-effect="fadeIn"
                                                            data-close-effect="fadeOut"
                                                            data-speed="500">
                                                            <div class="card mx-4 mx-xl-0 mb-4 mb-md-0">
                                                                <button type="button" class="border-0 width-50 height-50 bg-primary flex-content-center position-absolute rounded-circle mt-n4 mr-n4 top-0 right-0" aria-label="Close" onclick="Custombox.modal.close();">
                                                                    <i aria-hidden="true" class="flaticon-close text-white font-size-14"></i>
                                                                </button>
                                                                <!-- Header -->
                                                                <header class="card-header bg-light py-4 px-4">
                                                                    <div class="row align-items-center text-center">
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="d-block d-lg-flex flex-horizontal-center">
                                                                                <img class="img-fluid mr-3 mb-3 mb-lg-0" src="../../assets/img/90x90/img2.png" alt="Image-Description">
                                                                                <div class="font-size-14">Spicejet SG 143 | Boeing 737-700</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="mx-2 mx-xl-3 flex-content-center align-items-start d-block d-lg-flex">
                                                                                <div class="mr-lg-3 mb-1 mb-lg-0">
                                                                                    <i class="flaticon-aeroplane font-size-30 text-primary"></i>
                                                                                </div>
                                                                                <div class="text-lg-left">
                                                                                    <h6 class="font-weight-bold font-size-21 text-gray-5 mb-0">18:30</h6>
                                                                                    <div class="font-size-14 text-gray-5">Sat, 21 Sep 19</div>
                                                                                    <span class="font-size-14 text-gray-1">New Delhi, India</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="mx-2 mx-xl-3 flex-content-center flex-column">
                                                                                <h6 class="font-size-14 font-weight-bold text-gray-5 mb-0">02 hrs 45 mins</h6>
                                                                                <div class="width-60 border-top border-primary border-width-2 my-1"></div>
                                                                                <div class="font-size-14 text-gray-1">Non Stop</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="mx-2 mx-xl-3 flex-content-center align-items-start d-block d-lg-flex">
                                                                                <div class="mr-lg-3 mb-1 mb-lg-0">
                                                                                    <i class="d-block rotate-90 flaticon-aeroplane font-size-30 text-primary"></i>
                                                                                </div>
                                                                                <div class="text-lg-left">
                                                                                    <h6 class="font-weight-bold font-size-21 text-gray-5 mb-0">21.15</h6>
                                                                                    <div class="font-size-14 text-gray-5">Sun, 22 Sep 19</div>
                                                                                    <span class="font-size-14 text-gray-1">Bengaluru, India</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </header>
                                                                <!-- End Header -->

                                                                <!-- Body -->
                                                                <div class="card-body py-4 p-md-5">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <ul class="d-block d-md-flex list-group list-group-borderless list-group-horizontal list-group-flush no-gutters">
                                                                                <li class="mr-md-8 mr-lg-10 mb-5 list-group-item py-0">
                                                                                    <div class="font-weight-bold text-dark">Baggage</div>
                                                                                    <span class="text-gray-1">Adult</span>
                                                                                </li>
                                                                                <li class="mr-md-8 mr-lg-10 mb-5 list-group-item py-0">
                                                                                    <div class="font-weight-bold text-dark">Check-in</div>
                                                                                    <span class="text-gray-1">15 Kgs</span>
                                                                                </li>
                                                                                <li class="mr-md-8 mr-lg-10 mb-5 list-group-item py-0">
                                                                                    <div class="font-weight-bold text-dark">Cabin</div>
                                                                                    <span class="text-gray-1">7 Kgs</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-auto">
                                                                            <div class="min-width-250">
                                                                                <h5 class="font-size-17 font-weight-bold text-dark">Fare breakup</h5>
                                                                                <ul class="list-unstyled font-size-1 mb-0 font-size-16">
                                                                                    <li class="d-flex justify-content-between py-2">
                                                                                        <span class="font-weight-medium">Base Fare</span>
                                                                                        <span class="text-secondary">€580,00</span>
                                                                                    </li>

                                                                                    <li class="d-flex justify-content-between py-2">
                                                                                        <span class="font-weight-medium">Surcharges</span>
                                                                                        <span class="text-secondary">€0,00</span>
                                                                                    </li>


                                                                                    <li class="d-flex justify-content-between py-2 font-size-17 font-weight-bold">
                                                                                        <span class="font-weight-bold">Pay Amount</span>
                                                                                        <span class="">€580,00</span>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End Body -->
                                                            </div>
                                                        </div>
                                                        <!-- End On Target Modal -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <div class="hover-bg-gray-1 border rounded-xs py-4 px-4 px-xl-5">
                                        <div class="row align-items-center text-center">
                                            <div class="col-md mb-4 mb-md-0">
                                                <img class="img-fluid" src="../../assets/img/90x90/img3.png" alt="Image-Description">
                                            </div>
                                            <div class="col-md mb-4 mb-md-0">
                                                <div class="flex-content-center d-block d-lg-flex">
                                                    <div class="mr-lg-3 mb-1 mb-lg-0">
                                                        <i class="flaticon-aeroplane font-size-30 text-primary"></i>
                                                    </div>
                                                    <div class="text-lg-left">
                                                        <h6 class="font-weight-bold font-size-21 text-gray-5 mb-0">18:30</h6>
                                                        <span class="font-size-14 text-gray-1">New Delhi</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md mb-4 mb-md-0">
                                                <div class="flex-content-center flex-column">
                                                    <h6 class="font-size-14 font-weight-bold text-gray-5 mb-0">02 hrs 45 mins</h6>
                                                    <div class="width-60 border-top border-primary border-width-2 my-1"></div>
                                                    <div class="font-size-14 text-gray-1">Non Stop</div>
                                                </div>
                                            </div>
                                            <div class="col-md mb-4 mb-md-0">
                                                <div class="flex-content-center d-block d-lg-flex">
                                                    <div class="mr-lg-3 mb-1 mb-lg-0">
                                                        <i class="d-block rotate-90 flaticon-aeroplane font-size-30 text-primary"></i>
                                                    </div>
                                                    <div class="text-lg-left">
                                                        <h6 class="font-weight-bold font-size-21 text-gray-5 mb-0">21.15</h6>
                                                        <span class="font-size-14 text-gray-1">Bengaluru</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2gdot8">
                                                <div class="border-xl-left">
                                                    <div class="ml-xl-5">
                                                        <div class="mb-2">
                                                            <div class="mb-2 text-lh-1dot4">
                                                                <span class="font-weight-bold font-size-22">£4,177</span>
                                                            </div>
                                                            <a href="{{url('booking')}}" class="btn btn-outline-primary border-radius-3 d-flex align-items-center justify-content-center min-height-50 font-weight-bold border-width-2 py-2 w-100">Book Now</a>
                                                        </div>
                                                        <!-- On Target Modal -->
                                                        <a class="font-size-14 text-gray-1 d-block" href="#ontargetModal"
                                                            data-modal-target="#ontargetModal"
                                                            data-modal-effect="fadein">
                                                            Flight Details
                                                        </a>
                                                        <div id="ontargetModal" class="js-modal-window u-modal-window max-width-960"
                                                            data-modal-type="ontarget"
                                                            data-open-effect="fadeIn"
                                                            data-close-effect="fadeOut"
                                                            data-speed="500">
                                                            <div class="card mx-4 mx-xl-0 mb-4 mb-md-0">
                                                                <button type="button" class="border-0 width-50 height-50 bg-primary flex-content-center position-absolute rounded-circle mt-n4 mr-n4 top-0 right-0" aria-label="Close" onclick="Custombox.modal.close();">
                                                                    <i aria-hidden="true" class="flaticon-close text-white font-size-14"></i>
                                                                </button>
                                                                <!-- Header -->
                                                                <header class="card-header bg-light py-4 px-4">
                                                                    <div class="row align-items-center text-center">
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="d-block d-lg-flex flex-horizontal-center">
                                                                                <img class="img-fluid mr-3 mb-3 mb-lg-0" src="../../assets/img/90x90/img1.png" alt="Image-Description">
                                                                                <div class="font-size-14">Spicejet SG 143 | Boeing 737-700</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="mx-2 mx-xl-3 flex-content-center align-items-start d-block d-lg-flex">
                                                                                <div class="mr-lg-3 mb-1 mb-lg-0">
                                                                                    <i class="flaticon-aeroplane font-size-30 text-primary"></i>
                                                                                </div>
                                                                                <div class="text-lg-left">
                                                                                    <h6 class="font-weight-bold font-size-21 text-gray-5 mb-0">18:30</h6>
                                                                                    <div class="font-size-14 text-gray-5">Sat, 21 Sep 19</div>
                                                                                    <span class="font-size-14 text-gray-1">New Delhi, India</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="mx-2 mx-xl-3 flex-content-center flex-column">
                                                                                <h6 class="font-size-14 font-weight-bold text-gray-5 mb-0">02 hrs 45 mins</h6>
                                                                                <div class="width-60 border-top border-primary border-width-2 my-1"></div>
                                                                                <div class="font-size-14 text-gray-1">Non Stop</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="mx-2 mx-xl-3 flex-content-center align-items-start d-block d-lg-flex">
                                                                                <div class="mr-lg-3 mb-1 mb-lg-0">
                                                                                    <i class="d-block rotate-90 flaticon-aeroplane font-size-30 text-primary"></i>
                                                                                </div>
                                                                                <div class="text-lg-left">
                                                                                    <h6 class="font-weight-bold font-size-21 text-gray-5 mb-0">21.15</h6>
                                                                                    <div class="font-size-14 text-gray-5">Sun, 22 Sep 19</div>
                                                                                    <span class="font-size-14 text-gray-1">Bengaluru, India</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </header>
                                                                <!-- End Header -->

                                                                <!-- Body -->
                                                                <div class="card-body py-4 p-md-5">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <ul class="d-block d-md-flex list-group list-group-borderless list-group-horizontal list-group-flush no-gutters">
                                                                                <li class="mr-md-8 mr-lg-10 mb-5 list-group-item py-0">
                                                                                    <div class="font-weight-bold text-dark">Baggage</div>
                                                                                    <span class="text-gray-1">Adult</span>
                                                                                </li>
                                                                                <li class="mr-md-8 mr-lg-10 mb-5 list-group-item py-0">
                                                                                    <div class="font-weight-bold text-dark">Check-in</div>
                                                                                    <span class="text-gray-1">15 Kgs</span>
                                                                                </li>
                                                                                <li class="mr-md-8 mr-lg-10 mb-5 list-group-item py-0">
                                                                                    <div class="font-weight-bold text-dark">Cabin</div>
                                                                                    <span class="text-gray-1">7 Kgs</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-auto">
                                                                            <div class="min-width-250">
                                                                                <h5 class="font-size-17 font-weight-bold text-dark">Fare breakup</h5>
                                                                                <ul class="list-unstyled font-size-1 mb-0 font-size-16">
                                                                                    <li class="d-flex justify-content-between py-2">
                                                                                        <span class="font-weight-medium">Base Fare</span>
                                                                                        <span class="text-secondary">€580,00</span>
                                                                                    </li>

                                                                                    <li class="d-flex justify-content-between py-2">
                                                                                        <span class="font-weight-medium">Surcharges</span>
                                                                                        <span class="text-secondary">€0,00</span>
                                                                                    </li>


                                                                                    <li class="d-flex justify-content-between py-2 font-size-17 font-weight-bold">
                                                                                        <span class="font-weight-bold">Pay Amount</span>
                                                                                        <span class="">€580,00</span>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End Body -->
                                                            </div>
                                                        </div>
                                                        <!-- End On Target Modal -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <div class="hover-bg-gray-1 border rounded-xs py-4 px-4 px-xl-5">
                                        <div class="row align-items-center text-center">
                                            <div class="col-md mb-4 mb-md-0">
                                                <img class="img-fluid" src="../../assets/img/90x90/img4.png" alt="Image-Description">
                                            </div>
                                            <div class="col-md mb-4 mb-md-0">
                                                <div class="flex-content-center d-block d-lg-flex">
                                                    <div class="mr-lg-3 mb-1 mb-lg-0">
                                                        <i class="flaticon-aeroplane font-size-30 text-primary"></i>
                                                    </div>
                                                    <div class="text-lg-left">
                                                        <h6 class="font-weight-bold font-size-21 text-gray-5 mb-0">18:30</h6>
                                                        <span class="font-size-14 text-gray-1">New Delhi</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md mb-4 mb-md-0">
                                                <div class="flex-content-center flex-column">
                                                    <h6 class="font-size-14 font-weight-bold text-gray-5 mb-0">02 hrs 45 mins</h6>
                                                    <div class="width-60 border-top border-primary border-width-2 my-1"></div>
                                                    <div class="font-size-14 text-gray-1">Non Stop</div>
                                                </div>
                                            </div>
                                            <div class="col-md mb-4 mb-md-0">
                                                <div class="flex-content-center d-block d-lg-flex">
                                                    <div class="mr-lg-3 mb-1 mb-lg-0">
                                                        <i class="d-block rotate-90 flaticon-aeroplane font-size-30 text-primary"></i>
                                                    </div>
                                                    <div class="text-lg-left">
                                                        <h6 class="font-weight-bold font-size-21 text-gray-5 mb-0">21.15</h6>
                                                        <span class="font-size-14 text-gray-1">Bengaluru</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2gdot8">
                                                <div class="border-xl-left">
                                                    <div class="ml-xl-5">
                                                        <div class="mb-2">
                                                            <div class="mb-2 text-lh-1dot4">
                                                                <span class="font-weight-bold font-size-22">£4,177</span>
                                                            </div>
                                                            <a href="{{url('booking')}}" class="btn btn-outline-primary border-radius-3 d-flex align-items-center justify-content-center min-height-50 font-weight-bold border-width-2 py-2 w-100">Book Now</a>
                                                        </div>
                                                        <!-- On Target Modal -->
                                                        <a class="font-size-14 text-gray-1 d-block" href="#ontargetModal"
                                                            data-modal-target="#ontargetModal"
                                                            data-modal-effect="fadein">
                                                            Flight Details
                                                        </a>
                                                        <div id="ontargetModal" class="js-modal-window u-modal-window max-width-960"
                                                            data-modal-type="ontarget"
                                                            data-open-effect="fadeIn"
                                                            data-close-effect="fadeOut"
                                                            data-speed="500">
                                                            <div class="card mx-4 mx-xl-0 mb-4 mb-md-0">
                                                                <button type="button" class="border-0 width-50 height-50 bg-primary flex-content-center position-absolute rounded-circle mt-n4 mr-n4 top-0 right-0" aria-label="Close" onclick="Custombox.modal.close();">
                                                                    <i aria-hidden="true" class="flaticon-close text-white font-size-14"></i>
                                                                </button>
                                                                <!-- Header -->
                                                                <header class="card-header bg-light py-4 px-4">
                                                                    <div class="row align-items-center text-center">
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="d-block d-lg-flex flex-horizontal-center">
                                                                                <img class="img-fluid mr-3 mb-3 mb-lg-0" src="../../assets/img/90x90/img1.png" alt="Image-Description">
                                                                                <div class="font-size-14">Spicejet SG 143 | Boeing 737-700</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="mx-2 mx-xl-3 flex-content-center align-items-start d-block d-lg-flex">
                                                                                <div class="mr-lg-3 mb-1 mb-lg-0">
                                                                                    <i class="flaticon-aeroplane font-size-30 text-primary"></i>
                                                                                </div>
                                                                                <div class="text-lg-left">
                                                                                    <h6 class="font-weight-bold font-size-21 text-gray-5 mb-0">18:30</h6>
                                                                                    <div class="font-size-14 text-gray-5">Sat, 21 Sep 19</div>
                                                                                    <span class="font-size-14 text-gray-1">New Delhi, India</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="mx-2 mx-xl-3 flex-content-center flex-column">
                                                                                <h6 class="font-size-14 font-weight-bold text-gray-5 mb-0">02 hrs 45 mins</h6>
                                                                                <div class="width-60 border-top border-primary border-width-2 my-1"></div>
                                                                                <div class="font-size-14 text-gray-1">Non Stop</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="mx-2 mx-xl-3 flex-content-center align-items-start d-block d-lg-flex">
                                                                                <div class="mr-lg-3 mb-1 mb-lg-0">
                                                                                    <i class="d-block rotate-90 flaticon-aeroplane font-size-30 text-primary"></i>
                                                                                </div>
                                                                                <div class="text-lg-left">
                                                                                    <h6 class="font-weight-bold font-size-21 text-gray-5 mb-0">21.15</h6>
                                                                                    <div class="font-size-14 text-gray-5">Sun, 22 Sep 19</div>
                                                                                    <span class="font-size-14 text-gray-1">Bengaluru, India</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </header>
                                                                <!-- End Header -->

                                                                <!-- Body -->
                                                                <div class="card-body py-4 p-md-5">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <ul class="d-block d-md-flex list-group list-group-borderless list-group-horizontal list-group-flush no-gutters">
                                                                                <li class="mr-md-8 mr-lg-10 mb-5 list-group-item py-0">
                                                                                    <div class="font-weight-bold text-dark">Baggage</div>
                                                                                    <span class="text-gray-1">Adult</span>
                                                                                </li>
                                                                                <li class="mr-md-8 mr-lg-10 mb-5 list-group-item py-0">
                                                                                    <div class="font-weight-bold text-dark">Check-in</div>
                                                                                    <span class="text-gray-1">15 Kgs</span>
                                                                                </li>
                                                                                <li class="mr-md-8 mr-lg-10 mb-5 list-group-item py-0">
                                                                                    <div class="font-weight-bold text-dark">Cabin</div>
                                                                                    <span class="text-gray-1">7 Kgs</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-auto">
                                                                            <div class="min-width-250">
                                                                                <h5 class="font-size-17 font-weight-bold text-dark">Fare breakup</h5>
                                                                                <ul class="list-unstyled font-size-1 mb-0 font-size-16">
                                                                                    <li class="d-flex justify-content-between py-2">
                                                                                        <span class="font-weight-medium">Base Fare</span>
                                                                                        <span class="text-secondary">€580,00</span>
                                                                                    </li>

                                                                                    <li class="d-flex justify-content-between py-2">
                                                                                        <span class="font-weight-medium">Surcharges</span>
                                                                                        <span class="text-secondary">€0,00</span>
                                                                                    </li>


                                                                                    <li class="d-flex justify-content-between py-2 font-size-17 font-weight-bold">
                                                                                        <span class="font-weight-bold">Pay Amount</span>
                                                                                        <span class="">€580,00</span>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End Body -->
                                                            </div>
                                                        </div>
                                                        <!-- End On Target Modal -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <div class="hover-bg-gray-1 border rounded-xs py-4 px-4 px-xl-5">
                                        <div class="row align-items-center text-center">
                                            <div class="col-md mb-4 mb-md-0">
                                                <img class="img-fluid" src="../../assets/img/90x90/img5.png" alt="Image-Description">
                                            </div>
                                            <div class="col-md mb-4 mb-md-0">
                                                <div class="flex-content-center d-block d-lg-flex">
                                                    <div class="mr-lg-3 mb-1 mb-lg-0">
                                                        <i class="flaticon-aeroplane font-size-30 text-primary"></i>
                                                    </div>
                                                    <div class="text-lg-left">
                                                        <h6 class="font-weight-bold font-size-21 text-gray-5 mb-0">18:30</h6>
                                                        <span class="font-size-14 text-gray-1">New Delhi</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md mb-4 mb-md-0">
                                                <div class="flex-content-center flex-column">
                                                    <h6 class="font-size-14 font-weight-bold text-gray-5 mb-0">02 hrs 45 mins</h6>
                                                    <div class="width-60 border-top border-primary border-width-2 my-1"></div>
                                                    <div class="font-size-14 text-gray-1">Non Stop</div>
                                                </div>
                                            </div>
                                            <div class="col-md mb-4 mb-md-0">
                                                <div class="flex-content-center d-block d-lg-flex">
                                                    <div class="mr-lg-3 mb-1 mb-lg-0">
                                                        <i class="d-block rotate-90 flaticon-aeroplane font-size-30 text-primary"></i>
                                                    </div>
                                                    <div class="text-lg-left">
                                                        <h6 class="font-weight-bold font-size-21 text-gray-5 mb-0">21.15</h6>
                                                        <span class="font-size-14 text-gray-1">Bengaluru</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2gdot8">
                                                <div class="border-xl-left">
                                                    <div class="ml-xl-5">
                                                        <div class="mb-2">
                                                            <div class="mb-2 text-lh-1dot4">
                                                                <span class="font-weight-bold font-size-22">£4,177</span>
                                                            </div>
                                                            <a href="{{url('booking')}}" class="btn btn-outline-primary border-radius-3 d-flex align-items-center justify-content-center min-height-50 font-weight-bold border-width-2 py-2 w-100">Book Now</a>
                                                        </div>
                                                        <!-- On Target Modal -->
                                                        <a class="font-size-14 text-gray-1 d-block" href="#ontargetModal"
                                                            data-modal-target="#ontargetModal"
                                                            data-modal-effect="fadein">
                                                            Flight Details
                                                        </a>
                                                        <div id="ontargetModal" class="js-modal-window u-modal-window max-width-960"
                                                            data-modal-type="ontarget"
                                                            data-open-effect="fadeIn"
                                                            data-close-effect="fadeOut"
                                                            data-speed="500">
                                                            <div class="card mx-4 mx-xl-0 mb-4 mb-md-0">
                                                                <button type="button" class="border-0 width-50 height-50 bg-primary flex-content-center position-absolute rounded-circle mt-n4 mr-n4 top-0 right-0" aria-label="Close" onclick="Custombox.modal.close();">
                                                                    <i aria-hidden="true" class="flaticon-close text-white font-size-14"></i>
                                                                </button>
                                                                <!-- Header -->
                                                                <header class="card-header bg-light py-4 px-4">
                                                                    <div class="row align-items-center text-center">
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="d-block d-lg-flex flex-horizontal-center">
                                                                                <img class="img-fluid mr-3 mb-3 mb-lg-0" src="../../assets/img/90x90/img1.png" alt="Image-Description">
                                                                                <div class="font-size-14">Spicejet SG 143 | Boeing 737-700</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="mx-2 mx-xl-3 flex-content-center align-items-start d-block d-lg-flex">
                                                                                <div class="mr-lg-3 mb-1 mb-lg-0">
                                                                                    <i class="flaticon-aeroplane font-size-30 text-primary"></i>
                                                                                </div>
                                                                                <div class="text-lg-left">
                                                                                    <h6 class="font-weight-bold font-size-21 text-gray-5 mb-0">18:30</h6>
                                                                                    <div class="font-size-14 text-gray-5">Sat, 21 Sep 19</div>
                                                                                    <span class="font-size-14 text-gray-1">New Delhi, India</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="mx-2 mx-xl-3 flex-content-center flex-column">
                                                                                <h6 class="font-size-14 font-weight-bold text-gray-5 mb-0">02 hrs 45 mins</h6>
                                                                                <div class="width-60 border-top border-primary border-width-2 my-1"></div>
                                                                                <div class="font-size-14 text-gray-1">Non Stop</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="mx-2 mx-xl-3 flex-content-center align-items-start d-block d-lg-flex">
                                                                                <div class="mr-lg-3 mb-1 mb-lg-0">
                                                                                    <i class="d-block rotate-90 flaticon-aeroplane font-size-30 text-primary"></i>
                                                                                </div>
                                                                                <div class="text-lg-left">
                                                                                    <h6 class="font-weight-bold font-size-21 text-gray-5 mb-0">21.15</h6>
                                                                                    <div class="font-size-14 text-gray-5">Sun, 22 Sep 19</div>
                                                                                    <span class="font-size-14 text-gray-1">Bengaluru, India</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </header>
                                                                <!-- End Header -->

                                                                <!-- Body -->
                                                                <div class="card-body py-4 p-md-5">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <ul class="d-block d-md-flex list-group list-group-borderless list-group-horizontal list-group-flush no-gutters">
                                                                                <li class="mr-md-8 mr-lg-10 mb-5 list-group-item py-0">
                                                                                    <div class="font-weight-bold text-dark">Baggage</div>
                                                                                    <span class="text-gray-1">Adult</span>
                                                                                </li>
                                                                                <li class="mr-md-8 mr-lg-10 mb-5 list-group-item py-0">
                                                                                    <div class="font-weight-bold text-dark">Check-in</div>
                                                                                    <span class="text-gray-1">15 Kgs</span>
                                                                                </li>
                                                                                <li class="mr-md-8 mr-lg-10 mb-5 list-group-item py-0">
                                                                                    <div class="font-weight-bold text-dark">Cabin</div>
                                                                                    <span class="text-gray-1">7 Kgs</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-auto">
                                                                            <div class="min-width-250">
                                                                                <h5 class="font-size-17 font-weight-bold text-dark">Fare breakup</h5>
                                                                                <ul class="list-unstyled font-size-1 mb-0 font-size-16">
                                                                                    <li class="d-flex justify-content-between py-2">
                                                                                        <span class="font-weight-medium">Base Fare</span>
                                                                                        <span class="text-secondary">€580,00</span>
                                                                                    </li>

                                                                                    <li class="d-flex justify-content-between py-2">
                                                                                        <span class="font-weight-medium">Surcharges</span>
                                                                                        <span class="text-secondary">€0,00</span>
                                                                                    </li>


                                                                                    <li class="d-flex justify-content-between py-2 font-size-17 font-weight-bold">
                                                                                        <span class="font-weight-bold">Pay Amount</span>
                                                                                        <span class="">€580,00</span>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End Body -->
                                                            </div>
                                                        </div>
                                                        <!-- End On Target Modal -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <div class="hover-bg-gray-1 border rounded-xs py-4 px-4 px-xl-5">
                                        <div class="row align-items-center text-center">
                                            <div class="col-md mb-4 mb-md-0">
                                                <img class="img-fluid" src="../../assets/img/90x90/img1.png" alt="Image-Description">
                                            </div>
                                            <div class="col-md mb-4 mb-md-0">
                                                <div class="flex-content-center d-block d-lg-flex">
                                                    <div class="mr-lg-3 mb-1 mb-lg-0">
                                                        <i class="flaticon-aeroplane font-size-30 text-primary"></i>
                                                    </div>
                                                    <div class="text-lg-left">
                                                        <h6 class="font-weight-bold font-size-21 text-gray-5 mb-0">18:30</h6>
                                                        <span class="font-size-14 text-gray-1">New Delhi</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md mb-4 mb-md-0">
                                                <div class="flex-content-center flex-column">
                                                    <h6 class="font-size-14 font-weight-bold text-gray-5 mb-0">02 hrs 45 mins</h6>
                                                    <div class="width-60 border-top border-primary border-width-2 my-1"></div>
                                                    <div class="font-size-14 text-gray-1">Non Stop</div>
                                                </div>
                                            </div>
                                            <div class="col-md mb-4 mb-md-0">
                                                <div class="flex-content-center d-block d-lg-flex">
                                                    <div class="mr-lg-3 mb-1 mb-lg-0">
                                                        <i class="d-block rotate-90 flaticon-aeroplane font-size-30 text-primary"></i>
                                                    </div>
                                                    <div class="text-lg-left">
                                                        <h6 class="font-weight-bold font-size-21 text-gray-5 mb-0">21.15</h6>
                                                        <span class="font-size-14 text-gray-1">Bengaluru</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2gdot8">
                                                <div class="border-xl-left">
                                                    <div class="ml-xl-5">
                                                        <div class="mb-2">
                                                            <div class="mb-2 text-lh-1dot4">
                                                                <span class="font-weight-bold font-size-22">£4,177</span>
                                                            </div>
                                                            <a href="{{url('booking')}}" class="btn btn-outline-primary border-radius-3 d-flex align-items-center justify-content-center min-height-50 font-weight-bold border-width-2 py-2 w-100">Book Now</a>
                                                        </div>
                                                        <!-- On Target Modal -->
                                                        <a class="font-size-14 text-gray-1 d-block" href="#ontargetModal"
                                                            data-modal-target="#ontargetModal"
                                                            data-modal-effect="fadein">
                                                            Flight Details
                                                        </a>
                                                        <div id="ontargetModal" class="js-modal-window u-modal-window max-width-960"
                                                            data-modal-type="ontarget"
                                                            data-open-effect="fadeIn"
                                                            data-close-effect="fadeOut"
                                                            data-speed="500">
                                                            <div class="card mx-4 mx-xl-0 mb-4 mb-md-0">
                                                                <button type="button" class="border-0 width-50 height-50 bg-primary flex-content-center position-absolute rounded-circle mt-n4 mr-n4 top-0 right-0" aria-label="Close" onclick="Custombox.modal.close();">
                                                                    <i aria-hidden="true" class="flaticon-close text-white font-size-14"></i>
                                                                </button>
                                                                <!-- Header -->
                                                                <header class="card-header bg-light py-4 px-4">
                                                                    <div class="row align-items-center text-center">
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="d-block d-lg-flex flex-horizontal-center">
                                                                                <img class="img-fluid mr-3 mb-3 mb-lg-0" src="../../assets/img/90x90/img1.png" alt="Image-Description">
                                                                                <div class="font-size-14">Spicejet SG 143 | Boeing 737-700</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="mx-2 mx-xl-3 flex-content-center align-items-start d-block d-lg-flex">
                                                                                <div class="mr-lg-3 mb-1 mb-lg-0">
                                                                                    <i class="flaticon-aeroplane font-size-30 text-primary"></i>
                                                                                </div>
                                                                                <div class="text-lg-left">
                                                                                    <h6 class="font-weight-bold font-size-21 text-gray-5 mb-0">18:30</h6>
                                                                                    <div class="font-size-14 text-gray-5">Sat, 21 Sep 19</div>
                                                                                    <span class="font-size-14 text-gray-1">New Delhi, India</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="mx-2 mx-xl-3 flex-content-center flex-column">
                                                                                <h6 class="font-size-14 font-weight-bold text-gray-5 mb-0">02 hrs 45 mins</h6>
                                                                                <div class="width-60 border-top border-primary border-width-2 my-1"></div>
                                                                                <div class="font-size-14 text-gray-1">Non Stop</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="mx-2 mx-xl-3 flex-content-center align-items-start d-block d-lg-flex">
                                                                                <div class="mr-lg-3 mb-1 mb-lg-0">
                                                                                    <i class="d-block rotate-90 flaticon-aeroplane font-size-30 text-primary"></i>
                                                                                </div>
                                                                                <div class="text-lg-left">
                                                                                    <h6 class="font-weight-bold font-size-21 text-gray-5 mb-0">21.15</h6>
                                                                                    <div class="font-size-14 text-gray-5">Sun, 22 Sep 19</div>
                                                                                    <span class="font-size-14 text-gray-1">Bengaluru, India</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </header>
                                                                <!-- End Header -->

                                                                <!-- Body -->
                                                                <div class="card-body py-4 p-md-5">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <ul class="d-block d-md-flex list-group list-group-borderless list-group-horizontal list-group-flush no-gutters">
                                                                                <li class="mr-md-8 mr-lg-10 mb-5 list-group-item py-0">
                                                                                    <div class="font-weight-bold text-dark">Baggage</div>
                                                                                    <span class="text-gray-1">Adult</span>
                                                                                </li>
                                                                                <li class="mr-md-8 mr-lg-10 mb-5 list-group-item py-0">
                                                                                    <div class="font-weight-bold text-dark">Check-in</div>
                                                                                    <span class="text-gray-1">15 Kgs</span>
                                                                                </li>
                                                                                <li class="mr-md-8 mr-lg-10 mb-5 list-group-item py-0">
                                                                                    <div class="font-weight-bold text-dark">Cabin</div>
                                                                                    <span class="text-gray-1">7 Kgs</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-auto">
                                                                            <div class="min-width-250">
                                                                                <h5 class="font-size-17 font-weight-bold text-dark">Fare breakup</h5>
                                                                                <ul class="list-unstyled font-size-1 mb-0 font-size-16">
                                                                                    <li class="d-flex justify-content-between py-2">
                                                                                        <span class="font-weight-medium">Base Fare</span>
                                                                                        <span class="text-secondary">€580,00</span>
                                                                                    </li>

                                                                                    <li class="d-flex justify-content-between py-2">
                                                                                        <span class="font-weight-medium">Surcharges</span>
                                                                                        <span class="text-secondary">€0,00</span>
                                                                                    </li>


                                                                                    <li class="d-flex justify-content-between py-2 font-size-17 font-weight-bold">
                                                                                        <span class="font-weight-bold">Pay Amount</span>
                                                                                        <span class="">€580,00</span>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End Body -->
                                                            </div>
                                                        </div>
                                                        <!-- End On Target Modal -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show active" id="pills-one-example1" role="tabpanel" aria-labelledby="pills-one-example1-tab" data-target-group="groups">
                                <div class="row">
                                    <div class="col-md-6 col-xl-4">
                                        <div class="mb-5">
                                            <div class="card w-100 shadow-hover-3">
                                                <a href="{{url('booking')}}" class="d-block mb-0 mx-1 mt-1 p-3" tabindex="0">
                                                    <img class="card-img-top" src="../../assets/img/260x200/img1.jpg" alt="Image Description">
                                                </a>
                                                <div class="card-body px-3 pt-0 pb-3 my-0 mx-1">
                                                    <div class="row">
                                                        <div class="col-7">
                                                            <a href="{{url('booking')}}" class="card-title text-dark font-size-17 font-weight-bold" tabindex="0">Paris</a>
                                                            <span class="font-weight-normal font-size-14 d-block text-color-1">Oneway flight</span>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="text-right">
                                                                <h6 class="font-weight-bold font-size-17 text-gray-3 mb-0">£350.00</h6>
                                                                <span class="font-weight-normal font-size-14 d-block text-color-1">avg/person</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 pb-1">
                                                    <div class="border-bottom pb-3 mb-3">
                                                        <div class="px-3">
                                                            <div class="d-flex mx-1">
                                                                <i class="flaticon-aeroplane font-size-30 text-primary mr-3"></i>
                                                                <div class="d-flex flex-column">
                                                                    <span class="font-weight-normal text-gray-5">Take off</span>
                                                                    <span class="font-size-14 text-gray-1">Wed Nov 19 7:50 AM</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="border-bottom pb-3 mb-3">
                                                        <div class="px-3">
                                                            <div class="d-flex mx-1">
                                                                <i class="d-block rotate-90 flaticon-aeroplane font-size-30 text-primary mr-3"></i>
                                                                <div class="d-flex flex-column">
                                                                    <span class="font-weight-normal text-gray-5">Landing</span>
                                                                    <span class="font-size-14 text-gray-1">Wed Nov 29 7:50 AM</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-center font-size-14 text-primary mb-3">
                                                        <!-- On Target Modal -->
                                                        <a class="font-size-14 text-gray-1 d-block" href="#ontargetModal"
                                                            data-modal-target="#ontargetModal"
                                                            data-modal-effect="fadein">
                                                            Flight Details
                                                        </a>
                                                        <div id="ontargetModal" class="js-modal-window u-modal-window max-width-960"
                                                            data-modal-type="ontarget"
                                                            data-open-effect="fadeIn"
                                                            data-close-effect="fadeOut"
                                                            data-speed="500">
                                                            <div class="card mx-4 mx-xl-0 mb-4 mb-md-0">
                                                                <button type="button" class="border-0 width-50 height-50 bg-primary flex-content-center position-absolute rounded-circle mt-n4 mr-n4 top-0 right-0" aria-label="Close" onclick="Custombox.modal.close();">
                                                                    <i aria-hidden="true" class="flaticon-close text-white font-size-14"></i>
                                                                </button>
                                                                <!-- Header -->
                                                                <header class="card-header bg-light py-4 px-4">
                                                                    <div class="row align-items-center text-center">
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="d-block d-lg-flex flex-horizontal-center">
                                                                                <img class="img-fluid mr-3 mb-3 mb-lg-0" src="../../assets/img/90x90/img1.png" alt="Image-Description">
                                                                                <div class="font-size-14">Spicejet SG 143 | Boeing 737-700</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="mx-2 mx-xl-3 flex-content-center align-items-start d-block d-lg-flex">
                                                                                <div class="mr-lg-3 mb-1 mb-lg-0">
                                                                                    <i class="flaticon-aeroplane font-size-30 text-primary"></i>
                                                                                </div>
                                                                                <div class="text-lg-left">
                                                                                    <h6 class="font-weight-bold font-size-21 text-gray-5 mb-0">18:30</h6>
                                                                                    <div class="font-size-14 text-gray-5">Sat, 21 Sep 19</div>
                                                                                    <span class="font-size-14 text-gray-1">New Delhi, India</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="mx-2 mx-xl-3 flex-content-center flex-column">
                                                                                <h6 class="font-size-14 font-weight-bold text-gray-5 mb-0">02 hrs 45 mins</h6>
                                                                                <div class="width-60 border-top border-primary border-width-2 my-1"></div>
                                                                                <div class="font-size-14 text-gray-1">Non Stop</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="mx-2 mx-xl-3 flex-content-center align-items-start d-block d-lg-flex">
                                                                                <div class="mr-lg-3 mb-1 mb-lg-0">
                                                                                    <i class="d-block rotate-90 flaticon-aeroplane font-size-30 text-primary"></i>
                                                                                </div>
                                                                                <div class="text-lg-left">
                                                                                    <h6 class="font-weight-bold font-size-21 text-gray-5 mb-0">21.15</h6>
                                                                                    <div class="font-size-14 text-gray-5">Sun, 22 Sep 19</div>
                                                                                    <span class="font-size-14 text-gray-1">Bengaluru, India</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </header>
                                                                <!-- End Header -->

                                                                <!-- Body -->
                                                                <div class="card-body py-4 p-md-5">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <ul class="d-block d-md-flex list-group list-group-borderless list-group-horizontal list-group-flush no-gutters">
                                                                                <li class="mr-md-8 mr-lg-10 mb-5 list-group-item py-0">
                                                                                    <div class="font-weight-bold text-dark">Baggage</div>
                                                                                    <span class="text-gray-1">Adult</span>
                                                                                </li>
                                                                                <li class="mr-md-8 mr-lg-10 mb-5 list-group-item py-0">
                                                                                    <div class="font-weight-bold text-dark">Check-in</div>
                                                                                    <span class="text-gray-1">15 Kgs</span>
                                                                                </li>
                                                                                <li class="mr-md-8 mr-lg-10 mb-5 list-group-item py-0">
                                                                                    <div class="font-weight-bold text-dark">Cabin</div>
                                                                                    <span class="text-gray-1">7 Kgs</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-auto">
                                                                            <div class="min-width-250">
                                                                                <h5 class="font-size-17 font-weight-bold text-dark">Fare breakup</h5>
                                                                                <ul class="list-unstyled font-size-1 mb-0 font-size-16">
                                                                                    <li class="d-flex justify-content-between py-2">
                                                                                        <span class="font-weight-medium">Base Fare</span>
                                                                                        <span class="text-secondary">€580,00</span>
                                                                                    </li>

                                                                                    <li class="d-flex justify-content-between py-2">
                                                                                        <span class="font-weight-medium">Surcharges</span>
                                                                                        <span class="text-secondary">€0,00</span>
                                                                                    </li>


                                                                                    <li class="d-flex justify-content-between py-2 font-size-17 font-weight-bold">
                                                                                        <span class="font-weight-bold">Pay Amount</span>
                                                                                        <span class="">€580,00</span>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End Body -->
                                                            </div>
                                                        </div>
                                                        <!-- End On Target Modal -->
                                                    </div>
                                                    <div class="d-flex justify-content-center">
                                                        <a href="{{url('booking')}}" class="btn btn-blue-1 font-size-14 width-260 text-lh-lg transition-3d-hover py-1">Choose</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-xl-4">
                                        <div class="mb-5">
                                            <div class="card w-100 shadow-hover-3">
                                                <a href="{{url('booking')}}" class="d-block mb-0 mx-1 mt-1 p-3" tabindex="0">
                                                    <img class="card-img-top" src="../../assets/img/260x200/img2.jpg" alt="Image Description">
                                                </a>
                                                <div class="card-body px-3 pt-0 pb-3 my-0 mx-1">
                                                    <div class="row">
                                                        <div class="col-7">
                                                            <a href="{{url('booking')}}" class="card-title text-dark font-size-17 font-weight-bold" tabindex="0">Paris</a>
                                                            <span class="font-weight-normal font-size-14 d-block text-color-1">Oneway flight</span>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="text-right">
                                                                <h6 class="font-weight-bold font-size-17 text-gray-3 mb-0">£350.00</h6>
                                                                <span class="font-weight-normal font-size-14 d-block text-color-1">avg/person</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 pb-1">
                                                    <div class="border-bottom pb-3 mb-3">
                                                        <div class="px-3">
                                                            <div class="d-flex mx-1">
                                                                <i class="flaticon-aeroplane font-size-30 text-primary mr-3"></i>
                                                                <div class="d-flex flex-column">
                                                                    <span class="font-weight-normal text-gray-5">Take off</span>
                                                                    <span class="font-size-14 text-gray-1">Wed Nov 19 7:50 AM</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="border-bottom pb-3 mb-3">
                                                        <div class="px-3">
                                                            <div class="d-flex mx-1">
                                                                <i class="d-block rotate-90 flaticon-aeroplane font-size-30 text-primary mr-3"></i>
                                                                <div class="d-flex flex-column">
                                                                    <span class="font-weight-normal text-gray-5">Landing</span>
                                                                    <span class="font-size-14 text-gray-1">Wed Nov 29 7:50 AM</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-center font-size-14 text-primary mb-3">
                                                        <!-- On Target Modal -->
                                                        <a class="font-size-14 text-gray-1 d-block" href="#ontargetModal"
                                                            data-modal-target="#ontargetModal"
                                                            data-modal-effect="fadein">
                                                            Flight Details
                                                        </a>
                                                        <div id="ontargetModal" class="js-modal-window u-modal-window max-width-960"
                                                            data-modal-type="ontarget"
                                                            data-open-effect="fadeIn"
                                                            data-close-effect="fadeOut"
                                                            data-speed="500">
                                                            <div class="card mx-4 mx-xl-0 mb-4 mb-md-0">
                                                                <button type="button" class="border-0 width-50 height-50 bg-primary flex-content-center position-absolute rounded-circle mt-n4 mr-n4 top-0 right-0" aria-label="Close" onclick="Custombox.modal.close();">
                                                                    <i aria-hidden="true" class="flaticon-close text-white font-size-14"></i>
                                                                </button>
                                                                <!-- Header -->
                                                                <header class="card-header bg-light py-4 px-4">
                                                                    <div class="row align-items-center text-center">
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="d-block d-lg-flex flex-horizontal-center">
                                                                                <img class="img-fluid mr-3 mb-3 mb-lg-0" src="../../assets/img/90x90/img1.png" alt="Image-Description">
                                                                                <div class="font-size-14">Spicejet SG 143 | Boeing 737-700</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="mx-2 mx-xl-3 flex-content-center align-items-start d-block d-lg-flex">
                                                                                <div class="mr-lg-3 mb-1 mb-lg-0">
                                                                                    <i class="flaticon-aeroplane font-size-30 text-primary"></i>
                                                                                </div>
                                                                                <div class="text-lg-left">
                                                                                    <h6 class="font-weight-bold font-size-21 text-gray-5 mb-0">18:30</h6>
                                                                                    <div class="font-size-14 text-gray-5">Sat, 21 Sep 19</div>
                                                                                    <span class="font-size-14 text-gray-1">New Delhi, India</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="mx-2 mx-xl-3 flex-content-center flex-column">
                                                                                <h6 class="font-size-14 font-weight-bold text-gray-5 mb-0">02 hrs 45 mins</h6>
                                                                                <div class="width-60 border-top border-primary border-width-2 my-1"></div>
                                                                                <div class="font-size-14 text-gray-1">Non Stop</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="mx-2 mx-xl-3 flex-content-center align-items-start d-block d-lg-flex">
                                                                                <div class="mr-lg-3 mb-1 mb-lg-0">
                                                                                    <i class="d-block rotate-90 flaticon-aeroplane font-size-30 text-primary"></i>
                                                                                </div>
                                                                                <div class="text-lg-left">
                                                                                    <h6 class="font-weight-bold font-size-21 text-gray-5 mb-0">21.15</h6>
                                                                                    <div class="font-size-14 text-gray-5">Sun, 22 Sep 19</div>
                                                                                    <span class="font-size-14 text-gray-1">Bengaluru, India</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </header>
                                                                <!-- End Header -->

                                                                <!-- Body -->
                                                                <div class="card-body py-4 p-md-5">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <ul class="d-block d-md-flex list-group list-group-borderless list-group-horizontal list-group-flush no-gutters">
                                                                                <li class="mr-md-8 mr-lg-10 mb-5 list-group-item py-0">
                                                                                    <div class="font-weight-bold text-dark">Baggage</div>
                                                                                    <span class="text-gray-1">Adult</span>
                                                                                </li>
                                                                                <li class="mr-md-8 mr-lg-10 mb-5 list-group-item py-0">
                                                                                    <div class="font-weight-bold text-dark">Check-in</div>
                                                                                    <span class="text-gray-1">15 Kgs</span>
                                                                                </li>
                                                                                <li class="mr-md-8 mr-lg-10 mb-5 list-group-item py-0">
                                                                                    <div class="font-weight-bold text-dark">Cabin</div>
                                                                                    <span class="text-gray-1">7 Kgs</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-auto">
                                                                            <div class="min-width-250">
                                                                                <h5 class="font-size-17 font-weight-bold text-dark">Fare breakup</h5>
                                                                                <ul class="list-unstyled font-size-1 mb-0 font-size-16">
                                                                                    <li class="d-flex justify-content-between py-2">
                                                                                        <span class="font-weight-medium">Base Fare</span>
                                                                                        <span class="text-secondary">€580,00</span>
                                                                                    </li>

                                                                                    <li class="d-flex justify-content-between py-2">
                                                                                        <span class="font-weight-medium">Surcharges</span>
                                                                                        <span class="text-secondary">€0,00</span>
                                                                                    </li>


                                                                                    <li class="d-flex justify-content-between py-2 font-size-17 font-weight-bold">
                                                                                        <span class="font-weight-bold">Pay Amount</span>
                                                                                        <span class="">€580,00</span>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End Body -->
                                                            </div>
                                                        </div>
                                                        <!-- End On Target Modal -->
                                                    </div>
                                                    <div class="d-flex justify-content-center">
                                                        <a href="{{url('booking')}}" class="btn btn-blue-1 font-size-14 width-260 text-lh-lg transition-3d-hover py-1">Choose</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="mb-5">
                                            <div class="card w-100 shadow-hover-3">
                                                <a href="{{url('booking')}}" class="d-block mb-0 mx-1 mt-1 p-3" tabindex="0">
                                                    <img class="card-img-top" src="../../assets/img/260x200/img3.jpg" alt="Image Description">
                                                </a>
                                                <div class="card-body px-3 pt-0 pb-3 my-0 mx-1">
                                                    <div class="row">
                                                        <div class="col-7">
                                                            <a href="{{url('booking')}}" class="card-title text-dark font-size-17 font-weight-bold" tabindex="0">Paris</a>
                                                            <span class="font-weight-normal font-size-14 d-block text-color-1">Oneway flight</span>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="text-right">
                                                                <h6 class="font-weight-bold font-size-17 text-gray-3 mb-0">£350.00</h6>
                                                                <span class="font-weight-normal font-size-14 d-block text-color-1">avg/person</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 pb-1">
                                                    <div class="border-bottom pb-3 mb-3">
                                                        <div class="px-3">
                                                            <div class="d-flex mx-1">
                                                                <i class="flaticon-aeroplane font-size-30 text-primary mr-3"></i>
                                                                <div class="d-flex flex-column">
                                                                    <span class="font-weight-normal text-gray-5">Take off</span>
                                                                    <span class="font-size-14 text-gray-1">Wed Nov 19 7:50 AM</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="border-bottom pb-3 mb-3">
                                                        <div class="px-3">
                                                            <div class="d-flex mx-1">
                                                                <i class="d-block rotate-90 flaticon-aeroplane font-size-30 text-primary mr-3"></i>
                                                                <div class="d-flex flex-column">
                                                                    <span class="font-weight-normal text-gray-5">Landing</span>
                                                                    <span class="font-size-14 text-gray-1">Wed Nov 29 7:50 AM</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-center font-size-14 text-primary mb-3">
                                                        <!-- On Target Modal -->
                                                        <a class="font-size-14 text-gray-1 d-block" href="#ontargetModal"
                                                            data-modal-target="#ontargetModal"
                                                            data-modal-effect="fadein">
                                                            Flight Details
                                                        </a>
                                                        <div id="ontargetModal" class="js-modal-window u-modal-window max-width-960"
                                                            data-modal-type="ontarget"
                                                            data-open-effect="fadeIn"
                                                            data-close-effect="fadeOut"
                                                            data-speed="500">
                                                            <div class="card mx-4 mx-xl-0 mb-4 mb-md-0">
                                                                <button type="button" class="border-0 width-50 height-50 bg-primary flex-content-center position-absolute rounded-circle mt-n4 mr-n4 top-0 right-0" aria-label="Close" onclick="Custombox.modal.close();">
                                                                    <i aria-hidden="true" class="flaticon-close text-white font-size-14"></i>
                                                                </button>
                                                                <!-- Header -->
                                                                <header class="card-header bg-light py-4 px-4">
                                                                    <div class="row align-items-center text-center">
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="d-block d-lg-flex flex-horizontal-center">
                                                                                <img class="img-fluid mr-3 mb-3 mb-lg-0" src="../../assets/img/90x90/img1.png" alt="Image-Description">
                                                                                <div class="font-size-14">Spicejet SG 143 | Boeing 737-700</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="mx-2 mx-xl-3 flex-content-center align-items-start d-block d-lg-flex">
                                                                                <div class="mr-lg-3 mb-1 mb-lg-0">
                                                                                    <i class="flaticon-aeroplane font-size-30 text-primary"></i>
                                                                                </div>
                                                                                <div class="text-lg-left">
                                                                                    <h6 class="font-weight-bold font-size-21 text-gray-5 mb-0">18:30</h6>
                                                                                    <div class="font-size-14 text-gray-5">Sat, 21 Sep 19</div>
                                                                                    <span class="font-size-14 text-gray-1">New Delhi, India</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="mx-2 mx-xl-3 flex-content-center flex-column">
                                                                                <h6 class="font-size-14 font-weight-bold text-gray-5 mb-0">02 hrs 45 mins</h6>
                                                                                <div class="width-60 border-top border-primary border-width-2 my-1"></div>
                                                                                <div class="font-size-14 text-gray-1">Non Stop</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="mx-2 mx-xl-3 flex-content-center align-items-start d-block d-lg-flex">
                                                                                <div class="mr-lg-3 mb-1 mb-lg-0">
                                                                                    <i class="d-block rotate-90 flaticon-aeroplane font-size-30 text-primary"></i>
                                                                                </div>
                                                                                <div class="text-lg-left">
                                                                                    <h6 class="font-weight-bold font-size-21 text-gray-5 mb-0">21.15</h6>
                                                                                    <div class="font-size-14 text-gray-5">Sun, 22 Sep 19</div>
                                                                                    <span class="font-size-14 text-gray-1">Bengaluru, India</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </header>
                                                                <!-- End Header -->

                                                                <!-- Body -->
                                                                <div class="card-body py-4 p-md-5">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <ul class="d-block d-md-flex list-group list-group-borderless list-group-horizontal list-group-flush no-gutters">
                                                                                <li class="mr-md-8 mr-lg-10 mb-5 list-group-item py-0">
                                                                                    <div class="font-weight-bold text-dark">Baggage</div>
                                                                                    <span class="text-gray-1">Adult</span>
                                                                                </li>
                                                                                <li class="mr-md-8 mr-lg-10 mb-5 list-group-item py-0">
                                                                                    <div class="font-weight-bold text-dark">Check-in</div>
                                                                                    <span class="text-gray-1">15 Kgs</span>
                                                                                </li>
                                                                                <li class="mr-md-8 mr-lg-10 mb-5 list-group-item py-0">
                                                                                    <div class="font-weight-bold text-dark">Cabin</div>
                                                                                    <span class="text-gray-1">7 Kgs</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-auto">
                                                                            <div class="min-width-250">
                                                                                <h5 class="font-size-17 font-weight-bold text-dark">Fare breakup</h5>
                                                                                <ul class="list-unstyled font-size-1 mb-0 font-size-16">
                                                                                    <li class="d-flex justify-content-between py-2">
                                                                                        <span class="font-weight-medium">Base Fare</span>
                                                                                        <span class="text-secondary">€580,00</span>
                                                                                    </li>

                                                                                    <li class="d-flex justify-content-between py-2">
                                                                                        <span class="font-weight-medium">Surcharges</span>
                                                                                        <span class="text-secondary">€0,00</span>
                                                                                    </li>


                                                                                    <li class="d-flex justify-content-between py-2 font-size-17 font-weight-bold">
                                                                                        <span class="font-weight-bold">Pay Amount</span>
                                                                                        <span class="">€580,00</span>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End Body -->
                                                            </div>
                                                        </div>
                                                        <!-- End On Target Modal -->
                                                    </div>
                                                    <div class="d-flex justify-content-center">
                                                        <a href="{{url('booking')}}" class="btn btn-blue-1 font-size-14 width-260 text-lh-lg transition-3d-hover py-1">Choose</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="mb-5">
                                            <div class="card w-100 shadow-hover-3">
                                                <a href="{{url('booking')}}" class="d-block mb-0 mx-1 mt-1 p-3" tabindex="0">
                                                    <img class="card-img-top" src="../../assets/img/260x200/img1.jpg" alt="Image Description">
                                                </a>
                                                <div class="card-body px-3 pt-0 pb-3 my-0 mx-1">
                                                    <div class="row">
                                                        <div class="col-7">
                                                            <a href="{{url('booking')}}" class="card-title text-dark font-size-17 font-weight-bold" tabindex="0">Paris</a>
                                                            <span class="font-weight-normal font-size-14 d-block text-color-1">Oneway flight</span>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="text-right">
                                                                <h6 class="font-weight-bold font-size-17 text-gray-3 mb-0">£350.00</h6>
                                                                <span class="font-weight-normal font-size-14 d-block text-color-1">avg/person</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 pb-1">
                                                    <div class="border-bottom pb-3 mb-3">
                                                        <div class="px-3">
                                                            <div class="d-flex mx-1">
                                                                <i class="flaticon-aeroplane font-size-30 text-primary mr-3"></i>
                                                                <div class="d-flex flex-column">
                                                                    <span class="font-weight-normal text-gray-5">Take off</span>
                                                                    <span class="font-size-14 text-gray-1">Wed Nov 19 7:50 AM</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="border-bottom pb-3 mb-3">
                                                        <div class="px-3">
                                                            <div class="d-flex mx-1">
                                                                <i class="d-block rotate-90 flaticon-aeroplane font-size-30 text-primary mr-3"></i>
                                                                <div class="d-flex flex-column">
                                                                    <span class="font-weight-normal text-gray-5">Landing</span>
                                                                    <span class="font-size-14 text-gray-1">Wed Nov 29 7:50 AM</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-center font-size-14 text-primary mb-3">
                                                        <!-- On Target Modal -->
                                                        <a class="font-size-14 text-gray-1 d-block" href="#ontargetModal"
                                                            data-modal-target="#ontargetModal"
                                                            data-modal-effect="fadein">
                                                            Flight Details
                                                        </a>
                                                        <div id="ontargetModal" class="js-modal-window u-modal-window max-width-960"
                                                            data-modal-type="ontarget"
                                                            data-open-effect="fadeIn"
                                                            data-close-effect="fadeOut"
                                                            data-speed="500">
                                                            <div class="card mx-4 mx-xl-0 mb-4 mb-md-0">
                                                                <button type="button" class="border-0 width-50 height-50 bg-primary flex-content-center position-absolute rounded-circle mt-n4 mr-n4 top-0 right-0" aria-label="Close" onclick="Custombox.modal.close();">
                                                                    <i aria-hidden="true" class="flaticon-close text-white font-size-14"></i>
                                                                </button>
                                                                <!-- Header -->
                                                                <header class="card-header bg-light py-4 px-4">
                                                                    <div class="row align-items-center text-center">
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="d-block d-lg-flex flex-horizontal-center">
                                                                                <img class="img-fluid mr-3 mb-3 mb-lg-0" src="../../assets/img/90x90/img1.png" alt="Image-Description">
                                                                                <div class="font-size-14">Spicejet SG 143 | Boeing 737-700</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="mx-2 mx-xl-3 flex-content-center align-items-start d-block d-lg-flex">
                                                                                <div class="mr-lg-3 mb-1 mb-lg-0">
                                                                                    <i class="flaticon-aeroplane font-size-30 text-primary"></i>
                                                                                </div>
                                                                                <div class="text-lg-left">
                                                                                    <h6 class="font-weight-bold font-size-21 text-gray-5 mb-0">18:30</h6>
                                                                                    <div class="font-size-14 text-gray-5">Sat, 21 Sep 19</div>
                                                                                    <span class="font-size-14 text-gray-1">New Delhi, India</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="mx-2 mx-xl-3 flex-content-center flex-column">
                                                                                <h6 class="font-size-14 font-weight-bold text-gray-5 mb-0">02 hrs 45 mins</h6>
                                                                                <div class="width-60 border-top border-primary border-width-2 my-1"></div>
                                                                                <div class="font-size-14 text-gray-1">Non Stop</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="mx-2 mx-xl-3 flex-content-center align-items-start d-block d-lg-flex">
                                                                                <div class="mr-lg-3 mb-1 mb-lg-0">
                                                                                    <i class="d-block rotate-90 flaticon-aeroplane font-size-30 text-primary"></i>
                                                                                </div>
                                                                                <div class="text-lg-left">
                                                                                    <h6 class="font-weight-bold font-size-21 text-gray-5 mb-0">21.15</h6>
                                                                                    <div class="font-size-14 text-gray-5">Sun, 22 Sep 19</div>
                                                                                    <span class="font-size-14 text-gray-1">Bengaluru, India</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </header>
                                                                <!-- End Header -->

                                                                <!-- Body -->
                                                                <div class="card-body py-4 p-md-5">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <ul class="d-block d-md-flex list-group list-group-borderless list-group-horizontal list-group-flush no-gutters">
                                                                                <li class="mr-md-8 mr-lg-10 mb-5 list-group-item py-0">
                                                                                    <div class="font-weight-bold text-dark">Baggage</div>
                                                                                    <span class="text-gray-1">Adult</span>
                                                                                </li>
                                                                                <li class="mr-md-8 mr-lg-10 mb-5 list-group-item py-0">
                                                                                    <div class="font-weight-bold text-dark">Check-in</div>
                                                                                    <span class="text-gray-1">15 Kgs</span>
                                                                                </li>
                                                                                <li class="mr-md-8 mr-lg-10 mb-5 list-group-item py-0">
                                                                                    <div class="font-weight-bold text-dark">Cabin</div>
                                                                                    <span class="text-gray-1">7 Kgs</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-auto">
                                                                            <div class="min-width-250">
                                                                                <h5 class="font-size-17 font-weight-bold text-dark">Fare breakup</h5>
                                                                                <ul class="list-unstyled font-size-1 mb-0 font-size-16">
                                                                                    <li class="d-flex justify-content-between py-2">
                                                                                        <span class="font-weight-medium">Base Fare</span>
                                                                                        <span class="text-secondary">€580,00</span>
                                                                                    </li>

                                                                                    <li class="d-flex justify-content-between py-2">
                                                                                        <span class="font-weight-medium">Surcharges</span>
                                                                                        <span class="text-secondary">€0,00</span>
                                                                                    </li>


                                                                                    <li class="d-flex justify-content-between py-2 font-size-17 font-weight-bold">
                                                                                        <span class="font-weight-bold">Pay Amount</span>
                                                                                        <span class="">€580,00</span>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End Body -->
                                                            </div>
                                                        </div>
                                                        <!-- End On Target Modal -->
                                                    </div>
                                                    <div class="d-flex justify-content-center">
                                                        <a href="{{url('booking')}}" class="btn btn-blue-1 font-size-14 width-260 text-lh-lg transition-3d-hover py-1">Choose</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="mb-5">
                                            <div class="card w-100 shadow-hover-3">
                                                <a href="{{url('booking')}}" class="d-block mb-0 mx-1 mt-1 p-3" tabindex="0">
                                                    <img class="card-img-top" src="../../assets/img/260x200/img2.jpg" alt="Image Description">
                                                </a>
                                                <div class="card-body px-3 pt-0 pb-3 my-0 mx-1">
                                                    <div class="row">
                                                        <div class="col-7">
                                                            <a href="{{url('booking')}}" class="card-title text-dark font-size-17 font-weight-bold" tabindex="0">Paris</a>
                                                            <span class="font-weight-normal font-size-14 d-block text-color-1">Oneway flight</span>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="text-right">
                                                                <h6 class="font-weight-bold font-size-17 text-gray-3 mb-0">£350.00</h6>
                                                                <span class="font-weight-normal font-size-14 d-block text-color-1">avg/person</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 pb-1">
                                                    <div class="border-bottom pb-3 mb-3">
                                                        <div class="px-3">
                                                            <div class="d-flex mx-1">
                                                                <i class="flaticon-aeroplane font-size-30 text-primary mr-3"></i>
                                                                <div class="d-flex flex-column">
                                                                    <span class="font-weight-normal text-gray-5">Take off</span>
                                                                    <span class="font-size-14 text-gray-1">Wed Nov 19 7:50 AM</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="border-bottom pb-3 mb-3">
                                                        <div class="px-3">
                                                            <div class="d-flex mx-1">
                                                                <i class="d-block rotate-90 flaticon-aeroplane font-size-30 text-primary mr-3"></i>
                                                                <div class="d-flex flex-column">
                                                                    <span class="font-weight-normal text-gray-5">Landing</span>
                                                                    <span class="font-size-14 text-gray-1">Wed Nov 29 7:50 AM</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-center font-size-14 text-primary mb-3">
                                                        <!-- On Target Modal -->
                                                        <a class="font-size-14 text-gray-1 d-block" href="#ontargetModal"
                                                            data-modal-target="#ontargetModal"
                                                            data-modal-effect="fadein">
                                                            Flight Details
                                                        </a>
                                                        <div id="ontargetModal" class="js-modal-window u-modal-window max-width-960"
                                                            data-modal-type="ontarget"
                                                            data-open-effect="fadeIn"
                                                            data-close-effect="fadeOut"
                                                            data-speed="500">
                                                            <div class="card mx-4 mx-xl-0 mb-4 mb-md-0">
                                                                <button type="button" class="border-0 width-50 height-50 bg-primary flex-content-center position-absolute rounded-circle mt-n4 mr-n4 top-0 right-0" aria-label="Close" onclick="Custombox.modal.close();">
                                                                    <i aria-hidden="true" class="flaticon-close text-white font-size-14"></i>
                                                                </button>
                                                                <!-- Header -->
                                                                <header class="card-header bg-light py-4 px-4">
                                                                    <div class="row align-items-center text-center">
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="d-block d-lg-flex flex-horizontal-center">
                                                                                <img class="img-fluid mr-3 mb-3 mb-lg-0" src="../../assets/img/90x90/img1.png" alt="Image-Description">
                                                                                <div class="font-size-14">Spicejet SG 143 | Boeing 737-700</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="mx-2 mx-xl-3 flex-content-center align-items-start d-block d-lg-flex">
                                                                                <div class="mr-lg-3 mb-1 mb-lg-0">
                                                                                    <i class="flaticon-aeroplane font-size-30 text-primary"></i>
                                                                                </div>
                                                                                <div class="text-lg-left">
                                                                                    <h6 class="font-weight-bold font-size-21 text-gray-5 mb-0">18:30</h6>
                                                                                    <div class="font-size-14 text-gray-5">Sat, 21 Sep 19</div>
                                                                                    <span class="font-size-14 text-gray-1">New Delhi, India</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="mx-2 mx-xl-3 flex-content-center flex-column">
                                                                                <h6 class="font-size-14 font-weight-bold text-gray-5 mb-0">02 hrs 45 mins</h6>
                                                                                <div class="width-60 border-top border-primary border-width-2 my-1"></div>
                                                                                <div class="font-size-14 text-gray-1">Non Stop</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="mx-2 mx-xl-3 flex-content-center align-items-start d-block d-lg-flex">
                                                                                <div class="mr-lg-3 mb-1 mb-lg-0">
                                                                                    <i class="d-block rotate-90 flaticon-aeroplane font-size-30 text-primary"></i>
                                                                                </div>
                                                                                <div class="text-lg-left">
                                                                                    <h6 class="font-weight-bold font-size-21 text-gray-5 mb-0">21.15</h6>
                                                                                    <div class="font-size-14 text-gray-5">Sun, 22 Sep 19</div>
                                                                                    <span class="font-size-14 text-gray-1">Bengaluru, India</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </header>
                                                                <!-- End Header -->

                                                                <!-- Body -->
                                                                <div class="card-body py-4 p-md-5">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <ul class="d-block d-md-flex list-group list-group-borderless list-group-horizontal list-group-flush no-gutters">
                                                                                <li class="mr-md-8 mr-lg-10 mb-5 list-group-item py-0">
                                                                                    <div class="font-weight-bold text-dark">Baggage</div>
                                                                                    <span class="text-gray-1">Adult</span>
                                                                                </li>
                                                                                <li class="mr-md-8 mr-lg-10 mb-5 list-group-item py-0">
                                                                                    <div class="font-weight-bold text-dark">Check-in</div>
                                                                                    <span class="text-gray-1">15 Kgs</span>
                                                                                </li>
                                                                                <li class="mr-md-8 mr-lg-10 mb-5 list-group-item py-0">
                                                                                    <div class="font-weight-bold text-dark">Cabin</div>
                                                                                    <span class="text-gray-1">7 Kgs</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-auto">
                                                                            <div class="min-width-250">
                                                                                <h5 class="font-size-17 font-weight-bold text-dark">Fare breakup</h5>
                                                                                <ul class="list-unstyled font-size-1 mb-0 font-size-16">
                                                                                    <li class="d-flex justify-content-between py-2">
                                                                                        <span class="font-weight-medium">Base Fare</span>
                                                                                        <span class="text-secondary">€580,00</span>
                                                                                    </li>

                                                                                    <li class="d-flex justify-content-between py-2">
                                                                                        <span class="font-weight-medium">Surcharges</span>
                                                                                        <span class="text-secondary">€0,00</span>
                                                                                    </li>


                                                                                    <li class="d-flex justify-content-between py-2 font-size-17 font-weight-bold">
                                                                                        <span class="font-weight-bold">Pay Amount</span>
                                                                                        <span class="">€580,00</span>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End Body -->
                                                            </div>
                                                        </div>
                                                        <!-- End On Target Modal -->
                                                    </div>
                                                    <div class="d-flex justify-content-center">
                                                        <a href="{{url('booking')}}" class="btn btn-blue-1 font-size-14 width-260 text-lh-lg transition-3d-hover py-1">Choose</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="mb-5">
                                            <div class="card w-100 shadow-hover-3">
                                                <a href="{{url('booking')}}" class="d-block mb-0 mx-1 mt-1 p-3" tabindex="0">
                                                    <img class="card-img-top" src="../../assets/img/260x200/img3.jpg" alt="Image Description">
                                                </a>
                                                <div class="card-body px-3 pt-0 pb-3 my-0 mx-1">
                                                    <div class="row">
                                                        <div class="col-7">
                                                            <a href="{{url('booking')}}" class="card-title text-dark font-size-17 font-weight-bold" tabindex="0">Paris</a>
                                                            <span class="font-weight-normal font-size-14 d-block text-color-1">Oneway flight</span>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="text-right">
                                                                <h6 class="font-weight-bold font-size-17 text-gray-3 mb-0">£350.00</h6>
                                                                <span class="font-weight-normal font-size-14 d-block text-color-1">avg/person</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 pb-1">
                                                    <div class="border-bottom pb-3 mb-3">
                                                        <div class="px-3">
                                                            <div class="d-flex mx-1">
                                                                <i class="flaticon-aeroplane font-size-30 text-primary mr-3"></i>
                                                                <div class="d-flex flex-column">
                                                                    <span class="font-weight-normal text-gray-5">Take off</span>
                                                                    <span class="font-size-14 text-gray-1">Wed Nov 19 7:50 AM</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="border-bottom pb-3 mb-3">
                                                        <div class="px-3">
                                                            <div class="d-flex mx-1">
                                                                <i class="d-block rotate-90 flaticon-aeroplane font-size-30 text-primary mr-3"></i>
                                                                <div class="d-flex flex-column">
                                                                    <span class="font-weight-normal text-gray-5">Landing</span>
                                                                    <span class="font-size-14 text-gray-1">Wed Nov 29 7:50 AM</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-center font-size-14 text-primary mb-3">
                                                        <!-- On Target Modal -->
                                                        <a class="font-size-14 text-gray-1 d-block" href="#ontargetModal"
                                                            data-modal-target="#ontargetModal"
                                                            data-modal-effect="fadein">
                                                            Flight Details
                                                        </a>
                                                        <div id="ontargetModal" class="js-modal-window u-modal-window max-width-960"
                                                            data-modal-type="ontarget"
                                                            data-open-effect="fadeIn"
                                                            data-close-effect="fadeOut"
                                                            data-speed="500">
                                                            <div class="card mx-4 mx-xl-0 mb-4 mb-md-0">
                                                                <button type="button" class="border-0 width-50 height-50 bg-primary flex-content-center position-absolute rounded-circle mt-n4 mr-n4 top-0 right-0" aria-label="Close" onclick="Custombox.modal.close();">
                                                                    <i aria-hidden="true" class="flaticon-close text-white font-size-14"></i>
                                                                </button>
                                                                <!-- Header -->
                                                                <header class="card-header bg-light py-4 px-4">
                                                                    <div class="row align-items-center text-center">
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="d-block d-lg-flex flex-horizontal-center">
                                                                                <img class="img-fluid mr-3 mb-3 mb-lg-0" src="../../assets/img/90x90/img1.png" alt="Image-Description">
                                                                                <div class="font-size-14">Spicejet SG 143 | Boeing 737-700</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="mx-2 mx-xl-3 flex-content-center align-items-start d-block d-lg-flex">
                                                                                <div class="mr-lg-3 mb-1 mb-lg-0">
                                                                                    <i class="flaticon-aeroplane font-size-30 text-primary"></i>
                                                                                </div>
                                                                                <div class="text-lg-left">
                                                                                    <h6 class="font-weight-bold font-size-21 text-gray-5 mb-0">18:30</h6>
                                                                                    <div class="font-size-14 text-gray-5">Sat, 21 Sep 19</div>
                                                                                    <span class="font-size-14 text-gray-1">New Delhi, India</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="mx-2 mx-xl-3 flex-content-center flex-column">
                                                                                <h6 class="font-size-14 font-weight-bold text-gray-5 mb-0">02 hrs 45 mins</h6>
                                                                                <div class="width-60 border-top border-primary border-width-2 my-1"></div>
                                                                                <div class="font-size-14 text-gray-1">Non Stop</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-auto mb-4 mb-md-0">
                                                                            <div class="mx-2 mx-xl-3 flex-content-center align-items-start d-block d-lg-flex">
                                                                                <div class="mr-lg-3 mb-1 mb-lg-0">
                                                                                    <i class="d-block rotate-90 flaticon-aeroplane font-size-30 text-primary"></i>
                                                                                </div>
                                                                                <div class="text-lg-left">
                                                                                    <h6 class="font-weight-bold font-size-21 text-gray-5 mb-0">21.15</h6>
                                                                                    <div class="font-size-14 text-gray-5">Sun, 22 Sep 19</div>
                                                                                    <span class="font-size-14 text-gray-1">Bengaluru, India</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </header>
                                                                <!-- End Header -->

                                                                <!-- Body -->
                                                                <div class="card-body py-4 p-md-5">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <ul class="d-block d-md-flex list-group list-group-borderless list-group-horizontal list-group-flush no-gutters">
                                                                                <li class="mr-md-8 mr-lg-10 mb-5 list-group-item py-0">
                                                                                    <div class="font-weight-bold text-dark">Baggage</div>
                                                                                    <span class="text-gray-1">Adult</span>
                                                                                </li>
                                                                                <li class="mr-md-8 mr-lg-10 mb-5 list-group-item py-0">
                                                                                    <div class="font-weight-bold text-dark">Check-in</div>
                                                                                    <span class="text-gray-1">15 Kgs</span>
                                                                                </li>
                                                                                <li class="mr-md-8 mr-lg-10 mb-5 list-group-item py-0">
                                                                                    <div class="font-weight-bold text-dark">Cabin</div>
                                                                                    <span class="text-gray-1">7 Kgs</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-auto">
                                                                            <div class="min-width-250">
                                                                                <h5 class="font-size-17 font-weight-bold text-dark">Fare breakup</h5>
                                                                                <ul class="list-unstyled font-size-1 mb-0 font-size-16">
                                                                                    <li class="d-flex justify-content-between py-2">
                                                                                        <span class="font-weight-medium">Base Fare</span>
                                                                                        <span class="text-secondary">€580,00</span>
                                                                                    </li>

                                                                                    <li class="d-flex justify-content-between py-2">
                                                                                        <span class="font-weight-medium">Surcharges</span>
                                                                                        <span class="text-secondary">€0,00</span>
                                                                                    </li>


                                                                                    <li class="d-flex justify-content-between py-2 font-size-17 font-weight-bold">
                                                                                        <span class="font-weight-bold">Pay Amount</span>
                                                                                        <span class="">€580,00</span>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End Body -->
                                                            </div>
                                                        </div>
                                                        <!-- End On Target Modal -->
                                                    </div>
                                                    <div class="d-flex justify-content-center">
                                                        <a href="{{url('booking')}}" class="btn btn-blue-1 font-size-14 width-260 text-lh-lg transition-3d-hover py-1">Choose</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center text-md-left font-size-14 mb-3 text-lh-1">Showing 1–15</div>
                            <nav aria-label="Page navigation">
                                <ul class="list-pagination-1 pagination border border-color-4 rounded-sm mb-5 mb-lg-0 overflow-auto overflow-xl-visible justify-content-md-center align-items-center py-2">
                                    <li class="page-item">
                                        <a class="page-link border-right rounded-0 text-gray-5" href="#" aria-label="Previous">
                                            <i class="flaticon-left-direction-arrow font-size-10 font-weight-bold"></i>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link font-size-14" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link font-size-14 active" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link font-size-14" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link font-size-14" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link font-size-14" href="#">5</a></li>
                                    <li class="page-item disabled"><a class="page-link font-size-14" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link font-size-14" href="#">66</a></li>
                                    <li class="page-item"><a class="page-link font-size-14" href="#">67</a></li>
                                    <li class="page-item">
                                        <a class="page-link border-left rounded-0 text-gray-5" href="#" aria-label="Next">
                                            <i class="flaticon-right-thin-chevron font-size-10 font-weight-bold"></i>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- ========== END MAIN CONTENT ========== -->

       


      @include('home.footer')