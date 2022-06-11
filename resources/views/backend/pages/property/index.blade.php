@extends('backend.master')
@section('main-content')
    @include('backend.partial.breadcrumb', [
        'title1' => 'List ' . ucwords($page),
        'title2' => ucwords($page),
        't' => 'create',
    ])
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered" id="dtable">
                                <thead>
                                    <tr>
                                        <th>S No.</th>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Location</th>
                                        <th>Property Type</th>
                                        <th>For</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Action(s)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($data as $d)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $d->property_id }}</td>
                                            <td>{{ $d->title }}</td>
                                            <td>{{ $d->location }}</td>
                                            <td>{{ $d->house_land }}</td>
                                            <td>{{ $d->rent_sale }}</td>
                                            <td>
                                                <img src="{{ asset('images/' . $page . '/' . $d->image) }}" alt=""
                                                    width="100px">
                                            </td>
                                            <td>
                                                @if ($d->status == 1)
                                                    <span class="badge badge-success">Available</span>
                                                @else
                                                    <span class="badge badge-danger">Not Available</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.' . $page . '.show', $d->id) }}" title="Show">
                                                    <i class="fa fa-eye text-primary" style="cursor: pointer"></i></a>
                                                @include('backend.partial.action', [
                                                    'delme' => 'yes',
                                                    'email' => null,
                                                ])
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@stop
