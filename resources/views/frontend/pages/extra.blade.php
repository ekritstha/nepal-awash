@extends('frontend.master')
@section('breadcrumb')
    <?php
    $a = \App\Util\Util::getCData($components, $slug, 'title');
    ?>
    @if ($a != 'Coming Soon...')
        @include('frontend.partial.breadcrumb', [
            'title1' => \App\Util\Util::getCData($components, $slug, 'title'),
            'title2' => null,
        ])
    @else
        @include('frontend.partial.breadcrumb', [
            'title1' => 'Opps not found',
            'title2' => null,
        ])
    @endif
@endsection
@section('main-content')

    <?php
    $a = \App\Util\Util::getCData($components, $slug, 'title');
    ?>
    @if ($a != 'Coming Soon...')
        <section class="space-ptb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        {!! \App\Util\Util::getCData($components, $slug, 'description') !!}
                    </div>
                </div>
            </div>
        </section>
    @else
        <section class="space-ptb bg-holder">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-6">
                        <div class="error-404">
                            <h1>404</h1>
                            <strong>Oops – no one seems to be home.</strong>
                            <span>In the meantime try a <a href="{{ route('index') }}" class="a-404"> search for
                                    homes </a> </span>
                        </div>
                    </div>
                    <div class="col-md-6 text-center mt-5 mt-md-0 position-relative overflow-hidden">
                        <img class="img-fluid house-animation" src="{{ asset('frontend/images/error/01.png') }}" alt="">
                        <img class="img-fluid cloud cloud-01" src="{{ asset('frontend/images/error/cloud-01.png') }}"
                            alt="">
                        <img class="img-fluid cloud cloud-02" src="{{ asset('frontend/images/error/cloud-02.png') }}"
                            alt="">
                        <img class="img-fluid cloud cloud-03" src="{{ asset('frontend/images/error/cloud-03.png') }}"
                            alt="">
                        <img class="img-fluid cloud cloud-04" src="{{ asset('frontend/images/error/cloud-04.png') }}"
                            alt="">
                        <img class="img-fluid mt-5" src="{{ asset('frontend/images/error/02.png') }}" alt="">
                    </div>
                </div>
            </div>
        </section>
    @endif


@stop
