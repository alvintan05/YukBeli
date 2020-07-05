@extends('layouts/master_user')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12 mx-auto">
                <h1>{{$product->product_name}}</h1>				
            </div>          
        </div>
    </div>
</section>

<!-- Main content -->
<section class="content" style="margin-right: 10px; margin-left: 10px;">
	<div class="row">
		<div class="container col-md-9 col-sm-12">
			<div class="card mb-3">			
				<div class="card-body border-secondary">
					<div>							
						<center>
							@if (isset($product->photo))
								<img style="height:300px;" src="{{ asset('product/' . $product->photo) }}">
							@endif							
						</center>
					</div>
					<br>
					<div>						
						<h5><b>Deskripsi</b></h5>						
						<p><?php echo nl2br("".$product->description."", false) ?></p>
					</div>					
				</div>				
			</div>
		</div>
		<div class="container col-md-3">
			<div class="card mb-3">			
				<div class="card-body border-secondary">					
					<div>
						<h4>Harga</h4>
						<h5>Rp {{number_format($product->price,2,',','.')}} </h5>
						<br>
						<p>Category : <i>{{$product->category->category_name}}</i></p>				
						{!! Form::open(['url' => 'user/product']) !!}
							{!! Form::hidden('id', $product->id) !!}
							{!! Form::submit('Add To Wishlist', ['class' => 'btn btn-primary form-control']) !!}
						{!! Form::close() !!}						     
					</div>													
				</div>				
			</div>
		</div>	
	</div>	    
</section>
@stop