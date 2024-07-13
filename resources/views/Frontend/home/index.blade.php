@extends('Frontend.layouts.layout')

@section('title', 'home')

@section('content')

    <div class="banner-section position-relative d-flex align-items-center w-100">
        <div class="banner-left-image">
            <img style="width: 200px" src="{{ asset('images/banner-img-1.webp') }}" alt="salade banner">
        </div>
        <div class="banner-content position-absolute flex flex-column align-items-center text-center">
            <h1 class="mb-4" data-testid="banner-title">Order food online in UAE</h1>
            <div data-testid="address-selector-component" class="d-flex flex-row">
                <div class="sc-21989d75-2 kiLVkU FindLocator w-100 position-relative">
                    <div data-testid="search-box-component"
                        class="form-control w-100 d-flex justify-content-between align-items-center"><img
                            src="{{ asset('images/custom-location-pin.svg') }}" class="pin-img mr-2"
                            alt="pin location"><input type="text" id="search-box-map-first"
                            class="f-16 w-100 ps-1 pe-1 f-m-14" value="" style="border: none; outline: none;"
                            placeholder="Search for area, street name, landmark..." autocomplete="off"
                            data-testid="input-search-box-map-first"><img alt="locate me" data-testid="btn-locate-me"
                            src="{{ asset('images/locate-mp.svg') }}" width="45" class="clickable" height="45"></div>
                </div>
                <button class="btn ms-3 text-white">Let's go</button>
            </div>
        </div>
        <div class="banner-right-image">
            <img src="{{ asset('images/banner-img-2.webp') }}" alt="salade banner">
        </div>
    </div>

    <div class="content text-center p-5 m-5 pb-4 mb-2 mt-4 pt-4">
        <h2 class="sc-ba49971f-1 jYiWRg">Your everyday, right away</h2>
        <p class="sc-ba49971f-2 kxELPo">Order food and grocery delivery online from hundreds of restaurants and shops
            nearby.</p>
    </div>

    <div class="sc-91873ab1-0 dEQnHp w-100 m-auto links-only-container" data-testid="cms-download-apps">
        <div class="links m-auto w-50">
            <div class="d-flex d-sm-flex links-list justify-content-between"><a data-testid="playstore-link" href="#"
                    target="_blank" rel="noreferrer"><img class="w-100 d-block app-link"
                        src="{{ asset('images/logo_playstore.svg') }}" alt="play store"></a><a data-testid="appstore-link"
                    href="#" target="_blank" rel="noreferrer"><img class="w-100 d-block app-link"
                        src="{{ asset('images/logo_appstore.svg') }}" alt="apple store"></a><a
                    data-testid="huaweistore-link" href="#" target="_blank" rel="noreferrer"><img
                        class="w-100 d-block app-link" src="{{ asset('images/logo_huaweistore1.svg') }}"
                        alt="Huawei store"></a>
            </div>
        </div>
    </div>

    <div class="categories-section p-5 m-5 w-100">
        <div class="container">
            <div class="row w-75">
                <div class="col-md-6">
                    <div class="gnTvXE cnrhhY h-100 flex-grow-1 d-flex">
                        <div class="h-100 w-100 d-flex">
                            <div class="sc-c9721a8-0 plZyw w-100 image-container"><img
                                    src="{{ asset('images/food.png') }}"
                                    alt="Food image"></div>
                            <div class="markdown-rich-text-block">
                                <h3>Food</h3>
                                <p>Find deals, free delivery, and more from our restaurant partners.</p>
                                <p class="cta-text">Explore</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
