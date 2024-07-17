@extends('Frontend.layouts.layout')

@section('title', 'home')

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
        <div class="header-form position-absolute ps-5 ms-5">
            <h1 class="text-white">Grow your business <br>
                online with <span class="text-white bold">talabat!</span></h1>
            <p class="text-white fs-5">
                Partner with us to reach more customers,<br>
                earn more money and grow your business <br>
                online - your success story begins here
            </p>

            <form class="form" action="{{ route('restaurants.store') }}" method="POST">
                @csrf
                <p class="title">Register </p>
                <p class="message">Ready to grow your business? </p>
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
                    <input required="" placeholder="" type="email" name="email" class="input">
                    <span>Email</span>
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </label>


                <label class="form-group">
                    <select required class="form-control form-select" name="type" id="type">
                        <option value="none">Business Type</option>
                        <option value="restaurant">Restaurant</option>
                        <option value="shop">Shop</option>
                    </select>
                    @if ($errors->has('type'))
                        <span class="text-danger">{{ $errors->first('type') }}</span>
                    @endif
                </label>
                {{-- phone number --}}
                <label>
                    <input required="" placeholder="" name="phone" type="number" class="input">
                    <span>Phone number</span>
                    @if ($errors->has('phone'))
                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                    @endif
                </label>



                <button class="submit">Submit</button>

            </form>

        </div>
    </div>
    {{-- @include('Frontend.faqs.index') --}}
@endsection
