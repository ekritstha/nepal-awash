@extends('backend.master')
@section('main-content')
    @include('backend.partial.breadcrumb', [
        'title1' => 'List ' . ucwords($page),
        'title2' => ucwords($page),
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
                                        <th>Title</th>
                                        <th>Synopsis</th>
                                        <th>Description</th>
                                        <th>Images</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $d)
                                        <tr>
                                            <td>{{ $d->title }}</td>
                                            <td>{!! $d->synopsis !!}</td>
                                            <td>{!! $d->description !!}</td>
                                            <td>
                                                <img src="{{ asset('images/' . $page . '/' . $d->image) }}" alt=""
                                                    width="100px">
                                            </td>
                                            <td>
                                                @include('backend.partial.action', ['delme' => null])
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
