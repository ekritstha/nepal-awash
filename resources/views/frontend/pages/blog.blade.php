@extends('frontend.master')
@section('breadcrumb')
    @include('frontend.partial.breadcrumb', [
        'title1' => 'Blog',
        'title2' => 'Blog',
    ])
@endsection
@section('main-content')
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-item-list">
                        @foreach ($blogs as $b)
                            @include('frontend.pages.partials._blog', ['b' => $b])
                        @endforeach
                    </div>
                    <div class="blog-pagination property-pagination">
                        {!! $blogs->links('pagination::tailwind') !!}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-sidebar">
                        <div class="follow-us">
                            <div class="section-title sidebar-title-b">
                                <h6>Follow us</h6>
                            </div>
                            <div class="fu-links">
                                {{-- <a href="blog.html#"><i class="fa fa-facebook"></i></a>
                                <a href="blog.html#" class="twitter"><i class="fa fa-twitter"></i></a>
                                <a href="blog.html#" class="youtube"><i class="fa fa-youtube-play"></i></a>
                                <a href="blog.html#" class="instagram"><i class="fa fa-instagram"></i></a> --}}

                                <a target="_blank" href="{!! strip_tags(\App\Util\Util::getCData($components, 'Facebook Link', 'description')) !!}"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" class="instagram" href="{!! strip_tags(\App\Util\Util::getCData($components, 'Instagram Link', 'description')) !!}"><i
                                        class="fab fa-instagram"></i></a>
                                <a target="_blank" class="linkedin" href="{!! strip_tags(\App\Util\Util::getCData($components, 'LinkedIn Link', 'description')) !!}"><i
                                        class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="feature-post">
                            <div class="section-title sidebar-title-b">
                                <h6>Our Properties</h6>
                            </div>
                            <div class="recent-post">
                                @foreach ($properties as $p)
                                    <div class="rp-item">
                                        @include('frontend.pages.partials._property', ['p' => $p])
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
