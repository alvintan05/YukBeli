@extends('layouts/master_user')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>All Products</h1>
        </div>         
    </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Jumlah Product: {{ $jumlah_product }}</h3>
        </div>
        <div class="card-body">
            <div class="box-body">
                @if (!empty($product_list))
                    <div class="card-deck">
                        @foreach($product_list as $product)
                            <div class="card col-md-3 col-sm-6">
                                <center>
                                    <img src="{{ asset('product/' . $product->photo) }}" alt="" class="card-img-top"> 
                                    <div class="card-body">
                                        <h5>{{$product->product_name}}</h5>
                                        <a href="{{ url('user/product/'.$product->id) }}" class="btn btn-primary stretched-link">Detail</a>
                                    </div>                                    
                                </center>                                
                            </div>
                        @endforeach
                    </div>                     
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