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
                @if (!empty($user))
                    <div class="card-deck">
                        @foreach($user->wishlist as $item)
                            <div class="card col-md-3 col-sm-6">
                                <center>                   
                                    <img src="{{ asset('product/' . $item->photo) }}" alt="" class="card-img-top">                  
                                    <div class="card-body">
                                        <h6>{{$item->product_name}}</h6>                                                                             
                                    </div>                               
                                    <a href="{{ url('user/product/'.$item->id) }}" class="btn btn-primary">Detail</a>
                                    <br>
                                    <br>
                                    {!! Form::open(['method' => 'DELETE', 'action' => ['UserController@delete_wishlist']]) !!}							
                                        {!! Form::hidden('id', $item->id) !!}
                                        {!! Form::hidden('page', 'wishlist') !!}
                                        {!! Form::submit('Remove From Wishlist', ['class' => 'btn btn-primary']) !!}
                                    {!! Form::close() !!}                                    
                                    <br>
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