{{ csrf_field() }}
{{Form::label('password', 'Mật Khẩu Mới: ')}}
<div class="form-controls {{ $errors->has('password') ? 'has-error' : '' }}">
    {!! Form::password('password',null,['class'=>'form-control']) !!}
    @if ( $errors->has('password') )
        <span class="text-warning">
	        <strong> {{ $errors->first('password') }}</strong>
	    </span>
    @endif
</div>
{{Form::label('password_confirmation', 'Nhập Lại Mật Khẩu Mới: ')}}
<div class="form-controls {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
    {!! Form::password('password_confirmation',null,['class'=>'form-control']) !!}
    @if ( $errors->has('password_confirmation') )
        <span class="text-warning">
	        <strong> {{ $errors->first('password_confirmation') }}</strong>
	    </span>
    @endif
</div>
<br>
{!! Form::submit('Save Password New', ['class' => 'btn btn-primary']) !!}
