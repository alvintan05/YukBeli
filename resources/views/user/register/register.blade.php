@extends('layouts/master_login')

@section('content')

<!-- Main content -->
<section class="content">
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2"></div>
                <div class="col-8">
                    <div class="card">
                    <div class="card-header">
                        <h1 class="card-title text-center"><big><b>Register User</b></big></h1>
                    </div>
                    <div class="card-body m-3">                                                                                    
                        {!! Form::open(['url' => 'register', 'files' => true]) !!}
                            @include('user.register.form_register', ['submitButtonText' => 'Register'])
                        {!! Form::close() !!}                  
                    </div>                
                </div>
            <div class="col-1"></div>
        </div>
    </div>
</section>
<!-- /.content -->
@endsection