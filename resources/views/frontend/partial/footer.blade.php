<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <div class="fs-about">
                    <div class="fs-logo">
                        <a href="index.html#">
                            <img src="{{ asset('static/logo.jpg') }}" alt="" />
                        </a>
                    </div>
                    <p>
                        {!! strip_tags(\App\Util\Util::getCData($components, 'Footer About', 'description')) !!}
                    </p>
                    <div class="fs-social">
                        <a target="_blank" href="{!! strip_tags(\App\Util\Util::getCData($components, 'Facebook Link', 'description')) !!}"><i class="fab fa-facebook-f"></i></a>
                        <a target="_blank" href="{!! strip_tags(\App\Util\Util::getCData($components, 'Instagram Link', 'description')) !!}"><i class="fab fa-instagram"></i></a>
                        <a target="_blank" href="{!! strip_tags(\App\Util\Util::getCData($components, 'LinkedIn Link', 'description')) !!}"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="fs-widget">
                    <h5>Links</h5>
                    <ul>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                        <li><a href="{{ route('property') }}">Properties</a></li>
                        <li><a href="{{ route('link-page', ['slug' => 'privacy-policy']) }}">Privacy Policy</a></li>
                        <li><a href="{{ route('link-page', ['slug' => 'terms-conditions']) }}">Terms & Conditions</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="fs-widget">
                    <h5>Newsletter</h5>
                    <p>Subscribe to our Newsletter.</p>
                    <form action="{{ route('index') }}" class="subscribe-form">
                        <input type="text" placeholder="Email" />
                        <button type="submit" class="site-btn">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="copyright-text">
            <p>
                Copyright &copy;
                <script>
                    document.write(new Date().getFullYear());
                </script>
                All rights reserved | {{ config('app.name') }}
            </p>
        </div>
    </div>
</footer>
