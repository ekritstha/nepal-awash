@extends('frontend.master')
@section('breadcrumb')
    @include('frontend.partial.breadcrumb', [
        'title1' => 'Blog',
        'title2' => 'Blog',
    ])
@endsection
@section('main-content')
    <section class="blog-details-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto p-0">
                    <div class="blog-details-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="container">
                                    <div class="bh-text">
                                        <h4>{{ $blog->title }}</h4>
                                        <ul>
                                            <li>by <span>{{ $blog->author }}</span></li>
                                            <li>{{ $blog->date_formatted }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bc-details">
                            <div class="bc-pic" style="width: 100%">
                                <img src="{{ asset('images/blog/' . $blog->image) }}" alt=""
                                    style="width:100% !important" />
                            </div>
                        </div>
                        <div class="bc-desc">
                            {!! $blog->description !!}
                        </div>
                        <div class="bc-widget">
                            <h4>Related posts</h4>
                            <div class="related-post">
                                <div class="row">
                                    @foreach ($others as $b)
                                        <div class="col-md-4 col-sm-6">
                                            <div class="related-item">
                                                <div class="ri-pic">
                                                    <img src="{{ asset('images/blog/' . $b->image) }}" alt="" />
                                                </div>
                                                <div class=" ri-text">
                                                    <h6>
                                                        {{ $b->title }}
                                                    </h6>
                                                    <span>{{ $b->date_formatted }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
