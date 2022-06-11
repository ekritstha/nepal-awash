@extends('frontend.master')
@section('breadcrumb')
    @include('frontend.partial.breadcrumb', [
        'title1' => 'About Us',
        'title2' => 'About',
    ])
@endsection
@section('main-content')
    <section class="about-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-text">
                        <div class="at-title">
                            <h3>Welcome to Nepal Awash</h3>
                            <p>
                                {!! App\Util\Util::getCData($components, 'About Us', 'synopsis') !!}
                            </p>
                        </div>
                        <div class="at-feature">
                            <div class="af-item">
                                {!! App\Util\Util::getCData($components, 'About Us', 'description') !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-pic set-bg"
                        data-setbg="{{ asset('images/component/' . \App\Util\Util::getCData($components, 'About Us', 'image')) }}">

                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.pages.partials.why-us')
    @include('frontend.pages.partials.testimonial')
    @include('frontend.pages.partials.map')
@endsection
