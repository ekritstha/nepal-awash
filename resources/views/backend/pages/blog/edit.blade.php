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
                                    <label for="description">Synopsis {!! \App\Util\Util::htmlReq() !!}</label>
                                    <textarea class="textarea" id="editor1" name="synopsis" required>{!! $data->synopsis !!}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="description">Description {!! \App\Util\Util::htmlReq() !!}</label>
                                    <textarea class="textarea" id="editor2" name="description" required>{!! $data->description !!}</textarea>
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
                                    <label for="name">Keywords (separated by comma)</label>
                                    <input type="text" class="form-control" id="meta_tags" name="meta_tags"
                                        value="{{ $data->meta_tags }}">
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
