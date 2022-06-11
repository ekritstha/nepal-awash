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
                                    <label for="title">Title {!! \App\Util\Util::htmlReq() !!}</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        value="{{ $data->title }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Icon</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="icon" id="exampleInputFile"
                                                required>
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="">Upload</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description {!! \App\Util\Util::htmlReq() !!}</label>
                                    <textarea class="textarea" id="editor1" name="description" required>{!! $data->description !!}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="sort">Sort {!! \App\Util\Util::htmlReq() !!}</label>
                                    <input type="text" class="form-control" id="sort" name="sort"
                                        value="{{ $data->sort }}" required>
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
