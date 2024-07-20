@extends('Frontend.layouts.layout')

@section('title', 'become-a-driver')

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
            <h1 class="text-white">Hit the Road & Earn with Us!
                <br> <span class="text-white bold"> </span>
            </h1>
            <p class="text-white fs-5">
                We're looking for passionate individuals <br>
                who love good food and want to be their own boss! <br>
            </p>

            <form action="{{ route('drivers.store') }}" method="POST" class="form shadow-lg">
                @csrf

                <p class="title">Register</p>
                <p class="message">Ready to cruise the streets of Texas and deliver delicious food to hungry Howdy
                    users ?<br></p>

                <!-- Driver Information -->
                <h3>Driver Information</h3>

                <label>
                    <input required="" placeholder="" type="text" name="full_name" class="input">
                    <span>Full Name</span>
                    @if ($errors->has('full_name'))
                        <span class="text-danger">{{ $errors->first('full_name') }}</span>
                    @endif
                </label>

                <label>
                    <input required="" placeholder="" type="email" name="email" class="input">
                    <span>Email Address</span>
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </label>

                <label>
                    <input required="" placeholder="" name="phone" type="number" class="input">
                    <span>Phone Number</span>
                    @if ($errors->has('phone'))
                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                    @endif
                </label>

                <label>
                    <input required="" placeholder="" type="text" name="transportation_mode" class="input">
                    <span>Preferred Mode of Transportation (Car, Scooter, Bike)</span>
                    @if ($errors->has('transportation_mode'))
                        <span class="text-danger">{{ $errors->first('transportation_mode') }}</span>
                    @endif
                </label>

                <label class="form-group">
                    <select required class="form-control form-select" name="driver_license" id="driver_license">
                        <option value="none">Do you have a valid driver's license with a clean driving record?</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                    @if ($errors->has('driver_license'))
                        <span class="text-danger">{{ $errors->first('driver_license') }}</span>
                    @endif
                </label>

                <label class="form-group">
                    <select required class="form-control form-select" name="insurance_policy" id="insurance_policy">
                        <option value="none">Do you have a valid insurance policy for your chosen mode of transportation?
                        </option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                    @if ($errors->has('insurance_policy'))
                        <span class="text-danger">{{ $errors->first('insurance_policy') }}</span>
                    @endif
                </label>

                <!-- Availability -->
                <h3>Availability</h3>

                <label>
                    <span>What days of the week are you available to drive? (Select all that apply):</span><br>
                    <input type="checkbox" name="availability_days[]" value="Monday"> Monday<br>
                    <input type="checkbox" name="availability_days[]" value="Tuesday"> Tuesday<br>
                    <input type="checkbox" name="availability_days[]" value="Wednesday"> Wednesday<br>
                    <input type="checkbox" name="availability_days[]" value="Thursday"> Thursday<br>
                    <input type="checkbox" name="availability_days[]" value="Friday"> Friday<br>
                    <input type="checkbox" name="availability_days[]" value="Saturday"> Saturday<br>
                    <input type="checkbox" name="availability_days[]" value="Sunday"> Sunday<br>
                </label>

                <label>
                    <span>What are your preferred work hours? (Select all that apply):</span><br>
                    <input type="checkbox" name="work_hours[]" value="Morning"> Morning (8:00 AM - 12:00 PM)<br>
                    <input type="checkbox" name="work_hours[]" value="Afternoon"> Afternoon (12:00 PM - 5:00 PM)<br>
                    <input type="checkbox" name="work_hours[]" value="Evening"> Evening (5:00 PM - 9:00 PM)<br>
                    <input type="checkbox" name="work_hours[]" value="Late Night"> Late Night (9:00 PM - 2:00 AM)<br>
                </label>

                <!-- About You -->
                <h3>About You</h3>

                <label>
                    <textarea required="" placeholder="" name="about_you" class="input"></textarea>
                    <span>Tell us a little about yourself and why you'd be a great Howdy Driver Partner! (250 words or
                        less)</span>
                    @if ($errors->has('about_you'))
                        <span class="text-danger">{{ $errors->first('about_you') }}</span>
                    @endif
                </label>

                <label>
                    <textarea required="" placeholder="" name="motivation" class="input"></textarea>
                    <span>What motivates you to deliver food with Howdy? (100 words or less)</span>
                    @if ($errors->has('motivation'))
                        <span class="text-danger">{{ $errors->first('motivation') }}</span>
                    @endif
                </label>

                <!-- Additional Information -->
                <h3>Additional Information</h3>

                <label class="form-group">
                    <select required class="form-control form-select" name="experience" id="experience">
                        <option value="none">Do you have experience with food delivery services?</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                    @if ($errors->has('experience'))
                        <span class="text-danger">{{ $errors->first('experience') }}</span>
                    @endif
                </label>

                <label>
                    <input placeholder="" type="text" name="experience_details" class="input">
                    <span>If yes, please specify:</span>
                    @if ($errors->has('experience_details'))
                        <span class="text-danger">{{ $errors->first('experience_details') }}</span>
                    @endif
                </label>

                <p>By submitting this form, you agree to receive occasional updates and communication from Howdy Food
                    Express.</p>

                <button class="submit">Submit</button>
            </form>



        </div>

    </div>
    <div style="margin-top: 1200px" id="faq-section-driver">
        @include('Frontend.faqs.index')
    </div>
@endsection
