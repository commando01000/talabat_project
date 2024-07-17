@extends('Frontend.layouts.layout')

@section('title', 'home')

@section('content')

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

            <form class="form shadow-lg">
                <p class="title">Register </p>
                <p class="message">Ready to grow your business? </p>
                <div class="flex">
                    <label>
                        <input required="" placeholder="" type="text" class="input">
                        <span>Firstname</span>
                    </label>

                    <label>
                        <input required="" placeholder="" type="text" class="input">
                        <span>Lastname</span>
                    </label>
                </div>

                <label>
                    <input required="" placeholder="" type="email" class="input">
                    <span>Email</span>
                </label>

                {{-- <label>
                    <input required="" placeholder="" type="password" class="input">
                    <span>Password</span>
                </label>
                <label>
                    <input required="" placeholder="" type="password" class="input">
                    <span>Confirm password</span>
                </label> --}}
                {{-- dropdown menu containing Restaurant and shop --}}
                <label class="form-group">
                    <select required class="form-control form-select" name="type" id="type">
                        <option value="none">Business Type</option>
                        <option value="restaurant">Restaurant</option>
                        <option value="shop">Shop</option>
                    </select>
                </label>
                {{-- phone number --}}
                <label>
                    <input required="" placeholder="" type="number" class="input">
                    <span>Phone number</span>
                </label>
                {{-- checkbox --}}
                <label class="form-group">
                    <input checked="" class="check" type="checkbox">
                    <span>Get update via WhatsApp</span>
                </label>

                <button class="submit">Submit</button>
                <p class="signin">Already have an acount ? <a href="#">Signin</a> </p>
            </form>

        </div>

    </div>
    <div id="faq-section">
        @include('Frontend.faqs.index')
    </div>
@endsection
