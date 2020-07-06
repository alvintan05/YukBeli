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
                        <?php $count = 0;?>
                        @foreach($product_list as $product)                        
                            <div class="card col-md-3 col-sm-6">
                                <center>
                                    <img src="{{ asset('product/' . $product->photo) }}" alt="" class="card-img-top"> 
                                    <div class="card-body">
                                        <h6>{{$product->product_name}}</h6>
                                        <a href="{{ url('user/product/'.$product->id) }}" class="btn btn-primary stretched-link">Detail</a>
                                    </div>                                    
                                </center>                                
                            </div>
                            <?php 
                                $count++;
                                if ($count%4 == 0) {
                                    echo "</div> </div> <br> <div class=\"row\"> <div class=\"card-deck\">";	
                                }                             
                            ?>
                        @endforeach
                    </div>                     
                @else
                    <p>Tidak ada data Product</p>
                @endif   
            </div>
        </div>
        <!-- /.card-body -->  
        <div class="card-footer">
            <div class="card-tools">
                <ul class="pagination pagination-sm float-right">
                    {{ $product_list->links() }}
                </ul>
            </div>
        </div>      
    </div>
    <!-- /.card -->    

</section>
<!-- /.content -->
@endsection