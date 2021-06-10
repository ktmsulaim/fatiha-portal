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

                                    <div class="tabs tabs-bordered clearfix" id="tab-2">

                                        <ul class="tab-nav clearfix">
                                            <li><a href="#personal">Personal Info</a></li>
                                            <li><a href="#course">Course selection</a></li>
                                        </ul>
        
                                        <div class="tab-container">
        
                                            <div class="tab-content clearfix" id="personal">
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
                                            </div>
                                            <div class="tab-content clearfix" id="course">
                                                <div class="form-group">
                                                    <label for="class">Grade<small
                                                            class="text-danger">*</small></label>
                                                    <select name="class" id="class" class="form-control" required>
                                                        <option value="">Select a grade</option>
                                                        @for ($i = 1; $i <= 10; $i++)
                                                            <option value="{{ $i }}">Grade {{ $i }}</option>
                                                        @endfor
                                                    </select>
            
                                                    @error('class')
                                                        <p class="invalid-feedback d-block mb-0">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                               
                                                <div class="form-group">
                                                    <label for="time_preference">Time preference (IST)<small
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
                                                    <label for="phone">Phone<small class="text-danger">*</small></label>
                                                    <input type="tel" name="phone" id="phone"
                                                        class="form-control @error('phone') error  @enderror"
                                                        value="{{ old('phone') }}" required>
            
                                                    @error('whatsapp')
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
    <section class="bg-light" id="content">

        <div class="content-wrap py-0">
            <div class="row align-items-stretch">

                <div class="col-lg-4 dark col-padding overflow-hidden" style="background-color: #1abc9c;">
                    <div>
                        <h3 class="text-uppercase" style="font-weight: 600;">Why Fatiha?</h3>
                        <p class="text-white" style="line-height: 1.8;">Fatiha virtual Madrsa is unique in many ways. At fatiha, we follow a distinctive curriculum that focuses on the practical application of the ideas. We repeatedly assess the practical knowledge of our students, motivate and develop them as true believers!</p>
                        <a href="javascript:void(0)" class="button button-border button-light button-rounded text-uppercase m-0">Read More</a>
                        <i class="icon-bulb bgicon"></i>
                    </div>
                </div>

                <div class="col-lg-4 dark col-padding overflow-hidden" style="background-color: #34495e;">
                    <div>
                        <h3 class="text-uppercase" style="font-weight: 600;">Our Mission</h3>
                        <p class="text-white" style="line-height: 1.8;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus voluptate alias molestiae aliquid possimus reiciendis, aperiam sit quisquam incidunt earum, assumenda ut soluta perspiciatis est libero voluptatum illum amet quidem!</p>
                        <a href="javascript:void(0)" class="button button-border button-light button-rounded text-uppercase m-0">Read More</a>
                        <i class="icon-cog bgicon"></i>
                    </div>
                </div>

                <div class="col-lg-4 dark col-padding overflow-hidden" style="background-color: #e74c3c;">
                    <div>
                        <h3 class="text-uppercase" style="font-weight: 600;">What you get</h3>
                        <p class="text-white" style="line-height: 1.8;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae minima corporis natus earum deleniti fugit ad aut consequuntur voluptatum dicta. Ipsum voluptate sit minima ipsam repudiandae minus cumque corrupti quos.</p>
                        <a href="javascript:void(0)" class="button button-border button-light button-rounded text-uppercase m-0">Read More</a>
                        <i class="icon-thumbs-up bgicon"></i>
                    </div>
                </div>

                <div class="clear"></div>

            </div>
            {{-- <div class="container">
                <div class="row topmargin">
                    <div class="col-md-5 offset-md-1">
                        <h3 class="text-dark"><i class="icon-line-circle-check color mr-1 position-relative"
                                style="top: 2px"></i> Why do you choose Fatiha?</h3>
                        <p>Fatiha virtual Madrsa is unique in many ways. 
                            At fatiha, we follow a distinctive curriculum that focuses on the practical application of the ideas. We repeatedly assess the practical knowledge of our students, motivate and develop them as true believers!
                        </p>
                    </div>
                    <div class="col-md-5 pl-md-5">
                        <h3 class="text-dark"><i class="icon-line-circle-check color mr-1 position-relative"
                                style="top: 2px"></i> How we do?</h3>
                        <p>The teaching and mentoring in Fatiha online school is based on the Quranic code of conduct which is formed 7 key behaviors:</p>
                            <ul>
                                <li>Sidq (Honesty)</li>
                                <li>Tawalu’ (Humility)</li>
                                <li>Amana (trustworthy)</li>
                                <li>Shukr (gratitude)</li>
                                <li>Swabr (patience)</li>
                                <li>Istiqama (steadfastness)</li>
                                <li>Hayaa’ (modesty)</li>
                            </ul>
                    </div>
                </div>
            </div> --}}

            <div class="container clearfix">

                <div class="row align-items-center topmargin-lg bottommargin-sm gutter-40 col-mb-50">
                    <div class="col-md-5">
                        <img data-animate="fadeInLeftBig" src="{{ asset('assets/website/images/lamp.jpg') }}" alt="Man reciting quran" class="fadeInLeftBig animated">
                    </div>

                    <div class="col-md-7">
                        <div class="heading-block">
                            <h2>Fatiha Online Islamic School</h2>
                            <span>Your time to learn <b>Islamics Online</b></span>
                        </div>

                        <p>
                            Fatiha online is one of the modern virtual Islamic schools which provides high quality online curriculum in Islamic education and training. As an outstanding Islamic virtual school, Fatiha focuses on the spiritual, cognitive and behavioral development of the students. We have a dedicated team of passionate educators who work hard to ensure the quality teaching and mentoring.
                        </p>
                        <p>In Fatiha, your child will experience a friendly learning environment. The dedicated mentors, who are among the leading Islamic Scholars from different parts of the world, well trained on online education and with adequate knowledge about online learning tools will educate, train and assess your wards in order to assure a quality development.</p>
                    </div>
                </div>

            </div>

            <div class="clear"></div>

        </div>
    </section><!-- #content end -->
    <div class="section bg-white topmargin-lg">
        <div class="container clearfix">

            <div class="heading-block center">
                <h2>How we do?</h2>
                <span>The teaching and mentoring in Fatiha online school is based on the Quranic code of conduct which is formed 7 key behaviors:</span>
            </div>

            <div class="row justify-content-center col-mb-50">
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box fbox-sm fbox-plain fadeIn animated" data-animate="fadeIn">
                        <div class="fbox-icon">
                            <a href="javascript:void(0)"><i>1</i></a>
                        </div>
                        <div class="fbox-content">
                            <h3>Sidq (Honesty)</h3>
                            <p>Stay tuned...</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box fbox-sm fbox-plain fadeIn animated" data-animate="fadeIn" data-delay="200">
                        <div class="fbox-icon">
                            <a href="javascript:void(0)"><i>2</i></a>
                        </div>
                        <div class="fbox-content">
                            <h3>Tawalu’ (Humility)</h3>
                            <p>Stay tuned...</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box fbox-sm fbox-plain fadeIn animated" data-animate="fadeIn" data-delay="400">
                        <div class="fbox-icon">
                            <a href="javascript:void(0)"><i>3</i></a>
                        </div>
                        <div class="fbox-content">
                            <h3>Amana (Trustworthy)</h3>
                            <p>Stay tuned...</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box fbox-sm fbox-plain fadeIn animated" data-animate="fadeIn" data-delay="600">
                        <div class="fbox-icon">
                            <a href="javascript:void(0)"><i>4</i></a>
                        </div>
                        <div class="fbox-content">
                            <h3>Shukr (Gratitude)</h3>
                            <p>Stay tuned...</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box fbox-sm fbox-plain fadeIn animated" data-animate="fadeIn" data-delay="600">
                        <div class="fbox-icon">
                            <a href="javascript:void(0)"><i>5</i></a>
                        </div>
                        <div class="fbox-content">
                            <h3>Swabr (patience)</h3>
                            <p>Stay tuned...</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box fbox-sm fbox-plain fadeIn animated" data-animate="fadeIn" data-delay="600">
                        <div class="fbox-icon">
                            <a href="javascript:void(0)"><i>6</i></a>
                        </div>
                        <div class="fbox-content">
                            <h3>Istiqama (Steadfastness)</h3>
                            <p>Stay tuned...</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box fbox-sm fbox-plain fadeIn animated" data-animate="fadeIn" data-delay="600">
                        <div class="fbox-icon">
                            <a href="javascript:void(0)"><i>7</i></a>
                        </div>
                        <div class="fbox-content">
                            <h3>Hayaa’ (Modesty)</h3>
                            <p>Stay tuned...</p>
                        </div>
                    </div>
                </div>

                
            </div>

        </div>
    </div>
@endsection
