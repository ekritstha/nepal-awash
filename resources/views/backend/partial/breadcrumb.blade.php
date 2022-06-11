<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">
                    {{ ucwords(str_replace('-',' ',$title1??'')) }} &nbsp;
                    @if(isset($t))
                    @if($t=="list")
                    <a href="{{ route('admin.'.$page.'.index') }}">
                        <i class="fas fa-table text-primary" style="font-size: 80%"></i>
                    </a>
                    @elseif($t=='create')
                    <a href="{{ route('admin.'.$page.'.create') }}">
                        <i class="fas fa-plus text-success" style="font-size: 80%"></i>
                    </a>
                    @endif
                    @endif
                </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}">
                            Home
                        </a>
                    </li>
                    <li class="breadcrumb-item active">{{ ucwords(str_replace('-',' ',$title2??'')) }}</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>