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
                                        <th>Title</th>
                                        <th>Icon</th>
                                        <th>Description</th>
                                        <th>Sort</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $d)
                                        <tr>
                                            <td>{{ $d->title }}</td>
                                            <td>
                                                <img src="{{ asset('images/' . $page . '/' . $d->icon) }}" alt=""
                                                    width="100px">
                                            </td>
                                            <td>{!! $d->description !!}</td>
                                            <td>{{ $d->sort }}</td>
                                            <td>
                                                @include('backend.partial.action', ['delme' => 'yes'])
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
