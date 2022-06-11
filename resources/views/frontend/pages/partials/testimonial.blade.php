<section class="testimonial-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h4>What our client says?</h4>
                </div>
            </div>
        </div>
        <div class="row testimonial-slider owl-carousel">
            @foreach ($testimonials as $t)
                <div class="col-lg-6">
                    <div class="testimonial-item">
                        <div class="ti-text">
                            <p>
                                {!! $t->description !!}
                            </p>
                        </div>
                        <div class="ti-author">
                            <div class="ta-pic">
                                <img src="{{ asset('images/testimonial/' . $t->image) }}" alt="" />
                            </div>
                            <div class="ta-text">
                                <h5>{{ $t->name }}</h5>
                                <div class="ta-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
