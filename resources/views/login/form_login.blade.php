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
	<br>
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>