@extends('layouts/master_admin')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Table Product</h1>
        </div>         
    </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <div class="row">
        <a style="margin-left: 10px;" href="product/create" class="btn btn-primary">Add Product</a>
    </div>

    <br>

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Jumlah Product: {{ $jumlah_product }}</h3>
        </div>
        <div class="card-body">
            <div class="box-body table-responsive no-padding">
                @if (!empty($product_list))
                    <table class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr class="d-flex">
                                <th class="col-3">No</th>
                                <th class="col-6">Product Name</th>                                
                                <th class="col-3">Action</th>
                            </tr>
                        </thead>                    
                        <tbody>
                            @foreach($product_list as $product)
                            <tr class="d-flex">
                                <td class="col-3">{{ $loop->iteration }}</td>
                                <td class="col-6">{{ $product->product_name }}</td>                                
                                <td class="col-3">
                                    <div class="btn-group">
                                        <!-- Detail icon -->
                                        <a class="btn" href="{{ url('admin/product/'.$product->id) }}"> <i class="fa fa-eye"></i></a>
                                        <!-- Edit Icon -->
                                        <a class="btn" href="{{ url('admin/product/'.$product->id . '/edit') }}"><i class="fa fa-edit"></i></a>
                                        <!-- Delete Icon -->
                                        {!! Form::open(['method' => 'DELETE', 'action' => ['AdminController@delete_product', $product->id]]) !!}							
                                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' =>'submit', 'class' => 'btn']) !!}
                                        {!! Form::close() !!}
                                    </div>                                                                                                                                                                                                                                                                    
                                </td>                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p>Tidak ada data Product</p>
                @endif   
            </div>
        </div>
        <!-- /.card-body -->        
    </div>
    <!-- /.card -->    

</section>
<!-- /.content -->
@endsection