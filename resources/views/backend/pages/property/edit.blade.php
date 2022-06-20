@extends('backend.master')
@section('main-content')
    @include('backend.partial.breadcrumb', [
        'title1' => 'Edit ' . ucwords($page),
        'title2' => ucwords($page),
        't' => 'list',
    ])
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="{{ route('admin.' . $page . '.update', $data->id) }}" method="post"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('patch') }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Title {!! \App\Util\Util::htmlReq() !!}</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        value="{{ $data->title }}" required>
                                </div>
                                <input type="hidden" class="form-control" id="title" name="slug"
                                    value="{{ $data->title }}" required>
                                <div class="form-group">
                                    <label for="name">City {!! \App\Util\Util::htmlReq() !!}</label>
                                    <select name="city" class="form-control" id="" required>
                                        <option value="" disabled selected>Choose City</option>
                                        @foreach ($cities as $city)
                                            <option value="{{ $city->name }}"
                                                {{ $city->name == $data->city ? 'selected' : '' }}>{{ $city->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name">Location {!! \App\Util\Util::htmlReq() !!}</label>
                                    <input type="number" class="form-control" id="location" name="location"
                                        value="{{ $data->location }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="contact">Contact Number {!! \App\Util\Util::htmlReq() !!}</label>
                                    <input type="text" class="form-control" id="contact" name="contact"
                                        value="{{ $data->contact }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="name">Price {!! \App\Util\Util::htmlReq() !!}</label>
                                    <input type="number" class="form-control" id="price" name="price"
                                        value="{{ $data->price }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="name">Lot Area {!! \App\Util\Util::htmlReq() !!}</label>
                                    <input type="number" class="form-control" id="lot_area" name="lot_area"
                                        value="{{ $data->lot_area }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="name">Bathroom {!! \App\Util\Util::htmlReq() !!}</label>
                                    <input type="number" class="form-control" id="bathroom" name="bathroom"
                                        value="{{ $data->bathroom }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="name">Bedroom {!! \App\Util\Util::htmlReq() !!}</label>
                                    <input type="number" class="form-control" id="bedroom" name="bedroom"
                                        value="{{ $data->bedroom }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="name">Parking Space {!! \App\Util\Util::htmlReq() !!}</label>
                                    <input type="number" class="form-control" id="parking_space" name="parking_space"
                                        value="{{ $data->parking_space }}" required>
                                    required>
                                </div>

                                {{-- <div class="form-group">
                                    <label for="name">Year {!! \App\Util\Util::htmlReq() !!}</label>
                                    <input type="number" class="form-control" id="year" name="year"
                                        value="{{ $data->year }}" required>
                                </div> --}}

                                <div class="form-group">
                                    <label for="description">Description {!! \App\Util\Util::htmlReq() !!}</label>
                                    <textarea class="textarea" id="editor1" name="description" required>{!! $data->description !!}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="">Upload</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="house_land">Property Type {!! \App\Util\Util::htmlReq() !!}</label>
                                    <select name="house_land" class="form-control" id="" required>
                                        <option value="" disabled selected>Choose Property Type</option>
                                        <option value="House" {{ $data->house_land == 'House' ? 'selected' : '' }}>House
                                        </option>
                                        <option value="Land" {{ $data->house_land == 'Land' ? 'selected' : '' }}>Land
                                        </option>
                                        <option value="Apartment"
                                            {{ $data->house_land == 'Apartment' ? 'selected' : '' }}>Apartment
                                        </option>
                                        <option value="Office" {{ $data->house_land == 'Office' ? 'selected' : '' }}>
                                            Office
                                        </option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="rent_sale">For {!! \App\Util\Util::htmlReq() !!}</label>
                                    <select name="rent_sale" class="form-control" id="" required>
                                        <option value="" disabled selected>Choose an Option</option>
                                        <option value="Sale" {{ $data->rent_sale == 'Sale' ? 'selected' : '' }}>Sale
                                        </option>
                                        <option value="Rent" {{ $data->rent_sale == 'Rent' ? 'selected' : '' }}>Rent
                                        </option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="sort">Sort {!! \App\Util\Util::htmlReq() !!}</label>
                                    <input type="text" class="form-control" id="sort" name="sort"
                                        value="{{ $data->sort }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="status">Status {!! \App\Util\Util::htmlReq() !!}</label>
                                    <select name="status" class="form-control" id="">
                                        <option value="" disabled selected>Choose an Option</option>
                                        <option value="1" {{ $data->status == 1 ? 'selected' : '' }}>Available
                                        </option>
                                        <option value="0" {{ $data->status == 0 ? 'selected' : '' }}>Not Available
                                        </option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="slider">Show on slider</label>
                                    <select name="slider" class="form-control" id="">
                                        <option value="" disabled selected>Choose an Option</option>
                                        <option value="1" {{ $data->slider == 1 ? 'selected' : '' }}>Yes</option>
                                        <option value="0" {{ $data->status == 0 ? 'selected' : '' }}>No</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="name">Keywords (separated by comma)</label>
                                    <input type="text" class="form-control" id="meta_tags" name="meta_tags"
                                        value="{{ $data->meta_tags }}">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">Submit</button>
                                <a href="{{ route('admin.' . $page . '.index') }}"
                                    class="btn btn-danger pull-right">Cancel</a>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->


                </div>

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@stop
