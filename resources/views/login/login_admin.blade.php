@extends('layouts/master_login')

@section('content')

<!-- Main content -->
<section class="content">
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4"></div>
                <div class="col-4">
                    <div class="card">
                    <div class="card-header">
                        <h1 class="card-title text-center" style="width: 23rem;"><big><b>Login Admin</b></big></h1>
                    </div>
                    <div class="card-body m-3">                                                                                    
                        {!! Form::open(['url' => 'admin', 'files' => true]) !!}
                            @include('login.form_login', ['submitButtonText' => 'Login'])
                        {!! Form::close() !!}                  
                    </div>                
                </div>
            <div class="col-4"></div>
        </div>
    </div>
</section>
<!-- /.content -->
@endsection