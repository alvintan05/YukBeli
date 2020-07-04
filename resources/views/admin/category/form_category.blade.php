@if (isset($category))
	{!! Form::hidden('id', $category->id) !!}
@endif

<div class="form-group">
	{!! Form::label('category_name', 'Nama Category:', ['class' => 'control-label']) !!}		
	@if ($errors->any())		
		{!! Form::text('category_name', null, [
				'class' => "form-control ".($errors->has('category_name') ? ' is-invalid' : ' is-valid')
		]) !!}
	@else
		{!! Form::text('category_name', null, ['class' => 'form-control']) !!}
	@endif	
		@if ($errors->has('category_name'))	
			<span class="help-block invalid-feedback">{{ $errors->first('category_name') }}</span>
		@endif
</div>

<div class="form-group">
	{!! Form::label('description', 'Deskripsi Category:', ['class' => 'control-label']) !!}
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
	<br>
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>