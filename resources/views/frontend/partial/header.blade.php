<div class="offcanvas-menu-wrapper">
    <div class="canvas-close">
        <span class="icon_close"></span>
    </div>
    <div class="logo">
        <a href="{{ route('index') }}">
            <script type="text/javascript"
                        src="https://ajax.cloudflare.com/cdn-cgi/scripts/04b3eb47/cloudflare-static/mirage2.min.js"></script>
            <img src="{{ asset('static/logo.png') }}" width="44%">
        </a>
    </div>
    <div class="menu_custom_wrapper">
        <nav class="slicknav_nav mobile_menu_custom" style="" aria-hidden="false" role="menu">
            <ul>
                <li><a href="{{ route('index') }}" role="menuitem">Home</a></li>
                <li><a href="{{ route('property') }}" role="menuitem">Properties</a></li>
                <li><a href="{{ route('about') }}" role="menuitem">About</a></li>
                <li><a href="{{ route('blog') }}" role="menuitem">Blog</a></li>
                <li><a href="{{ route('contact') }}" role="menuitem">Contact</a></li>
            </ul>
        </nav>
    </div>
    <div class="om-widget">
        <ul>
            <li><i class="icon_mail_alt"></i>{!! App\Util\Util::getCData($components, 'Email', 'description') !!}</li>
            <li><i class="fa-solid fa-phone"></i> {!! App\Util\Util::getFormattedNumber($components, 'Contact Number', 'description') !!}</li>
        </ul>
    </div>
    <div class="om-social">
        <a target="_blank" href="{!! strip_tags(\App\Util\Util::getCData($components, 'Facebook Link', 'description')) !!}"><i class="fab fa-facebook-f"></i></a>
        <a target="_blank" href="{!! strip_tags(\App\Util\Util::getCData($components, 'Instagram Link', 'description')) !!}"><i class="fab fa-instagram"></i></a>
        <a target="_blank" href="{!! strip_tags(\App\Util\Util::getCData($components, 'LinkedIn Link', 'description')) !!}"><i class="fab fa-linkedin"></i></a>
    </div>
</div>

<header class="header-section">
    <div class="hs-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo">
                        <a href="{{ route('index') }}">
                            <img src="{{ asset('static/logo.png') }}" alt="Nepal Awash" class="header_logo_custom">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="ht-widget">
                        <ul>
                            <li>
                                <i class="icon_mail_alt"></i>
                                {!! App\Util\Util::getCData($components, 'Email', 'description') !!}
                            </li>
                            <li>
                                <i class="fa-solid fa-phone"></i> {!! App\Util\Util::getFormattedNumber($components, 'Contact Number', 'description') !!}
                            </li>
                        </ul>
                        {{-- <a href="index.html#" class="hw-btn">Submit property</a> --}}
                    </div>
                </div>
            </div>
            <div class="canvas-open">
                <span class="icon_menu"></span>
            </div>
        </div>
    </div>
    <div class="hs-nav">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <nav class="nav-menu">
                        <ul>
                            <li class="{{ request()->routeIs('index') ? 'active' : '' }}"><a
                                    href="{{ route('index') }}">Home</a></li>
                            <li
                                class="{{ request()->routeIs('property') || request()->routeIs('single-property') ? 'active' : '' }}">
                                <a href="{{ route('property') }}">Properties</a>
                                <ul class="dropdown">
                                    <li><a href="{{ route('property', ['for' => 'Sale']) }}">For Sale</a></li>
                                    <li><a href="{{ route('property', ['for' => 'Rent']) }}">For Rent</a></li>
                                </ul>
                            </li>
                            <li class="{{ request()->routeIs('about') ? 'active' : '' }}"><a
                                    href="{{ route('about') }}">About</a></li>
                            <li
                                class="{{ request()->routeIs('blog') || request()->routeIs('single-blog') ? 'active' : '' }}">
                                <a href="{{ route('blog') }}">Blog</a>
                            </li>
                            <li class="{{ request()->routeIs('contact') ? 'active' : '' }}"><a
                                    href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="hn-social">
                        <a target="_blank" href="{!! strip_tags(\App\Util\Util::getCData($components, 'Facebook Link', 'description')) !!}"><i class="fab fa-facebook-f"></i></a>
                        <a target="_blank" href="{!! strip_tags(\App\Util\Util::getCData($components, 'Instagram Link', 'description')) !!}"><i class="fab fa-instagram"></i></a>
                        <a target="_blank" href="{!! strip_tags(\App\Util\Util::getCData($components, 'LinkedIn Link', 'description')) !!}"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
