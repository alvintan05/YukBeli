@extends('layouts/master_admin')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 mx-auto">
                    <h1>Edit Category</h1>
                </div>          
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content" style="margin-right: 10px; margin-left: 10px;">
            
        <div class="card col-md-6 col-sm-12 mx-auto">
            {!! Form::model($category, ['method' => 'PATCH', 'action' => ['AdminController@update_category', $category->id]]) !!}
		        @include('admin.category.form_category', ['submitButtonText' => 'Update'])
		    {!! Form::close() !!}
        </div>	

    </section>
    <!-- /.content -->	
@endsection