@extends('backend.master')
@section('main-content')
    @include('backend.partial.breadcrumb', [
        'title1' => 'Show ' . ucwords($page),
        'title2' => ucwords($page),
        't' => 'create',
    ])
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">

                        <div class="card-body row">
                            <div class="col-md-6 order-md-1">
                                <img src="{{ asset('images/' . $page . '/' . $d->image) }}" alt="" width="95%">
                                <hr>
                                <div class="col-md-12" style="margin-top: 18px">
                                    <h4>Property Details</h4>
                                    <div class="row" style="margin-top: 12px">
                                        <div class="col-md-6">
                                            <p><span class="font-weight-bold">Property ID:</span> {{ $d->property_id }}
                                            </p>
                                            <p><span class="font-weight-bold">Location:</span> {{ $d->location }}</p>
                                            <p><span class="font-weight-bold">City:</span> {{ $d->city }}</p>
                                            <p><span class="font-weight-bold">Contact:</span> {{ $d->contact }}</p>
                                            <p><span class="font-weight-bold">Property Size:</span> {{ $d->lot_area }}sq.
                                            </p>
                                            {{-- <p><span class="font-weight-bold">Year:</span> {{ $d->year }}</p> --}}
                                            <p>
                                                <span class="font-weight-bold">Status:</span>
                                                @if ($d->status == 1)
                                                    <span class="badge badge-success">Available</span>
                                                @else
                                                    <span class="badge badge-danger">Not Available</span>
                                                @endif
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p>
                                                <span class="font-weight-bold">Price:</span>
                                                Rs. {{ is_null($d->price) ? $d->no_price : $d->price_formatted }}
                                            </p>
                                            <p><span class="font-weight-bold">Property Type:</span>
                                                {{ $d->house_land }}</p>
                                            <p><span class="font-weight-bold">For:</span> {{ $d->rent_sale }}</p>
                                            <p>
                                                <span class="font-weight-bold">Show on Slider:</span>
                                                @if ($d->slider == 1)
                                                    <span class="badge badge-success">Yes</span>
                                                @else
                                                    <span class="badge badge-danger">No</span>
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="col-md-12" style="margin-top: 18px">
                                    <h4>Additional Details</h4>
                                    <div class="row" style="margin-top: 12px">
                                        <div class="col-md-6">
                                            <p><span class="font-weight-bold">Bedrooms:</span> {{ $d->bedroom }}</p>
                                            <p><span class="font-weight-bold">Parking Space:</span>
                                                {{ $d->parking_space }}</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p><span class="font-weight-bold">Bathrooms:</span> {{ $d->bathroom }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 order-first order-md-2">
                                <h3>{{ $d->title }}</h3>
                                <hr>
                                <h4>Description</h4>
                                <div class="row" style="margin-top: 12px">
                                    <div class="col-md-12">
                                        {!! $d->description !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <section class="add-gallery">
                                <h3 class="m-0 text-dark">Gallery</h3>
                                <form role="form" action="{{ route('admin.gallery.store-image', $d->id) }}" method="post"
                                    enctype="multipart/form-data" class="dropzone">
                                    @csrf
                                </form>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        var ample = {
            current_id: {{ $d->id }}
        }
    </script>
@stop
