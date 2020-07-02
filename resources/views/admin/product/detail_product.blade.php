@extends('layouts/master_admin')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12 mx-auto">
                <h1>Detail Product</h1>
            </div>          
        </div>
    </div>
</section>

<!-- Main content -->
<section class="content" style="margin-right: 10px; margin-left: 10px;">
        
    <div class="card col-md-12 col-sm-12">
        <br>
        <table class="table table-striped">
			<tr>
				<th>ID Product</th>
				<td>{{$product->id}}</td>
			</tr>
			<tr>
				<th>Product Name</th>
				<td>{{$product->product_name}}</td>
			</tr>
			<tr>
				<th>Price (Rp)</th>
				<td>{{$product->price}}</td>
			</tr>
			<tr>
				<th>Description</th>
				<td>{{ $product->description }}</td>
			</tr>	
            <tr>
				<th>Category</th>
				<td>{{ $product->category->category_name }}</td>
			</tr>		
			<tr>
				<th>Created at</th>
				<td>{{ $product->created_at }}</td>
			</tr>		
            <tr>
				<th>Photo</th>
				<td>
					@if (isset($product->photo))
						<img src="{{ asset('product/' . $product->photo) }}">						
					@endif
				</td>
			</tr>
		</table>
    </div>	

</section>
@stop