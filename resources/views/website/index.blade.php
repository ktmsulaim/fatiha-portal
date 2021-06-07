@extends('layouts.website', ['pageTitle' => 'Home'])

@section('content')
    <!-- Slider
                          ============================================= -->
    <section id="slider" class="slider-element"
        style="background: linear-gradient(to right, rgba(0,0,0, 0.4) 20%, transparent 100%), url('{{ asset('assets/website/images/bg-main.jpg') }}') no-repeat center center / cover;">

        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 col-md-7 dark mb-5 mb-md-0 py-5">
                    <h2 class="display-4" style="font-weight: 600;">Education<br>even from far away</h2>
                    <p class="mb-5 lead text-white op-07">Fatiha online is one of the modern virtual Islamic schools which
                        provides high quality online curriculum in Islamic education and training. </p>
                    {{-- <a href="#" class="button button-xlarge bg-color font-weight-normal nott ls0">Book Now</a>
                <a href="#" class="button button-xlarge button-white button-light font-weight-normal nott ls0">Contact
                    Us</a> --}}
                </div>
                <div class="col-md-5 d-flex align-self-end align-items-center align-items-lg-end col-form">
                    <div class="card rounded-top bg-white border-0 w-100 shadow p-3">
                        <div class="card-body">
                            <h3 class="mb-0">Enrol today</h3>
                            <div class="line line-sm"></div>
                            <div data-alert-type="inline">

                                <div class="form-result"></div>
                                <div class="form-availability-loader css3-spinner" style="position: absolute;">
                                    <div class="css3-spinner-double-bounce1"></div>
                                    <div class="css3-spinner-double-bounce2"></div>
                                </div>
                                <form id="apply-form" name="form-availability" action="{{ route('application.store') }}"
                                    method="post" class="form-availability mb-0">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Full name<small class="text-danger">*</small></label>
                                        <input type="text" name="name" id="name"
                                            class="form-control @error('name') error  @enderror" value="{{ old('name') }}"
                                            required>

                                        @error('name')
                                            <p class="invalid-feedback d-block mb-0">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email<small class="text-danger">*</small></label>
                                        <input type="email" name="email" id="email"
                                            class="form-control @error('email') error  @enderror"
                                            value="{{ old('email') }}" required>
                                        @error('email')
                                            <p class="invalid-feedback d-block mb-0">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="father_name">Name of father<small class="text-danger">*</small></label>
                                        <input type="text" name="father_name" id="father_name"
                                            class="form-control @error('father_name') error  @enderror"
                                            value="{{ old('father_name') }}" required>
                                        @error('father_name')
                                            <p class="invalid-feedback d-block mb-0">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="age">Age<small class="text-danger">*</small></label>
                                                <input type="number" min="0" name="age" id="age"
                                                    class="form-control @error('age') error  @enderror"
                                                    value="{{ old('age') }}" required>
                                                @error('age')
                                                    <p class="invalid-feedback d-block mb-0">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="gender">Gender<small class="text-danger">*</small></label>
                                                <select name="gender" id="gender" class="form-control" required>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Other">Other</option>
                                                </select>

                                                @error('gender')
                                                    <p class="invalid-feedback d-block mb-0">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="whatsapp">Time preference (IST)<small
                                                class="text-danger">*</small></label>
                                        <select name="time_preference" id="time_preference" class="form-control" required>
                                            <option value="">Select a time</option>
                                            <option value="1">8pm to 10pm</option>
                                            <option value="2">5pm to 7pm</option>
                                            <option value="3">7:30am to 8:30am</option>
                                        </select>

                                        @error('time_preference')
                                            <p class="invalid-feedback d-block mb-0">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="whatsapp">Whatsapp<small class="text-danger">*</small></label>
                                        <input type="tel" name="whatsapp" id="whatsapp"
                                            class="form-control @error('whatsapp') error  @enderror"
                                            value="{{ old('whatsapp') }}" required>

                                        @error('whatsapp')
                                            <p class="invalid-feedback d-block mb-0">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="state">State<small class="text-danger">*</small></label>
                                                <input type="text" name="state" id="state"
                                                    class="form-control @error('state') error  @enderror"
                                                    value="{{ old('state') }}" required>

                                                @error('state')
                                                    <p class="invalid-feedback d-block mb-0">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="country">Country<small class="text-danger">*</small></label>
                                                <input type="text" name="country" id="country"
                                                    class="form-control @error('country') error  @enderror"
                                                    value="{{ old('country') }}" required>

                                                @error('country')
                                                    <p class="invalid-feedback d-block mb-0">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>


                                    <button type="submit"
                                        class="button button-large btn-block rounded font-weight-semibold ml-0 mt-2">Submit</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Content
                          ============================================= -->
    <section id="content">

        <div class="content-wrap pb-0">

            <div class="container">
                <div class="row topmargin">
                    <div class="col-md-5 offset-md-1">
                        <h3 class="text-dark"><i class="icon-line-circle-check color mr-1 position-relative"
                                style="top: 2px"></i> Why do you choose Fatiha?</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit incidunt enim accusantium ex quis!
                            Consequatur, provident aliquam ut iste architecto ipsa! Corporis dolores laboriosam quae
                            tempora, tenetur molestiae! Sed, laudantium.
                        </p>
                    </div>
                    <div class="col-md-5 pl-md-5">
                        <h3 class="text-dark"><i class="icon-line-circle-check color mr-1 position-relative"
                                style="top: 2px"></i> How we do?</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi debitis ipsa dicta magnam a
                            molestiae ratione repellat odit voluptatem, obcaecati eos voluptate officia, sunt quaerat eaque
                            delectus aliquam nemo saepe.</p>
                    </div>
                </div>
            </div>

            <div class="clear"></div>

            {{-- <div class="section center studio-tab mb-0" style="background-color: #D6EBEE">
                <div class="container mx-auto" style="max-width: 800px">
                    <div class="heading-block">
                        <h3 class="text-dark">Check out your Comforts</h3>
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, perspiciatis.</span>
                    </div>

                    <div id="studio-tab-nav" class="nav justify-content-center" role="tablist">
                        <a class="nav-link active" id="studio-lobby-tab" data-toggle="tab" href="#studio-lobby" role="tab"
                            aria-controls="studio-lobby" aria-selected="true" data-bg="#D6EBEE">Lobby</a>
                        <a class="nav-link" id="studio-deluxe-twin-room-tab" data-toggle="tab"
                            href="#studio-deluxe-twin-room" role="tab" aria-controls="studio-deluxe-twin-room"
                            aria-selected="false" data-bg="#E4E4E4">Deluxe Twin Rooms</a>
                        <a class="nav-link" id="studio-dormitory-room-tab" data-toggle="tab" href="#studio-dormitory-room"
                            role="tab" aria-controls="studio-dormitory-room" aria-selected="false"
                            data-bg="#EFF1FE">Dormitory Rooms</a>
                        <a class="nav-link" id="studio-4-mixed-bed-tab" data-toggle="tab" href="#studio-4-mixed-bed"
                            role="tab" aria-controls="studio-4-mixed-bed" aria-selected="false" data-bg="#EDF4EA">4 Bed
                            Mixed</a>
                    </div>

                    <div class="tab-content mb-5">
                        <div class="tab-pane show active" id="studio-lobby" role="tabpanel"
                            aria-labelledby="studio-lobby-tab">
                            <div class="fslider" data-smooth-height="false" data-pagi="false" data-arrows="false"
                                data-thumbs="true">
                                <div class="flexslider">
                                    <div class="slider-wrap">
                                        <div class="slide" data-thumb="demos/hostel/images/studios/1/thumbs/1.jpg"><img
                                                src="demos/hostel/images/studios/1/1.jpg" alt="Lobby"></div>
                                        <div class="slide" data-thumb="demos/hostel/images/studios/1/thumbs/2.jpg"><img
                                                src="demos/hostel/images/studios/1/2.jpg" alt="Lobby"></div>
                                        <div class="slide" data-thumb="demos/hostel/images/studios/1/thumbs/3.jpg"><img
                                                src="demos/hostel/images/studios/1/3.jpg" alt="Lobby"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="studio-deluxe-twin-room" role="tabpanel"
                            aria-labelledby="studio-deluxe-twin-room-tab">
                            <div class="fslider" data-smooth-height="false" data-pagi="false" data-arrows="false"
                                data-thumbs="true">
                                <div class="flexslider">
                                    <div class="slider-wrap">
                                        <div class="slide" data-thumb="demos/hostel/images/studios/2/thumbs/1.jpg"><img
                                                src="demos/hostel/images/studios/2/1.jpg" alt="Deluxe Twin Room"></div>
                                        <div class="slide" data-thumb="demos/hostel/images/studios/2/thumbs/2.jpg"><img
                                                src="demos/hostel/images/studios/2/2.jpg" alt="Deluxe Twin Room"></div>
                                        <div class="slide" data-thumb="demos/hostel/images/studios/2/thumbs/3.jpg"><img
                                                src="demos/hostel/images/studios/2/3.jpg" alt="Deluxe Twin Room"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="studio-dormitory-room" role="tabpanel"
                            aria-labelledby="studio-dormitory-room-tab">
                            <div class="fslider" data-smooth-height="false" data-pagi="false" data-arrows="false"
                                data-thumbs="true">
                                <div class="flexslider">
                                    <div class="slider-wrap">
                                        <div class="slide" data-thumb="demos/hostel/images/studios/3/thumbs/1.jpg"><img
                                                src="demos/hostel/images/studios/3/1.jpg" alt="Dormitory Room"></div>
                                        <div class="slide" data-thumb="demos/hostel/images/studios/3/thumbs/2.jpg"><img
                                                src="demos/hostel/images/studios/3/2.jpg" alt="Dormitory Room"></div>
                                        <div class="slide" data-thumb="demos/hostel/images/studios/3/thumbs/3.jpg"><img
                                                src="demos/hostel/images/studios/3/3.jpg" alt="Dormitory Room"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="studio-4-mixed-bed" role="tabpanel"
                            aria-labelledby="studio-4-mixed-bed-tab">
                            <div class="fslider" data-smooth-height="false" data-pagi="false" data-arrows="false"
                                data-thumbs="true">
                                <div class="flexslider">
                                    <div class="slider-wrap">
                                        <div class="slide" data-thumb="demos/hostel/images/studios/4/thumbs/1.jpg"><img
                                                src="demos/hostel/images/studios/4/1.jpg" alt="4 Bed Mixed"></div>
                                        <div class="slide" data-thumb="demos/hostel/images/studios/4/thumbs/2.jpg"><img
                                                src="demos/hostel/images/studios/4/2.jpg" alt="4 Bed Mixed"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="#" class="button button-large bg-color nott font-weight-semibold ls0">View Full Gallery</a>
                    <a href="#" class="button button-large bg-color nott font-weight-semibold ls0">Book Now</a>
                </div>
            </div>

            <div class="section my-5 bg-transparent section-counter">
                <div class="container">
                    <div class="heading-block center mx-auto" style="max-width: 800px">
                        <h3 class="text-dark">Check out your Comforts</h3>
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, perspiciatis.</span>
                    </div>

                    <div class="clear"></div>

                    <div class="row justify-content-between topmargin">
                        <div class="col-md-3 col-sm-6 mb-5 mb-lg-0">
                            <h2 class="display-3">4.8</h2>
                            <div class="product-rating mb-1 color">
                                <i class="icon-star3"></i>
                                <i class="icon-star3"></i>
                                <i class="icon-star3"></i>
                                <i class="icon-star3"></i>
                                <i class="icon-star3"></i>
                            </div>
                            <span class="d-block">2,0321 Ratings</span>
                            <a href="#" class="btn-link">See reviews<i class="icon-line-arrow-right"></i></a>
                        </div>

                        <div class="col-md-3 col-sm-6 mb-5 mb-lg-0">
                            <h2 class="counter"><span data-from="1" data-to="3" data-refresh-interval="1"
                                    data-speed="600"></span>.<span data-from="0" data-to="75" data-refresh-interval="100"
                                    data-speed="2000"></span><small>M</small></h2>
                            <span class="mb-2 d-block">People Liked and Follows our Hostels in Social Media.</span>
                            <a href="#" class="i-rounded i-small mr-1 si-colored h-op-09 si-facebook">
                                <i class="icon-facebook"></i>
                            </a>
                            <a href="#" class="i-rounded i-small mr-1 si-colored h-op-09 si-instagram">
                                <i class="icon-instagram"></i>
                            </a>
                            <a href="#" class="i-rounded i-small mr-1 si-colored h-op-09 si-pinterest">
                                <i class="icon-pinterest"></i>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-6 mb-5 mb-lg-0">
                            <h2 class="counter"><span data-from="10" data-to="4304" data-comma="true"></span>+</h2>
                            <span class="d-block">New People Comes Every Year.</span>
                            <a href="#" class="btn-link">https://google.com<i class="icon-line-arrow-right"></i></a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="section m-0" style="background-color: #fcf5ed">
                <div class="container">
                    <div class="row justify-content-between">

                        <!-- Feature Box
               ============================================= -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <i class="icon-line2-feed color ml-0 mb-4 i-plain d-block float-none"></i>
                            <h4 class="mb-3">WiFi Available</h4>
                            <p class="text-muted">Add any Field to your Custom Form. Canvas's inbuilt Forms Processor will
                                handle the rest. You will never have to touch any PHP Codes.</p>
                        </div>

                        <!-- Feature Box
               ============================================= -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <i class="icon-line2-cup color ml-0 mb-3 i-plain d-block float-none"></i>
                            <h4 class="mb-3">Cafeteria</h4>
                            <p class="text-muted">Add any Field to your Custom Form. Canvas's inbuilt Forms Processor will
                                handle the rest. You will never have to touch any PHP Codes.</p>
                        </div>

                        <!-- Feature Box
               ============================================= -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <i class="icon-line2-screen-desktop color ml-0 mb-3 i-plain d-block float-none"></i>
                            <h4 class="mb-3">Workspace Area</h4>
                            <p class="text-muted">Add any Field to your Custom Form. Canvas's inbuilt Forms Processor will
                                handle the rest. You will never have to touch any PHP Codes.</p>
                        </div>

                        <!-- Feature Box
               ============================================= -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <i class="icon-line2-lock color ml-0 mb-3 i-plain d-block float-none"></i>
                            <h4 class="mb-3">Lockers</h4>
                            <p class="text-muted">Add any Field to your Custom Form. Canvas's inbuilt Forms Processor will
                                handle the rest. You will never have to touch any PHP Codes.</p>
                        </div>

                        <!-- Feature Box
               ============================================= -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <i class="icon-line2-shield color ml-0 mb-3 i-plain d-block float-none"></i>
                            <h4 class="mb-3">100% Secured</h4>
                            <p class="text-muted">Add any Field to your Custom Form. Canvas's inbuilt Forms Processor will
                                handle the rest. You will never have to touch any PHP Codes.</p>
                        </div>

                        <!-- Feature Box
               ============================================= -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <i class="icon-line2-printer color ml-0 mb-3 i-plain d-block float-none"></i>
                            <h4 class="mb-3">Printers &amp; Fax</h4>
                            <p class="text-muted">Add any Field to your Custom Form. Canvas's inbuilt Forms Processor will
                                handle the rest. You will never have to touch any PHP Codes.</p>
                        </div>

                        <!-- Feature Box
               ============================================= -->
                        <div class="col-lg-4 col-md-6 mb-2">
                            <i class="icon-line2-drawer color ml-0 mb-3 i-plain d-block float-none"></i>
                            <h4 class="mb-3">Well Furnished</h4>
                            <p class="text-muted">Add any Field to your Custom Form. Canvas's inbuilt Forms Processor will
                                handle the rest. You will never have to touch any PHP Codes.</p>
                        </div>

                        <!-- Feature Box
               ============================================= -->
                        <div class="col-lg-4 col-md-6 mb-2">
                            <i class="icon-line2-clock color ml-0 mb-3 i-plain d-block float-none"></i>
                            <h4 class="mb-3">24x7 Access</h4>
                            <p class="text-muted">Add any Field to your Custom Form. Canvas's inbuilt Forms Processor will
                                handle the rest. You will never have to touch any PHP Codes.</p>
                        </div>

                        <!-- Feature Box
               ============================================= -->
                        <div class="col-lg-4 col-md-6 mb-2">
                            <i class="icon-line2-game-controller color ml-0 mb-3 i-plain d-block float-none"></i>
                            <h4 class="mb-3">Other Activities</h4>
                            <p class="text-muted">Add any Field to your Custom Form. Canvas's inbuilt Forms Processor will
                                handle the rest. You will never have to touch any PHP Codes.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section bg-transparent my-5">
                <div class="container">

                    <div class="row align-items-center flex-md-row-reverse col-mb-50 mb-0">
                        <div class="col-lg-6">
                            <img class="box-img shadow-left" src="demos/hostel/images/box-img/1.jpg" alt="Image">
                        </div>
                        <div class="col-lg-6 pr-0 pr-md-5">
                            <h5 class="color font-weight-normal mb-2"><i class="icon-line2-pointer"></i> Spain</h5>
                            <h3 class="text-dark h1 font-weight-semibold ls0 mb-4">Canvas Penthouse</h3>
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium eius
                                explicabo, optio repellat saepe inventore dicta quibusdam minima quia, ratione minus a
                                consectetur dolorum, nulla provident tenetur.</p>

                            <h3 class="title-pricing mb-5">$39.99 <span>per week</span></h3>

                            <div class="row">
                                <div class="col-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item pl-0"><i class="icon-line2-feed mr-2"></i>WiFi Availbale
                                        </li>
                                        <li class="list-group-item pl-0"><i class="icon-line2-cup mr-2"></i>Breakfast
                                            Included</li>
                                        <li class="list-group-item pl-0"><i class="icon-line2-clock mr-2"></i>24x7 access
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item pl-0"><i class="icon-line2-lock mr-2"></i>Lockers
                                            Available</li>
                                        <li class="list-group-item pl-0"><i
                                                class="icon-line2-social-dropbox mr-2"></i>Laundry Available</li>
                                        <li class="list-group-item pl-0"><i
                                                class="icon-line2-game-controller mr-2"></i>Other Aminities</li>
                                    </ul>
                                </div>
                            </div>
                            <a href="#" class="button bg-color nott ls0 mt-4 mx-0">View More Details</a>
                        </div>
                    </div>

                    <div class="clear"></div>

                    <div class="row align-items-center topmargin-lg col-mb-50 mb-lg-5">
                        <div class="col-lg-6">
                            <img class="box-img" src="demos/hostel/images/box-img/2.jpg" alt="Image">
                        </div>
                        <div class="col-lg-6 pl-md-5 mb-5 mb-md-0">
                            <h5 class="color font-weight-normal mb-2"><i class="icon-line2-pointer"></i> Denmark</h5>
                            <h3 class="text-dark h1 font-weight-semibold ls0 mb-4">Canvas Delux Bed</h3>
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium eius
                                explicabo, optio repellat dolorum, nulla provident tenetur.</p>

                            <h3 class="title-pricing mb-5">$45.99 <span>per week</span></h3>

                            <div class="row">
                                <div class="col-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item pl-0"><i class="icon-line2-feed mr-2"></i>WiFi Availbale
                                        </li>
                                        <li class="list-group-item pl-0"><i class="icon-line2-cup mr-2"></i>Breakfast
                                            Included</li>
                                        <li class="list-group-item pl-0"><i class="icon-line2-clock mr-2"></i>24x7 access
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item pl-0"><i class="icon-line2-lock mr-2"></i>Lockers
                                            Available</li>
                                        <li class="list-group-item pl-0"><i
                                                class="icon-line2-social-dropbox mr-2"></i>Laundry Available</li>
                                        <li class="list-group-item pl-0"><i
                                                class="icon-line2-game-controller mr-2"></i>Other Aminities</li>
                                    </ul>
                                </div>
                            </div>
                            <a href="#" class="button bg-color nott ls0 mt-4 mx-0">View More Details</a>
                        </div>
                    </div>

                    <div class="clear"></div>

                    <div class="row align-items-center flex-md-row-reverse topmargin-lg col-mb-50">
                        <div class="col-lg-6">
                            <img class="box-img shadow-left" src="demos/hostel/images/box-img/3.jpg" alt="Image">
                        </div>

                        <div class="col-lg-6 pr-0 pr-md-5 mb-5 mb-lg-0">
                            <h5 class="color font-weight-normal mb-2"><i class="icon-line2-pointer"></i> Amsterdam</h5>
                            <h3 class="text-dark h1 font-weight-semibold ls0 mb-4">Canvas Mixed Bed</h3>
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium eius
                                explicabo, optio repellat saepe inventore ratione minus a consectetur dolorum, nulla
                                provident tenetur.</p>

                            <h3 class="title-pricing mb-5">$29.99 <span>per week</span></h3>

                            <div class="row">
                                <div class="col-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item pl-0"><i class="icon-line2-feed mr-2"></i>WiFi Availbale
                                        </li>
                                        <li class="list-group-item pl-0"><i class="icon-line2-cup mr-2"></i>Breakfast
                                            Included</li>
                                        <li class="list-group-item pl-0"><i class="icon-line2-clock mr-2"></i>24x7 access
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item pl-0"><i class="icon-line2-lock mr-2"></i>Lockers
                                            Available</li>
                                        <li class="list-group-item pl-0"><i
                                                class="icon-line2-social-dropbox mr-2"></i>Laundry Available</li>
                                        <li class="list-group-item pl-0"><i
                                                class="icon-line2-game-controller mr-2"></i>Other Aminities</li>
                                    </ul>
                                </div>
                            </div>
                            <a href="#" class="button bg-color nott ls0 mt-4 mx-0">View More Details</a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="section m-0 center dark parallax"
                style="background: url('demos/hostel/images/hero.jpg') center center / cover; padding: 170px 0;">
                <div class="container">
                    <h3 class="h1 mb-5">More than 100,000<br>Travellers Visit Our Hostels.</h3>
                    <a href="#" class="button button-xlarge font-weight-semibold bg-color nott ls0 px-5">Book Now</a>
                </div>
            </div>

            <div class="section m-0 bg-transparent">
                <div class="container">
                    <div class="heading-block center border-bottom-0 bottommargin-lg">
                        <h3 class="text-dark">Frequently asked Questions</h3>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-6">

                            <div class="toggle">
                                <div class="toggle-header justify-content-between flex-row-reverse">
                                    <div class="toggle-icon">
                                        <i class="toggle-closed icon-line-plus"></i>
                                        <i class="toggle-open icon-line-minus"></i>
                                    </div>
                                    <div class="toggle-title font-weight-semibold">
                                        How do I become an author?
                                    </div>
                                </div>
                                <div class="toggle-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam
                                    cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero
                                    eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe,
                                    aperiam, nam unde quas beatae vero vitae nulla.</div>
                            </div>

                            <div class="toggle">
                                <div class="toggle-header justify-content-between flex-row-reverse">
                                    <div class="toggle-icon">
                                        <i class="toggle-closed icon-line-plus"></i>
                                        <i class="toggle-open icon-line-minus"></i>
                                    </div>
                                    <div class="toggle-title font-weight-semibold">
                                        Helpful Resources for Authors
                                    </div>
                                </div>
                                <div class="toggle-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam
                                    cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero
                                    eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe,
                                    aperiam, nam unde quas beatae vero vitae nulla.</div>
                            </div>

                            <div class="toggle">
                                <div class="toggle-header justify-content-between flex-row-reverse">
                                    <div class="toggle-icon">
                                        <i class="toggle-closed icon-line-plus"></i>
                                        <i class="toggle-open icon-line-minus"></i>
                                    </div>
                                    <div class="toggle-title font-weight-semibold">
                                        How much money can I make?
                                    </div>
                                </div>
                                <div class="toggle-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam
                                    cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero
                                    eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe,
                                    aperiam, nam unde quas beatae vero vitae nulla.</div>
                            </div>

                            <div class="toggle">
                                <div class="toggle-header justify-content-between flex-row-reverse">
                                    <div class="toggle-icon">
                                        <i class="toggle-closed icon-line-plus"></i>
                                        <i class="toggle-open icon-line-minus"></i>
                                    </div>
                                    <div class="toggle-title font-weight-semibold">
                                        Can I offer my items for free on a promotional basis?
                                    </div>
                                </div>
                                <div class="toggle-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam
                                    cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero
                                    eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe,
                                    aperiam, nam unde quas beatae vero vitae nulla.</div>
                            </div>

                            <div class="toggle">
                                <div class="toggle-header justify-content-between flex-row-reverse">
                                    <div class="toggle-icon">
                                        <i class="toggle-closed icon-line-plus"></i>
                                        <i class="toggle-open icon-line-minus"></i>
                                    </div>
                                    <div class="toggle-title font-weight-semibold">
                                        An Introduction to the Marketplaces for Authors
                                    </div>
                                </div>
                                <div class="toggle-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam
                                    cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero
                                    eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe,
                                    aperiam, nam unde quas beatae vero vitae nulla.</div>
                            </div>

                            <div class="toggle">
                                <div class="toggle-header justify-content-between flex-row-reverse">
                                    <div class="toggle-icon">
                                        <i class="toggle-closed icon-line-plus"></i>
                                        <i class="toggle-open icon-line-minus"></i>
                                    </div>
                                    <div class="toggle-title font-weight-semibold">
                                        How does the Tuts+ Premium affiliate program work?
                                    </div>
                                </div>
                                <div class="toggle-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam
                                    cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero
                                    eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe,
                                    aperiam, nam unde quas beatae vero vitae nulla.</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div> --}}

        </div>
    </section><!-- #content end -->

@endsection
