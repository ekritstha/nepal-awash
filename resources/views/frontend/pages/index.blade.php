@extends('frontend.master')
@section('main-content')
    <section class="hero-section">
        <div class="container">
            <div class="hs-slider owl-carousel">
                @foreach ($sliders as $slider)
                    <div class="hs-item set-bg" data-setbg="{{ asset('images/property/' . $slider->image) }}">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="hc-inner-text">
                                    <div class="hc-text">
                                        <h4>{{ $slider->title }}</h4>
                                        <p>
                                            <span class="icon_pin_alt"></span> {{ $slider->location }}
                                        </p>
                                        @if ($slider->rent_sale == 'Rent')
                                            <div class="label">
                                                For Rent
                                            </div>
                                            <h5>Rs {{ $slider->price_formatted }}<span> /month</span></h5>
                                        @else
                                            <div class="label">
                                                For Sale
                                            </div>
                                            <h5>Rs {{ $slider->price_formatted }}</h5>
                                        @endif
                                    </div>
                                    <div class="hc-widget">
                                        <ul>
                                            <li><i class="fa fa-object-group"></i> {{ $slider->lot_area_formatted }}</li>
                                            <li><i class="fa fa-bathtub"></i> {{ $slider->bathroom_formatted }}</li>
                                            <li><i class="fa fa-bed"></i> {{ $slider->bedroom_formatted }}</li>
                                            <li><i class="fa fa-automobile"></i> {{ $slider->parking_space_formatted }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="search-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="section-title">
                        <h4>Where would you rather live?</h4>
                    </div>
                </div>
            </div>
            <div class="search-form-content">
                <form action="{{ route('property') }}" method="get" class="filter-form">
                    <select class="sm-width" name="city">
                        <option value="">Choose a City</option>
                        @foreach ($cities as $city)
                            <option value="{{ $city->name }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
                    <select class="sm-width" name="for">
                        <option value="">For</option>
                        <option value="Rent">Rent</option>
                        <option value="Sale">Sale</option>
                    </select>
                    <select class="sm-width" name="type">
                        <option value="">Property Type</option>
                        <option value="House">House</option>
                        <option value="Land">Land</option>
                    </select>
                    <button type="submit" class="search-btn sm-width">Search</button>
                </form>
            </div>
        </div>
    </section>

    <section class="property-section latest-property-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title">
                        <h4>Latest PROPERTY</h4>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="property-controls">
                        <ul>
                            <li data-filter="all">All</li>
                            <li data-filter=".Apartment">Apartment</li>
                            <li data-filter=".House">House</li>
                            <li data-filter=".Land">Land</li>
                            <li data-filter=".Office">Office</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row property-filter">
                @foreach ($latest as $p)
                    <div class="col-lg-4 col-md-6 mix all {{ $p->house_land }}">
                        @include('frontend.pages.partials._property', ['p' => $p])
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @include('frontend.pages.partials.why-us')
    @include('frontend.pages.partials.testimonial')
    @include('frontend.pages.partials.map')
@endsection
