@extends('layouts/master_user')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Wishlist</h1>
        </div>         
    </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="card">
        <div class="card-header">            
        </div>
        <div class="card-body">
            <div class="box-body">
                @if (!empty($wishlist_list))
                    <div class="card-deck">
                        @foreach($wishlist_list as $wishlist)
                            <div class="card col-md-3 col-sm-6">
                                <center>                                    
                                    <div class="card-body">
                                        <h5>{{$wishlist->id_product}}</h5> 
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