@extends('Frontend.layouts.layout')

@section('title', 'become-a-partner')

@section('content')
    {{-- @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ $message }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif --}}

    <div class="header-content position-relative overflow-visible w-100">
        <div style="height: 90vh" class="header-image overflow-hidden">
            <img style="" class="w-100 object-fit-cover" src="{{ asset('images/bg_landing_new_tlb.jpg') }}"
                alt="Become A Partner">
        </div>
        <div style="opacity: 0.6 !important" class="background-layer bg-dark position-absolute top-0 start-0 bottom-0 end-0">
        </div>
        <div class="header-form position-absolute ps-5 ms-5">
            <h1 class="text-white">Partner Up and Dish Up <br>
                Deliciousness! <br> <span class="text-white bold"></span></h1>
            <p class="text-white fs-5">
                We're looking for passionate individuals <br>
                who love good food and want to be their own boss! <br>
            </p>

            <form action="{{ route('restaurants.store') }}" method="POST" class="form shadow-lg"
                enctype="multipart/form-data">
                @csrf

                <p class="title">Register</p>
                <p class="message">Ready to join the Howdy family and share your <br>
                    culinary creations with a hungry audience across Texas?</p>
                <!-- Partner Information -->
                <h3>Partner Information</h3>
                <div class="flex">
                    <label>
                        <input required="" placeholder="" type="text" name="firstname" class="input">
                        <span>Firstname</span>
                        @if ($errors->has('firstname'))
                            <span class="text-danger">{{ $errors->first('firstname') }}</span>
                        @endif
                    </label>

                    <label>
                        <input required="" placeholder="" type="text" name="lastname" class="input">
                        <span>Lastname</span>
                        @if ($errors->has('lastname'))
                            <span class="text-danger">{{ $errors->first('lastname') }}</span>
                        @endif
                    </label>
                </div>

                <label>
                    <input required="" placeholder="" type="text" name="RestaurantName" class="input">
                    <span>Restaurant Name</span>
                    @if ($errors->has('RestaurantName'))
                        <span class="text-danger">{{ $errors->first('RestaurantName') }}</span>
                    @endif
                </label>

                <label>
                    <input required="" placeholder="" type="email" name="email" class="input">
                    <span>Email</span>
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </label>

                <label class="form-group">
                    <select required class="form-control form-select" name="type" id="type">
                        <option value="none">Restaurant Type</option>
                        <option value="mexican">Mexican</option>
                        <option value="italian">Italian</option>
                        <option value="bbq">BBQ</option>
                    </select>
                    @if ($errors->has('type'))
                        <span class="text-danger">{{ $errors->first('type') }}</span>
                    @endif
                </label>

                <label>
                    <input placeholder="" type="text" name="website" class="input">
                    <span>Website (optional)</span>
                    @if ($errors->has('website'))
                        <span class="text-danger">{{ $errors->first('website') }}</span>
                    @endif
                </label>

                <label>
                    <input required="" placeholder="" name="phone" type="number" class="input">
                    <span>Phone number</span>
                    @if ($errors->has('phone'))
                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                    @endif
                </label>

                <!-- New Fields -->
                <label>
                    <input required="" placeholder="" type="text" name="address" class="input">
                    <span>Restaurant Address</span>
                    @if ($errors->has('address'))
                        <span class="text-danger">{{ $errors->first('address') }}</span>
                    @endif
                </label>

                <label>
                    <input required="" placeholder="" type="text" name="city_state_zip" class="input">
                    <span>City, State, ZIP Code</span>
                    @if ($errors->has('city_state_zip'))
                        <span class="text-danger">{{ $errors->first('city_state_zip') }}</span>
                    @endif
                </label>

                <label>
                    <input required="" placeholder="" type="text" name="delivery_radius" class="input">
                    <span>Delivery Radius (estimated distance you can deliver)</span>
                    @if ($errors->has('delivery_radius'))
                        <span class="text-danger">{{ $errors->first('delivery_radius') }}</span>
                    @endif
                </label>

                <label class="form-group">
                    <select required class="form-control form-select" name="online_ordering" id="online_ordering">
                        <option value="none">Do you currently offer online ordering?</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                    @if ($errors->has('online_ordering'))
                        <span class="text-danger">{{ $errors->first('online_ordering') }}</span>
                    @endif
                </label>

                <label>
                    <textarea required="" placeholder="" name="about_business" class="input"></textarea>
                    <span>Tell us a bit about your restaurant's story and the unique flavors you offer! (250 words or
                        less)</span>
                    @if ($errors->has('about_business'))
                        <span class="text-danger">{{ $errors->first('about_business') }}</span>
                    @endif
                </label>

                <label>
                    <textarea required="" placeholder="" name="why_partnership" class="input"></textarea>
                    <span>What excites you about partnering with Howdy Food Express? (100 words or less)</span>
                    @if ($errors->has('why_partnership'))
                        <span class="text-danger">{{ $errors->first('why_partnership') }}</span>
                    @endif
                </label>

                <label class="form-group">
                    <select required class="form-control form-select" name="special_dietary" id="special_dietary">
                        <option value="none">Do you have any special dietary options available?</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                    @if ($errors->has('special_dietary'))
                        <span class="text-danger">{{ $errors->first('special_dietary') }}</span>
                    @endif
                </label>

                <label>
                    <input placeholder="" type="text" name="dietary_options" class="input">
                    <span>If yes, please specify:</span>
                    @if ($errors->has('dietary_options'))
                        <span class="text-danger">{{ $errors->first('dietary_options') }}</span>
                    @endif
                </label>

                <label>
                    <input type="file" name="logo" class="input">
                    <span>Upload Logo</span>
                    @if ($errors->has('logo'))
                        <span class="text-danger">{{ $errors->first('logo') }}</span>
                    @endif
                </label>

                <label>
                    <input placeholder="" type="text" name="social_media" class="input">
                    <span>Social Media Links</span>
                    @if ($errors->has('social_media'))
                        <span class="text-danger">{{ $errors->first('social_media') }}</span>
                    @endif
                </label>

                <button class="submit">Submit</button>
            </form>

        </div>

    </div>
    <div style="margin-top: 900px" id="faq-section-partner">
        @include('Frontend.faqs.index')
    </div>
@endsection
