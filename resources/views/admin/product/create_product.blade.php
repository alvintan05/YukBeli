@extends('layouts/master_admin')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-10 mx-auto">
                    <h1>Tambah Product</h1>
                </div>          
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content" style="margin-right: 10px; margin-left: 10px;">
            
        <div class="card col-md-10 col-sm-12 mx-auto">
            {!! Form::open(['url' => 'admin/product', 'files' => true]) !!}
                @include('admin.product.form_product', ['submitButtonText' => 'Save'])
            {!! Form::close() !!}
        </div>	

    </section>
    <!-- /.content -->	
@endsection