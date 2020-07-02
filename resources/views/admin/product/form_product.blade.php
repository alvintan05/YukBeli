@if (isset($product))
	{!! Form::hidden('id', $product->id) !!}
@endif

<div class="form-group">
	{!! Form::label('product_name', 'Product Name:', ['class' => 'control-label']) !!}		
	@if ($errors->any())		
		{!! Form::text('product_name', null, [
				'class' => "form-control ".($errors->has('product_name') ? ' is-invalid' : ' is-valid')
		]) !!}
	@else
		{!! Form::text('product_name', null, ['class' => 'form-control']) !!}
	@endif	
		@if ($errors->has('product_name'))	
			<span class="help-block invalid-feedback">{{ $errors->first('product_name') }}</span>
		@endif
</div>

<div class="form-group">
	{!! Form::label('price', 'Price (Rp):', ['class' => 'control-label']) !!}
	@if ($errors->any())		
		{!! Form::text('price', null, [
				'class' => "form-control ".($errors->has('price') ? ' is-invalid' : ' is-valid')
		]) !!}
	@else
		{!! Form::text('price', null, ['class' => 'form-control']) !!}
	@endif	
		@if ($errors->has('price'))	
			<span class="help-block invalid-feedback">{{ $errors->first('price') }}</span>
		@endif
</div>

<div class="form-group">
	{!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
	@if ($errors->any())		
		{!! Form::textArea('description', null, [
				'class' => "form-control ".($errors->has('description') ? ' is-invalid' : ' is-valid')
		]) !!}
	@else
		{!! Form::textArea('description', null, ['class' => 'form-control']) !!}
	@endif	
		@if ($errors->has('description'))	
			<span class="help-block invalid-feedback">{{ $errors->first('description') }}</span>
		@endif
</div>

<div class="form-group">	
	@if ($errors->any())				
		{!! Form::label('id_category', 'Category: ', [
			'class' => "control-label ".($errors->has('id_category') ? ' is-invalid' : ' is-valid')
		]) !!}
	@else
		{!! Form::label('id_category', 'Category:', ['class' => 'control-label']) !!}		
	@endif		
		@if (count($list_category) > 0)
			{!! Form::select('id_category', $list_category, null, 
				['class' => "form_control ".($errors->has('id_category') ? ' is-invalid' : ' is-valid'),
				'id' => 'id_category',
				'placeholder' => 'Pilih Category']) !!}
		@else
			<p>Tidak ada pilihan category, buat dulu ya...!</p>
		@endif
		@if ($errors->has('id_category'))	
			<span class="help-block invalid-feedback">{{ $errors->first('id_category') }}</span>
		@endif
</div>

<div class="form-group">		
	@if ($errors->any())						
		{!! Form::label('photo', 'Photo:', [
			'class' => "control-label ".($errors->has('photo') ? ' is-invalid' : ' is-valid')
		]) !!}
	@else		
		{!! Form::label('photo', 'photo:', ['class' => 'control-label']) !!}			
	@endif	
		<br>
		{!! Form::file('photo') !!}
		@if ($errors->has('photo'))	
			<span class="help-block invalid-feedback">{{ $errors->first('photo') }}</span>
		@endif
</div>

<!-- Menampilkan Foto -->
@if (isset($product))
	@if (isset($product->photo))
		<img src="{{ asset('product/' . $product->photo) }}" alt="">	
	@endif
@endif

<div class="form-group">	
	<br>
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}			
</div>