<div class="form-group">
	{!! Form::label('name', 'Nama:', ['class' => 'control-label']) !!}		
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
	@if ($errors->any())						
		{!! Form::label('gender', 'Jenis Kelamin:', [
			'class' => "control-label ".($errors->has('gender') ? ' is-invalid' : ' is-valid')
		]) !!}
	@else		
		{!! Form::label('gender', 'Jenis Kelamin:', ['class' => 'control-label']) !!}		
	@endif
		<div class="radio">
			<label>{!! Form::radio('gender', 'L') !!} Laki-Laki</label>
		</div>			
		<div class="radio">
			<label>{!! Form::radio('gender', 'P') !!} Perempuan</label>
		</div>

		@if ($errors->has('gender'))	
			<span class="help-block invalid-feedback">{{ $errors->first('gender') }}</span>
		@endif
</div>
<div class="form-group">
	{!! Form::label('birth_date', 'Tanggal Lahir:', ['class' => 'control-label']) !!}
	@if ($errors->any())				
		{!! Form::date('birth_date', !empty($siswa) ? $siswa->birth_date->format('Y-m-d'): null, [
			'class' => "form-control ".($errors->has('birth_date') ? ' is-invalid' : ' is-valid'), 
			'id' => 'birth_date'
		]) !!}
	@else		
		{!! Form::date('birth_date', !empty($siswa) ? $siswa->birth_date->format('Y-m-d'): null, ['class' => 'form-control', 'id' => 'birth_date']) !!}
	@endif	
		@if ($errors->has('birth_date'))	
			<span class="help-block invalid-feedback">{{ $errors->first('birth_date') }}</span>
		@endif
</div>
<div class="form-group">
	{!! Form::label('address', 'Alamat:', ['class' => 'control-label']) !!}
	@if ($errors->any())		
		{!! Form::textArea('address', null, [
				'class' => "form-control ".($errors->has('address') ? ' is-invalid' : ' is-valid')
		]) !!}
	@else
		{!! Form::textArea('address', null, ['class' => 'form-control']) !!}
	@endif	
		@if ($errors->has('address'))	
			<span class="help-block invalid-feedback">{{ $errors->first('address') }}</span>
		@endif
</div>
<div class="form-group">
	{!! Form::label('telephone', 'Telepon:', ['class' => 'control-label']) !!}		
	@if ($errors->any())		
		{!! Form::text('telephone', null, [
				'class' => "form-control ".($errors->has('telephone') ? ' is-invalid' : ' is-valid')
		]) !!}
	@else
		{!! Form::text('telephone', null, ['class' => 'form-control']) !!}
	@endif	
		@if ($errors->has('telephone'))	
			<span class="help-block invalid-feedback">{{ $errors->first('telephone') }}</span>
		@endif
</div>
<div class="form-group">
	{!! Form::label('email', 'Email:', ['class' => 'control-label']) !!}		
	@if ($errors->any())		
		{!! Form::text('email', null, [
				'class' => "form-control ".($errors->has('email') ? ' is-invalid' : ' is-valid')
		]) !!}
	@else
		{!! Form::text('email', null, ['class' => 'form-control']) !!}
	@endif	
		@if ($errors->has('email'))	
			<span class="help-block invalid-feedback">{{ $errors->first('email') }}</span>
		@endif
</div>

<div class="form-group">
	{!! Form::label('password', 'Password:', ['class' => 'control-label']) !!}		
	@if ($errors->any())		
		{!! Form::password('password', [
				'class' => "form-control ".($errors->has('password') ? ' is-invalid' : ' is-valid')
		]) !!}
	@else
		{!! Form::password('password', ['class' => 'form-control']) !!}
	@endif	
		@if ($errors->has('password'))	
			<span class="help-block invalid-feedback">{{ $errors->first('password') }}</span>
		@endif
</div>

<div class="form-group">		
	@if ($errors->any())						
		{!! Form::label('photo', 'Photo:', [
			'class' => "control-label ".($errors->has('photo') ? ' is-invalid' : ' is-valid')
		]) !!}
	@else		
		{!! Form::label('photo', 'Photo:', ['class' => 'control-label']) !!}			
	@endif	
		<br>
		{!! Form::file('photo') !!}
		@if ($errors->has('photo'))	
			<span class="help-block invalid-feedback">{{ $errors->first('photo') }}</span>
		@endif
</div>

<div class="form-group">	
	<br>
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>