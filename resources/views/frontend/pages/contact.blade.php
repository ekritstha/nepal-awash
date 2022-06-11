@extends('frontend.master')
@section('breadcrumb')
    @include('frontend.partial.breadcrumb', [
        'title1' => 'Contact Us',
        'title2' => 'Contact',
    ])
@endsection
@section('main-content')
    <section class="contact-form-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cf-content">
                        <div class="cc-title">
                            <h4>Contact form</h4>
                            <p>
                                {!! App\Util\Util::getCData($components, 'Contact Us', 'description') !!}
                            </p>
                        </div>
                        @include('message.messages')
                        <form method="POST" action="{{ route('sendmail') }}" class="cc-form">
                            {{ csrf_field() }}
                            <div class="group-input">
                                <input type="text" placeholder="Name" name="name" value="{{ old('name') }}" />
                                <input type="email" placeholder="Email" name="email" value="{{ old('email') }}" />
                                <input type="number" placeholder="Phone Number" name="phone" value="{{ old('phone') }}" />
                            </div>
                            <textarea placeholder="Message" name="message"></textarea>
                            <div>
                                <div class=" g-recaptcha" data-sitekey="6Le0SV0aAAAAALFDsZ-TITRnB1wQqckAJsWeo-zi">
                                </div>
                            </div>
                            <button type="submit" class="site-btn">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('frontend.pages.partials.map')
@endsection
