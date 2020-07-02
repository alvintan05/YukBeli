@extends('layouts/master_admin')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6 mx-auto">
                <h1>Detail Category</h1>
            </div>          
        </div>
    </div>
</section>

<!-- Main content -->
<section class="content" style="margin-right: 10px; margin-left: 10px;">
        
    <div class="card col-md-6 col-sm-12 mx-auto">
        <br>
        <table class="table table-striped">
			<tr>
				<th>ID Category</th>
				<td>{{$category->id}}</td>
			</tr>
			<tr>
				<th>Nama Category</th>
				<td>{{$category->category_name}}</td>
			</tr>
			<tr>
				<th>Description</th>
				<td>{{ $category->description }}</td>
			</tr>		
			<tr>
				<th>Created at</th>
				<td>{{ $category->created_at }}</td>
			</tr>			
		</table>
    </div>	

</section>
@stop