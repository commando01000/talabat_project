@extends('Frontend.layouts.layout')

@section('title', 'home')

@php
    use Illuminate\Support\Str;
@endphp

@section('content')

    <div class="banner-section position-relative d-flex align-items-center w-100 overflow-hidden">

        <div id="carouselExampleAutoplaying" class="carousel position-absolute top-0 start-0 bottom-0 end-0 slide"
            data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img style="background-clip: text;color: transparent; max-height: 800px !important;min-height : 800px !important; background-position: center"
                        src="{{ asset('images/pexels-rdne-5779781.jpg') }}" class="d-block object-fit-cover w-100"
                        alt="...">
                </div>
                <div class="carousel-item">
                    <img style="-webkit-background-clip: text; max-height: 800px !important;min-height : 800px !important; background-position: center"
                        src="{{ asset('images/pexels-rdne-5779748 (1).jpg') }}" class="d-block object-fit-cover w-100"
                        alt="...">
                </div>
                <div class="carousel-item">
                    <img style="-webkit-background-clip: text; max-height: 800px !important;min-height : 800px !important; background-position: center"
                        src="{{ asset('images/pexels-rdne-5779786.jpg') }}" class="d-block object-fit-cover w-100"
                        alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="banner-content position-absolute flex flex-column align-items-center text-center">
            <h1 style="font-size: 4rem; font-weight: bold;" class="mb-4 text-white" data-testid="banner-title">Order
                food online in UAE</h1>
            <div style="min-width: 500px !important" data-testid="address-selector-component"
                class="address-selector-component d-flex flex-row">
                <div class="sc-21989d75-2 kiLVkU FindLocator w-100 position-relative">
                    <div data-testid="search-box-component"
                        class="form-control w-100 d-flex justify-content-between align-items-center"><img
                            src="{{ asset('images/custom-location-pin.svg') }}" class="pin-img mr-2"
                            alt="pin location"><input type="text" id="search-box-map-first"
                            class="f-16 w-100 ps-1 pe-1 f-m-14" value="" style="border: none; outline: none;"
                            placeholder="Search by Cuisine, Chef, Truck, or Dish ..." autocomplete="off"
                            data-testid="input-search-box-map-first"><img alt="locate me" data-testid="btn-locate-me"
                            src="{{ asset('images/locate-mp.svg') }}" width="45" class="clickable" height="45"></div>
                </div>
                <button class="btn ms-3 text-white">Let's go</button>
            </div>
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

    <div class="categories-section overflow-hidden p-5 m-5">
        <div class="container">
            <div class="row g-4 flex-wrap m-auto w-75">
                <div class="col-lg-6 col-md-12">
                    <div class="gnTvXE cnrhhY d-flex">
                        <div class="w-100 d-flex">
                            <div style="background-color: #ED613D" class="sc-c9721a8-0 plZyw w-100 image-container"><img
                                    class="w-100" src="{{ asset('images/food.png') }}" alt="Food image"></div>
                            <div class="markdown-rich-text-block">
                                <h3>Cuisine</h3>
                                {{ Str::limit(
                                    'Howdy offers something for every craving! Explore a vast selection of food vendors, from classic comfort food to unique culinary creations.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     Discover trending dishes and hidden gems in your area.',
                                    100,
                                ) }}
                                <p class="cta-text">Explore</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="gnTvXE cnrhhY d-flex">
                        <div class="w-100 d-flex">
                            <div style="background-color: #00B68D" class="sc-c9721a8-0 plZyw w-100 image-container"><img
                                    class="w-100" src="{{ asset('images/grocery.png') }}" alt="Food image"></div>
                            <div class="markdown-rich-text-block">
                                <h3>Specials</h3>
                                {{ Str::limit(
                                    'Don’t miss out on exclusive deals and exciting offers! Check out the "Specials" section to find limited-time promotions from your favorite food trucks and restaurants',
                                    100,
                                ) }}
                                <p class="cta-text">Explore</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="gnTvXE cnrhhY d-flex">
                        <div class="w-100 d-flex">
                            <div style="background-color: #E93C55" class="sc-c9721a8-0 plZyw w-100 image-container"><img
                                    class="w-100" src="{{ asset('images/flowers.png') }}" alt="Food image"></div>
                            <div class="markdown-rich-text-block">
                                <h3>Chefs & Trucks</h3>
                                {{ Str::limit(
                                    'Go beyond the menu! Follow the culinary journeys of your favorite food trucks and chefs. See their latest creations, special menus, and upcoming events, all in one place.',
                                    100,
                                ) }}
                                <p class="cta-text">Explore</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="gnTvXE cnrhhY d-flex">
                        <div class="w-100 d-flex">
                            <div style="background-color: #3BA1CE" class="sc-c9721a8-0 plZyw w-100 image-container"><img
                                    class="w-100" src="{{ asset('images/grocery.png') }}" alt="Food image"></div>
                            <div class="markdown-rich-text-block">
                                <h3>Dietary Preferences</h3>
                                {{ Str::limit(
                                    'Howdy empowers you to make informed choices. Indicate any dietary restrictions or preferences you may have to find restaurants and dishes that cater to your needs.',
                                    100,
                                ) }}
                                <p class="cta-text">Explore</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="join_us" class="m-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="text-center">Join us</h3>
                    <p class="text-center">Be a part of the talabat story.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center m-auto gy-2 w-100">
                <div class="col-lg-5 col-md-12">
                    <div class="gnTvXE cnrhhY d-flex">
                        <div class="w-100 d-flex">
                            <div style="background-color: #ED613D" class="sc-c9721a8-0 plZyw w-100 image-container"><img
                                    class="w-100" src="{{ asset('images/become-a-partner.webp') }}" alt="Food image">
                            </div>
                            <div class="markdown-rich-text-block">
                                <h3>Become a partner</h3>
                                <p>Build your career
                                </p>
                                <div>
                                    <button
                                        class="button-module_button__oNg2G button-module_button-primary__i52py button-module_button-size-sm__cWD2n">Find
                                        out more</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="gnTvXE cnrhhY d-flex">
                        <div class="w-100 d-flex">
                            <div style="background-color: #ED613D" class="sc-c9721a8-0 plZyw w-100 image-container"><img
                                    class="w-100" src="{{ asset('images/career-with-us.webp') }}" alt="Food image">
                            </div>
                            <div class="markdown-rich-text-block">
                                <h3>Build your career</h3>
                                <p>Find deals, free delivery, and more from our restaurant partners.</p>
                                <div>
                                    <button
                                        class="button-module_button__oNg2G button-module_button-primary__i52py button-module_button-size-sm__cWD2n">Find
                                        jobs</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="cities" class="m-5 p-5">
        <div class="container">
            <h2>Howdy Texas: "Howdy Y'all! We Deliver in These Texas Cities:"</h2>
            <div class="row gy-3">
                <div class="col-md-4">
                    <div class="card p-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h3>Bellaire</h3>
                                <p>See more places</p>
                            </div>
                            <div>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h3>Cypress</h3>
                                <p>See more places</p>
                            </div>
                            <div>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card justify-content-between p-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h3>Deer Park</h3>
                                <p>See more places</p>
                            </div>
                            <div>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card justify-content-between p-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h3>Galveston</h3>
                                <p>See more places</p>
                            </div>
                            <div>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card justify-content-between p-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h3>Houston</h3>
                                <p>See more places</p>
                            </div>
                            <div>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card justify-content-between p-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h3>Humble</h3>
                                <p>See more places</p>
                            </div>
                            <div>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card justify-content-between p-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h3>Katy</h3>
                                <p>See more places</p>
                            </div>
                            <div>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card justify-content-between p-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h3>Kingwood</h3>
                                <p>See more places</p>
                            </div>
                            <div>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card justify-content-between p-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h3>League City</h3>
                                <p>See more places</p>
                            </div>
                            <div>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card justify-content-between p-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h3>Missouri City</h3>
                                <p>See more places</p>
                            </div>
                            <div>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card justify-content-between p-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h3>Pasadena</h3>
                                <p>See more places</p>
                            </div>
                            <div>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card justify-content-between p-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h3>Pearland</h3>
                                <p>See more places</p>
                            </div>
                            <div>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card justify-content-between p-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h3>Porter Heights</h3>
                                <p>See more places</p>
                            </div>
                            <div>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card justify-content-between p-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h3>Richmond</h3>
                                <p>See more places</p>
                            </div>
                            <div>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card justify-content-between p-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h3>Rosenberg</h3>
                                <p>See more places</p>
                            </div>
                            <div>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card justify-content-between p-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h3>South Houston</h3>
                                <p>See more places</p>
                            </div>
                            <div>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card justify-content-between p-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h3>Spring</h3>
                                <p>See more places</p>
                            </div>
                            <div>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card justify-content-between p-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h3>Sugar Land</h3>
                                <p>See more places</p>
                            </div>
                            <div>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="discover-our-new-tablet-app">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img style="height: 400px" class="" src="{{ asset('images/app_view_iphone_en.png') }}"
                        alt="">
                </div>
                <div class="col-md-6 pt-4">
                    <h1>Discover the new talabat app</h1>
                    <p>Get what you need, when you need it.</p>
                    <br>
                    <div class="w-100 d-flex justify-content-around">
                        <a href="#"><img class="w-75" src="{{ asset('images/logo_appstore.svg') }}"
                                alt=""></a>
                        <a href="#"><img class="w-75" src="{{ asset('images/logo_playstore.svg') }}"
                                alt=""></a>
                        <a href="#"><img class="w-75" src="{{ asset('images/logo_huaweistore1.svg') }}"
                                alt=""></a>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
