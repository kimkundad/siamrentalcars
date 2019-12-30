@extends('layouts.template')

@section('title')

@stop

@section('stylesheet')

@stop('stylesheet')



@section('content')


<div class="theme-hero-area front">
  <div class="theme-hero-area-bg-wrap">
    <div class="theme-hero-area-bg" style="background-image:url({{url('assets/home/img/1500x400.png')}});" id="hero-banner"></div>
    <div class="theme-hero-area-mask theme-hero-area-mask-half"></div>
  </div>
  <div class="theme-hero-area-body">
    <div class="container">
      <div class="_pb-100 _pt-150 _pv-mob-50">
        <div class="theme-search-area _mob-h theme-search-area-stacked">
          <div class="theme-search-area-header _mb-20">
            <ul class="theme-breadcrumbs _mt-20">
              <li>
                <p class="theme-breadcrumbs-item-title">
                  <a href="index.html">Home</a>
                </p>
              </li>
              <li>
                <p class="theme-breadcrumbs-item-title">
                  <a href="#">United States</a>
                </p>
                <p class="theme-breadcrumbs-item-subtitle">123,878 deals</p>
              </li>
              <li>
                <p class="theme-breadcrumbs-item-title">
                  <a href="#">New York State</a>
                </p>
                <p class="theme-breadcrumbs-item-subtitle">5,478 deals</p>
              </li>
              <li>
                <p class="theme-breadcrumbs-item-title active">New York City Car Rentals</p>
                <p class="theme-breadcrumbs-item-subtitle">2438 deals</p>
              </li>
            </ul>
          </div>




          <div class="theme-search-area-form" id="hero-search-form">
            <div class="row" data-gutter="none">
              <div class="col-md-7 ">
                <div class="row" data-gutter="none">
                  <div class="col-md-6 ">
                    <div class="theme-search-area-section first theme-search-area-section-curved theme-search-area-section-bg-white theme-search-area-section-mr">
                      <label class="theme-search-area-section-label _c-w">Pick Up</label>
                      <div class="theme-search-area-section-inner">
                        <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                        <input class="theme-search-area-section-input typeahead" value="New York" type="text" placeholder="Pick up location" data-provide="typeahead"/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 ">
                    <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-bg-white theme-search-area-section-mr">
                      <label class="theme-search-area-section-label _c-w">Drop Off</label>
                      <div class="theme-search-area-section-inner">
                        <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                        <input class="theme-search-area-section-input typeahead" value="New York" type="text" placeholder="Drop off location" data-provide="typeahead"/>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-2 ">
                <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-bg-white theme-search-area-section-mr">
                  <label class="theme-search-area-section-label _c-w">Check In</label>
                  <div class="theme-search-area-section-inner">
                    <i class="theme-search-area-section-icon lin lin-calendar"></i>
                    <input class="theme-search-area-section-input datePickerStart _mob-h" value="Wed 06/27" type="text" placeholder="Check-in"/>
                    <input class="theme-search-area-section-input _desk-h mobile-picker" value="2018-06-27" type="date"/>
                  </div>
                </div>
              </div>
              <div class="col-md-2 ">
                <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-bg-white theme-search-area-section-mr">
                  <label class="theme-search-area-section-label _c-w">Check Out</label>
                  <div class="theme-search-area-section-inner">
                    <i class="theme-search-area-section-icon lin lin-calendar"></i>
                    <input class="theme-search-area-section-input datePickerEnd _mob-h" value="Mon 07/02" type="text" placeholder="Check-out"/>
                    <input class="theme-search-area-section-input _desk-h mobile-picker" value="2018-07-02" type="date"/>
                  </div>
                </div>
              </div>
              <div class="col-md-1 ">
                <button class="theme-search-area-submit theme-search-area-submit-curved theme-search-area-submit-primary">Change</button>
              </div>
            </div>
          </div>
        </div>
        <div class="theme-search-area-inline _desk-h theme-search-area-inline-white">
          <h4 class="theme-search-area-inline-title">New York Cars</h4>
          <p class="theme-search-area-inline-details">June 27 &rarr; July 02</p>
          <a class="theme-search-area-inline-link magnific-inline" href="#searchEditModal">
            <i class="fa fa-pencil"></i>Edit
          </a>
          <div class="magnific-popup magnific-popup-sm mfp-hide" id="searchEditModal">
            <div class="theme-search-area theme-search-area-vert">
              <div class="theme-search-area-header">
                <h1 class="theme-search-area-title theme-search-area-title-sm">Edit your Search</h1>
                <p class="theme-search-area-subtitle">Prices might be different from current results</p>
              </div>
              <div class="theme-search-area-form">
                <div class="theme-search-area-section first theme-search-area-section-curved">
                  <label class="theme-search-area-section-label">Pick Up</label>
                  <div class="theme-search-area-section-inner">
                    <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                    <input class="theme-search-area-section-input typeahead" value="New York" type="text" placeholder="Pick up location" data-provide="typeahead"/>
                  </div>
                </div>
                <div class="theme-search-area-section theme-search-area-section-curved">
                  <label class="theme-search-area-section-label">Drop Off</label>
                  <div class="theme-search-area-section-inner">
                    <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                    <input class="theme-search-area-section-input typeahead" value="New York" type="text" placeholder="Drop off location" data-provide="typeahead"/>
                  </div>
                </div>
                <div class="row" data-gutter="10">
                  <div class="col-md-6 ">
                    <div class="theme-search-area-section theme-search-area-section-curved">
                      <label class="theme-search-area-section-label">Check In</label>
                      <div class="theme-search-area-section-inner">
                        <i class="theme-search-area-section-icon lin lin-calendar"></i>
                        <input class="theme-search-area-section-input datePickerStart _mob-h" value="Wed 06/27" type="text" placeholder="Check-in"/>
                        <input class="theme-search-area-section-input _desk-h mobile-picker" value="2018-06-27" type="date"/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 ">
                    <div class="theme-search-area-section theme-search-area-section-curved">
                      <label class="theme-search-area-section-label">Check Out</label>
                      <div class="theme-search-area-section-inner">
                        <i class="theme-search-area-section-icon lin lin-calendar"></i>
                        <input class="theme-search-area-section-input datePickerEnd _mob-h" value="Mon 07/02" type="text" placeholder="Check-out"/>
                        <input class="theme-search-area-section-input _desk-h mobile-picker" value="2018-07-02" type="date"/>
                      </div>
                    </div>
                  </div>
                </div>
                <button class="theme-search-area-submit _mt-0 _tt-uc theme-search-area-submit-curved">Change</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
















