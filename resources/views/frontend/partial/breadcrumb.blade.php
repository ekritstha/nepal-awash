<section class="breadcrumb-section spad set-bg"
    data-setbg="{{ asset('images/component/' . \App\Util\Util::getCData($components, 'Breadcrumb', 'image')) }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h4>{{ $title1 }}</h4>
                    <div class="bt-option">
                        <a href="{{ route('index') }}"><i class="fa fa-home"></i> Home</a>
                        <span>{{ $title2 }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
