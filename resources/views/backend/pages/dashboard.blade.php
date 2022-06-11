@extends('backend.master')
@section('main-content')
@include('backend.partial.breadcrumb',['title1'=>'Dashboard', 'title2'=>'Dashboard'])
<section class="content">
    <div class="container-fluid">

        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-12 connectedSortable">
                <!-- Custom tabs (Charts with tabs)-->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            Welcome To CMS
                        </h3>

                    </div><!-- /.card-header -->
                </div>
                <!-- /.card -->
            </section>
            <!-- /.Left col -->

        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>
@stop