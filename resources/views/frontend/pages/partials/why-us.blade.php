<section class="chooseus-section spad set-bg"
    data-setbg="{{ asset('images/component/' . \App\Util\Util::getCData($components, 'Why Us Banner', 'image')) }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="chooseus-text">
                    <div class="section-title">
                        <h4>Why choose us</h4>
                    </div>
                    <p>
                        {!! App\Util\Util::getCData($components, 'Why Us Banner', 'description') !!}
                    </p>
                </div>
                <div class="chooseus-features">
                    @foreach ($whyus as $w)
                        <div class="cf-item">
                            <div class="cf-pic">
                                <img src="{{ asset('images/why-us/' . $w->icon) }}" alt="" />
                            </div>
                            <div class="cf-text">
                                <h5>{{ $w->title }}</h5>
                                <p>
                                    {!! $w->description !!}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
