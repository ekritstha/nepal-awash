@extends('backend.master')
@section('main-content')
@include('backend.partial.breadcrumb',['title1'=>'List Newletter Subscribers'])
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
                                    <th>SN</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $d)
                                <tr>
                                    <th>{{ $loop->index+1 }}</th>
                                    <td>{{ $d->email }}</td>
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