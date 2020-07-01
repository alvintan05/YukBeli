@extends('layouts/master_admin')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 mx-auto">
                    <h1>Edit Product</h1>
                </div>          
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content" style="margin-right: 10px; margin-left: 10px;">
            
        <div class="card col-md-6 col-sm-12 mx-auto">
            {!! Form::open(['url' => 'siswa']) !!}
                @include('admin.form_product', ['submitButtonText' => 'Simpan'])
            {!! Form::close() !!}
        </div>	

    </section>
    <!-- /.content -->	
@endsection