@extends('frontend.master')
@section('main-content')
    <section class="property-details-section">
        <div class="desktop_show_image">
            @if ($galleries->count() > 0)
                <div class="property-pic-slider owl-carousel">
                    <div class="ps-item">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-12 p-0">
                                            <div class="ps-item-inner large-item set-bg"
                                                data-setbg="{{ asset('images/gallery/' . $galleries[0]->image) }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        @foreach ($galleries as $g)
                                            @if ($g != $galleries[0])
                                                <div class="col-sm-6 p-0">
                                                    <div class="ps-item-inner set-bg"
                                                        data-setbg="{{ asset('images/gallery/' . $g->image) }}">
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-item">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-12 p-0">
                                            <div class="ps-item-inner large-item set-bg"
                                                data-setbg="{{ asset('images/gallery/' . $galleries[0]->image) }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        @foreach ($galleries as $g)
                                            @if ($g != $galleries[0])
                                                <div class="col-sm-6 p-0">
                                                    <div class="ps-item-inner set-bg"
                                                        data-setbg="{{ asset('images/gallery/' . $g->image) }}">
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="" style="width: 100%; padding-bottom: 3rem; display:flex; justify-content:center">
                    <img src="{{ asset('images/property/' . $property->image) }}" alt="">
                </div>
            @endif
        </div>
        <div class="mobile_show_image">
            <div style="width: 100%; padding-bottom: 3rem; display:flex; justify-content:center;">
                <img src="{{ asset('images/property/' . $property->image) }}" alt="">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="pd-text">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="pd-title">
                                    <div class="label">
                                        @if ($property->rent_sale == 'Rent')
                                            For Rent
                                        @else
                                            For Sale
                                        @endif
                                    </div>
                                    <div class="pt-price">
                                        @if ($property->rent_sale == 'Rent')
                                            Rs {{ $property->price_formatted }}
                                            <span> /month</span>
                                        @else
                                            Rs {{ $property->price_formatted }}
                                        @endif
                                    </div>
                                    <h3>{{ $property->title }}</h3>
                                    <p>
                                        <span class="icon_pin_alt"></span> {{ $property->location }},
                                        {{ $property->city }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="pd-social">
                                    <a href="javascript:void(0);" onclick="copyToClipboard()"><i
                                            class="fa fa-mail-forward"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="pd-board">
                            <div class="tab-board">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="javascript:void(0);"
                                            role="tab">Overview</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                        <div class="tab-details">
                                            <ul class="left-table">
                                                <li>
                                                    <span class="type-name">Property Type</span>
                                                    <span class="type-value">{{ $property->house_land }}</span>
                                                </li>
                                                <li>
                                                    <span class="type-name">Property ID</span>
                                                    <span class="type-value">{{ $property->property_id }}</span>
                                                </li>
                                                <li>
                                                    <span class="type-name">Price</span>
                                                    <span class="type-value">
                                                        @if ($property->rent_sale == 'Rent')
                                                            Rs {{ $property->price_formatted }}
                                                            <span> /month</span>
                                                        @else
                                                            Rs {{ $property->price_formatted }}
                                                        @endif
                                                    </span>
                                                </li>
                                                <li>
                                                    <span class="type-name">Contract type</span>
                                                    <span class="type-value">{{ $property->rent_sale }}</span>
                                                </li>
                                            </ul>
                                            <ul class="right-table">
                                                <li>
                                                    <span class="type-name">Lot Area</span>
                                                    <span class="type-value">{{ $property->lot_area_formatted }}
                                                        sq.</span>
                                                </li>
                                                <li>
                                                    <span class="type-name">Bedrooms</span>
                                                    <span
                                                        class="type-value">{{ $property->bedroom_formatted }}</span>
                                                </li>
                                                <li>
                                                    <span class="type-name">Bathrooms</span>
                                                    <span
                                                        class="type-value">{{ $property->bathroom_formatted }}</span>
                                                </li>
                                                <li>
                                                    <span class="type-name">Parking Space</span>
                                                    <span
                                                        class="type-value">{{ $property->parking_space_formatted }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pd-board">
                            <div class="tab-board">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="javascript:void(0);"
                                            role="tab">Description</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tabs-2" role="tabpanel">
                                        <div class="tab-desc">
                                            <p>
                                                {!! $property->description !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="property-sidebar">
                        <div class="single-sidebar">
                            <div class="section-title sidebar-title">
                                <h5>Similar Properties</h5>
                            </div>
                            <div class="top-agent">
                                @foreach ($others as $p)
                                    <div class="ta-item">
                                        @include('frontend.pages.partials._property', ['p' => $p])
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    {{-- <div class="single-sidebar">
                        <div class="section-title sidebar-title">
                            <h5>mortgage calculator</h5>
                        </div>
                        <form action="property-details.html#" class="calculator-form">
                            <div class="filter-input">
                                <p>Sale Price</p>
                                <input type="text" placeholder="$" />
                            </div>
                            <div class="filter-input">
                                <p>Precent Down</p>
                                <input type="text" placeholder="$" />
                            </div>
                            <div class="filter-input">
                                <p>Term(year)</p>
                                <input type="text" placeholder="Year" />
                            </div>
                            <div class="filter-input">
                                <p>Interest Rate in %</p>
                                <input type="text" placeholder="%" />
                            </div>
                            <button type="submit" class="site-btn">Calculate</button>
                        </form>
                    </div> --}}
                </div>
            </div>
        </div>
        </div>
    </section>
    @include('frontend.pages.partials.map')
@endsection
