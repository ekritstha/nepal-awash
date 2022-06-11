@extends('frontend.master')
@section('breadcrumb')
    @include('frontend.partial.breadcrumb', [
        'title1' => 'Property',
        'title2' => 'Property',
    ])
@endsection
@section('main-content')
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
                            <option value="{{ $city['name'] }}" {{ $city['name'] == $crit['city'] ? 'selected' : '' }}>
                                {{ $city['name'] }}</option>
                        @endforeach
                    </select>
                    <select class="sm-width" name="for">
                        <option value="">For</option>
                        <option value="Rent" {{ $crit['for'] == 'Rent' ? 'selected' : '' }}>Rent</option>
                        <option value="Sale" {{ $crit['for'] == 'Sale' ? 'selected' : '' }}>Sale</option>
                    </select>
                    <select class="sm-width" name="type">
                        <option value="">Property Type</option>
                        <option value="House" {{ $crit['type'] == 'House' ? 'selected' : '' }}>House</option>
                        <option value="Land" {{ $crit['type'] == 'Land' ? 'selected' : '' }}>Land</option>
                        <option value="Apartment" {{ $crit['type'] == 'Apartment' ? 'selected' : '' }}>Apartment</option>
                        <option value="Office" {{ $crit['type'] == 'Office' ? 'selected' : '' }}>Office</option>
                    </select>
                    <button type="submit" class="search-btn sm-width">Search</button>
                </form>
            </div>
        </div>
    </section>
    <section class="property-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h4>PROPERTIES</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($properties as $p)
                    <div class="col-lg-4 col-md-6">
                        @include('frontend.pages.partials._property', ['p' => $p])
                    </div>
                @endforeach
                <div class="col-lg-12">
                    <div class="property-pagination">
                        {!! $properties->links('pagination::tailwind') !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
