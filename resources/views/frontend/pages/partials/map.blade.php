<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-info">
                    <div class="ci-item">
                        <div class="ci-icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="ci-text">
                            <h5>Address</h5>
                            <p>
                                {!! App\Util\Util::getCData($components, 'Address', 'description') !!}
                            </p>
                        </div>
                    </div>
                    <div class="ci-item">
                        <div class="ci-icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="ci-text">
                            <h5>Phone</h5>
                            <ul>
                                <li>{!! App\Util\Util::getFormattedNumber($components, 'Contact Number', 'description') !!}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="ci-item">
                        <div class="ci-icon">
                            <i class="fa fa-headphones"></i>
                        </div>
                        <div class="ci-text">
                            <h5>Support</h5>
                            <p>
                                {!! App\Util\Util::getCData($components, 'Email', 'description') !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cs-map">
        {!! App\Util\Util::getCData($components, 'Map', 'description') !!}
    </div>
</section>
