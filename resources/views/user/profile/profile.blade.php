@extends('layouts/master_user')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Profile</h1>
        </div>         
    </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">    
    <div class="container-fluid">        
        <div class="card">
            <div class="card-body">
                {!! Form::model($user, ['method' => 'PATCH', 'files' => true, 'action' => ['UserController@update_profile']]) !!}
                    @include('user.profile.form_profile', ['submitButtonText' => 'Update'])
                {!! Form::close() !!}
            </div>            
        </div>        
    </div>
</section>
<!-- /.content -->
@endsection