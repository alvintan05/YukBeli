@extends('layouts/master_admin')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Profile Admin</h1>
        </div>         
    </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="card">        
        <div class="card-body">
            <div class="box-body table-responsive no-padding">                
                <table class="table table-hover table-bordered table-striped">
                    <tr>
                        <th>Nama</th>
                        <td>{{$admin->name}}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{$admin->email}}</td>
                    </tr>                    
                </table>                                   
            </div>
        </div>
        <!-- /.card-body -->        
    </div>
    <!-- /.card -->    

</section>
<!-- /.content -->
@endsection