<div class="theme-page-section theme-page-section-gray">
  <div class="container">
    <div class="row row-col-static" id="sticky-parent">
      <div class="col-md-2-5 ">
        <div class="sticky-col _mob-h">
          <div class="theme-search-results-sidebar">

            <div class="theme-search-results-sidebar-sections">
              <div class="theme-search-results-sidebar-section">
                <h5 class="theme-search-results-sidebar-section-title">Price</h5>
                <div class="theme-search-results-sidebar-section-price">
                  <input id="price-slider" name="price-slider" data-min="100" data-max="500"/>
                </div>
              </div>
              <div class="theme-search-results-sidebar-section">
                <h5 class="theme-search-results-sidebar-section-title">Pickup Location</h5>
                <div class="theme-search-results-sidebar-section-checkbox-list">
                  <div class="theme-search-results-sidebar-section-checkbox-list-items">
                    <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                      <label class="icheck-label">
                        <input class="icheck" type="checkbox"/>
                        <span class="icheck-title">LGA: LaGuardia</span>
                      </label>
                      <span class="theme-search-results-sidebar-section-checkbox-list-amount">139</span>
                    </div>
                    <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                      <label class="icheck-label">
                        <input class="icheck" type="checkbox"/>
                        <span class="icheck-title">EWR: Newark</span>
                      </label>
                      <span class="theme-search-results-sidebar-section-checkbox-list-amount">276</span>
                    </div>
                    <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                      <label class="icheck-label">
                        <input class="icheck" type="checkbox"/>
                        <span class="icheck-title">JFK: John F. Ken...</span>
                      </label>
                      <span class="theme-search-results-sidebar-section-checkbox-list-amount">360</span>
                    </div>
                    <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                      <label class="icheck-label">
                        <input class="icheck" type="checkbox"/>
                        <span class="icheck-title">Non-airport</span>
                      </label>
                      <span class="theme-search-results-sidebar-section-checkbox-list-amount">113</span>
                    </div>
                  </div>
                </div>
              </div>
















            </div>
          </div>

        </div>
      </div>
      <div class="col-md-6-5 ">




        <div class="theme-search-results-sign-in _mob-h bg-grad">
          <i class="theme-search-results-sign-in-icon fa fa-unlock-alt"></i>
          <h5 class="theme-search-results-sign-in-title">Sign in to unlock our secret delas. Save up to
            <b>50%</b>
          </h5>
          <a class="btn theme-search-results-sign-in-btn btn-ghost btn-white" href="#">Sign in now</a>
        </div>
        <div class="theme-search-results">
          <div class="_mob-h">
            <div class="theme-search-results-item _mb-10 theme-search-results-item-">
              <div class="theme-search-results-item-preview">
                <a class="theme-search-results-item-mask-link" href="#"></a>
                <div class="row" data-gutter="20">
                  <div class="col-md-5 ">
                    <div class="theme-search-results-item-img-wrap">
                      <img class="theme-search-results-item-img" src="./img/600x398.png" alt="Image Alternative text" title="Image Title"/>
                    </div>
                    <ul class="theme-search-results-item-car-feature-list">
                      <li>
                        <i class="fa fa-male"></i>
                        <span>4</span>
                      </li>
                      <li>
                        <i class="fa fa-suitcase"></i>
                        <span>2</span>
                      </li>
                      <li>
                        <i class="fa fa-cog"></i>
                        <span>Auto</span>
                      </li>
                      <li>
                        <i class="fa fa-snowflake-o"></i>
                        <span>A/C</span>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-5 ">
                    <h5 class="theme-search-results-item-title theme-search-results-item-title-lg">Toyota Yaris</h5>
                    <div class="theme-search-results-item-car-location">
                      <i class="fa fa-plane theme-search-results-item-car-location-icon"></i>
                      <div class="theme-search-results-item-car-location-body">
                        <p class="theme-search-results-item-car-location-title">Newark Liberty International Airport</p>
                        <p class="theme-search-results-item-car-location-subtitle">Shuttle to car</p>
                      </div>
                    </div>
                    <ul class="theme-search-results-item-car-list">
                      <li>
                        <i class="fa fa-check"></i>Unlimited mileage
                      </li>
                      <li>
                        <i class="fa fa-check"></i>Pay now
                      </li>
                      <li>
                        <i class="fa fa-check"></i>Free cancellation
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-2 ">
                    <div class="theme-search-results-item-book">
                      <div class="theme-search-results-item-price">
                        <p class="theme-search-results-item-price-tag">$16</p>
                        <p class="theme-search-results-item-price-sign">per day</p>
                      </div>
                      <a class="btn btn-primary-inverse btn-block theme-search-results-item-price-btn" href="#">Book Now</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>






























          </div>











          <div class="_desk-h">














          </div>



          <div class="theme-search-results-mobile-filters" id="mobileFilters">
            <a class="theme-search-results-mobile-filters-btn magnific-inline" href="#MobileFilters">
              <i class="fa fa-filter"></i>Filters
            </a>
            <div class="magnific-popup mfp-hide" id="MobileFilters">
              <div class="theme-search-results-sidebar">
                <div class="theme-search-results-sidebar-sections">
                  <div class="theme-search-results-sidebar-section">
                    <h5 class="theme-search-results-sidebar-section-title">Price</h5>
                    <div class="theme-search-results-sidebar-section-price">
                      <input id="price-slider-mob" name="price-slider" data-min="100" data-max="500"/>
                    </div>
                  </div>
                  <div class="theme-search-results-sidebar-section">
                    <h5 class="theme-search-results-sidebar-section-title">Pickup Location</h5>
                    <div class="theme-search-results-sidebar-section-checkbox-list">
                      <div class="theme-search-results-sidebar-section-checkbox-list-items">
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">LGA: LaGuardia</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">224</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">EWR: Newark</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">215</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">JFK: John F. Ken...</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">487</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Non-airport</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">307</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="theme-search-results-sidebar-section">
                    <h5 class="theme-search-results-sidebar-section-title">Passengers</h5>
                    <div class="theme-search-results-sidebar-section-checkbox-list">
                      <div class="theme-search-results-sidebar-section-checkbox-list-items">
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">1 to 2 passengers</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">140</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">3 to 5 passengers</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">214</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">6 or more</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">213</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="theme-search-results-sidebar-section">
                    <h5 class="theme-search-results-sidebar-section-title">Bags</h5>
                    <div class="theme-search-results-sidebar-section-checkbox-list">
                      <div class="theme-search-results-sidebar-section-checkbox-list-items">
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">1 to 2 bags</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">199</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">3 to 4 bags</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">221</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">5 or more</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">148</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="theme-search-results-sidebar-section">
                    <h5 class="theme-search-results-sidebar-section-title">Car Type</h5>
                    <div class="theme-search-results-sidebar-section-checkbox-list">
                      <div class="theme-search-results-sidebar-section-checkbox-list-items">
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Small</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">223</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Large</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">348</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Medium</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">355</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">SUV</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">146</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Van</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">471</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Commercial</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">127</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Luxury</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">499</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Pickup truck</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">366</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Convertable</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">296</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="theme-search-results-sidebar-section">
                    <h5 class="theme-search-results-sidebar-section-title">Payment Type</h5>
                    <div class="theme-search-results-sidebar-section-checkbox-list">
                      <div class="theme-search-results-sidebar-section-checkbox-list-items">
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Pay now</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">320</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Pay at counter</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">169</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="theme-search-results-sidebar-section">
                    <h5 class="theme-search-results-sidebar-section-title">Rental Agency</h5>
                    <div class="theme-search-results-sidebar-section-checkbox-list">
                      <div class="theme-search-results-sidebar-section-checkbox-list-items">
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Ace</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">456</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Action</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">411</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Advantage</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">109</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Alamo</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">290</span>
                        </div>
                      </div>
                      <div class="collapse" id="mobile-SearchResultsCheckboxRentalAgency">
                        <div class="theme-search-results-sidebar-section-checkbox-list-items theme-search-results-sidebar-section-checkbox-list-items-expand">
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="icheck-label">
                              <input class="icheck" type="checkbox"/>
                              <span class="icheck-title">Avis</span>
                            </label>
                            <span class="theme-search-results-sidebar-section-checkbox-list-amount">293</span>
                          </div>
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="icheck-label">
                              <input class="icheck" type="checkbox"/>
                              <span class="icheck-title">Budget</span>
                            </label>
                            <span class="theme-search-results-sidebar-section-checkbox-list-amount">228</span>
                          </div>
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="icheck-label">
                              <input class="icheck" type="checkbox"/>
                              <span class="icheck-title">Dollar</span>
                            </label>
                            <span class="theme-search-results-sidebar-section-checkbox-list-amount">377</span>
                          </div>
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="icheck-label">
                              <input class="icheck" type="checkbox"/>
                              <span class="icheck-title">Enterprise</span>
                            </label>
                            <span class="theme-search-results-sidebar-section-checkbox-list-amount">301</span>
                          </div>
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="icheck-label">
                              <input class="icheck" type="checkbox"/>
                              <span class="icheck-title">Hertz</span>
                            </label>
                            <span class="theme-search-results-sidebar-section-checkbox-list-amount">495</span>
                          </div>
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="icheck-label">
                              <input class="icheck" type="checkbox"/>
                              <span class="icheck-title">National</span>
                            </label>
                            <span class="theme-search-results-sidebar-section-checkbox-list-amount">359</span>
                          </div>
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="icheck-label">
                              <input class="icheck" type="checkbox"/>
                              <span class="icheck-title">Payless</span>
                            </label>
                            <span class="theme-search-results-sidebar-section-checkbox-list-amount">375</span>
                          </div>
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="icheck-label">
                              <input class="icheck" type="checkbox"/>
                              <span class="icheck-title">Prestige Car Rental</span>
                            </label>
                            <span class="theme-search-results-sidebar-section-checkbox-list-amount">263</span>
                          </div>
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="icheck-label">
                              <input class="icheck" type="checkbox"/>
                              <span class="icheck-title">Special rate</span>
                            </label>
                            <span class="theme-search-results-sidebar-section-checkbox-list-amount">241</span>
                          </div>
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="icheck-label">
                              <input class="icheck" type="checkbox"/>
                              <span class="icheck-title">Thrifty</span>
                            </label>
                            <span class="theme-search-results-sidebar-section-checkbox-list-amount">356</span>
                          </div>
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="icheck-label">
                              <input class="icheck" type="checkbox"/>
                              <span class="icheck-title">U-Save</span>
                            </label>
                            <span class="theme-search-results-sidebar-section-checkbox-list-amount">383</span>
                          </div>
                        </div>
                      </div>
                      <a class="theme-search-results-sidebar-section-checkbox-list-expand-link" role="button" data-toggle="collapse" href="#mobile-SearchResultsCheckboxRentalAgency" aria-expanded="false">Show more
                        <i class="fa fa-angle-down"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a class="btn _tt-uc _fs-sm btn-white btn-block btn-lg" href="#">Load More Results</a>
      </div>

      <!-- right bar -->
      <div class="col-md-3 ">
        <div class="sticky-col _mob-h">


          <div class="theme-ad _mb-20">
            <a class="theme-ad-link" href="#"></a>
            <p class="theme-ad-sign">Advertisement</p>
            <img class="theme-ad-img" src="{{url('assets/home/img/300x500.png')}}" alt="Image Alternative text" title="Image Title"/>
          </div>
          <div class="theme-ad">
            <a class="theme-ad-link" href="#"></a>
            <p class="theme-ad-sign">Advertisement</p>
            <img class="theme-ad-img" src="{{url('assets/home/img/300x500.png')}}" alt="Image Alternative text" title="Image Title"/>
          </div>

        </div>
      </div>



    </div>
  </div>
</div>

@endsection

@section('scripts')

<script>

function autocomplete() {

    $('.typeahead').typeahead({
        minLength: 1,
        autoselect: false,
        showHintOnFocus: true,
        source: function(q, cb) {
            return $.ajax({
                dataType: 'json',
                type: 'get',
                url: '{{url('/search/data/?field2=')}}' + q,
                chache: false,
                success: function(data) {
                  console.log(data);
                    if(data){

                      var res = [];
                      $.each(data, function(index, val){
                          if(val !== "%s") {
                              res.push({
                                  id: index,
                                  name: val.name
                              })
                          }else{
                            $(this).val('');
                          //  $('.typeahead').typeahead('val','');
                          }
                      })
                      cb(res);

                    }else{
                    //  $('.typeahead').typeahead('val','');
                    }


                }
            })
        }
    })

}


</script>

@stop('scripts')
