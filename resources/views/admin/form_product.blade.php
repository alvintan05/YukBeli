<div class="form-group">
	{!! Form::label('name', 'Product Name:', ['class' => 'control-label']) !!}		
	@if ($errors->any())		
		{!! Form::text('name', null, [
				'class' => "form-control ".($errors->has('name') ? ' is-invalid' : ' is-valid')
		]) !!}
	@else
		{!! Form::text('name', null, ['class' => 'form-control']) !!}
	@endif	
		@if ($errors->has('name'))	
			<span class="help-block invalid-feedback">{{ $errors->first('name') }}</span>
		@endif
</div>

<div class="form-group">
	{!! Form::label('price', 'Price:', ['class' => 'control-label']) !!}
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
	{!! Form::label('desc', 'Description:', ['class' => 'control-label']) !!}
	@if ($errors->any())		
		{!! Form::text('desc', null, [
				'class' => "form-control ".($errors->has('desc') ? ' is-invalid' : ' is-valid')
		]) !!}
	@else
		{!! Form::textArea('desc', null, ['class' => 'form-control']) !!}
	@endif	
		@if ($errors->has('desc'))	
			<span class="help-block invalid-feedback">{{ $errors->first('desc') }}</span>
		@endif
</div>

<div class="form-group">		
	@if ($errors->any())						
		{!! Form::label('foto', 'Foto:', [
			'class' => "control-label ".($errors->has('foto') ? ' is-invalid' : ' is-valid')
		]) !!}
	@else		
		{!! Form::label('foto', 'Foto:', ['class' => 'control-label']) !!}			
	@endif	
		<br>
		{!! Form::file('foto') !!}
		@if ($errors->has('foto'))	
			<span class="help-block invalid-feedback">{{ $errors->first('foto') }}</span>
		@endif
</div>

<!-- Menampilkan Foto -->
@if (isset($siswa))
	@if (isset($siswa->foto))
		<img src="{{ asset('fotoupload/' . $siswa->foto) }}" alt="">
	@else
		@if ($siswa->jenis_kelamin == 'L')
			<img src="{{ asset('fotoupload/dummymale.jpg') }}">
		@else
			<img src="{{ asset('fotoupload/dummyfemale.jpg') }}">
		@endif
	@endif
@endif

<div class="form-group">	
	<br>
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}			
</div>