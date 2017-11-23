{{ csrf_field() }}
{{Form::label('email', 'Email')}}
<div class="form-controls {{ $errors->has('email') ? 'has-error' : '' }}">
    {!! Form::text('email',null,['class'=>'form-control']) !!}
    @if ( $errors->has('name') )
        <span class="text-warning">
	        <strong> {{ $errors->first('email') }}</strong>
	    </span>
    @endif
</div>
{!! Form::label('first_name', 'Fist Name') !!}
<div class="form-controls {{ $errors->has('first_name') ? 'has-error' : '' }}">
    {!! Form::text('first_name',null,['class'=>'form-control']) !!}
    @if ( $errors->has('name') )
        <span class="text-warning">
	        <strong> {{ $errors->first('first_name') }}</strong>
	    </span>
    @endif
</div>
{!! Form::label('last_name', 'Last Name') !!}
<div class="form-controls {{ $errors->has('first_name') ? 'has-error' : '' }}">
    {!! Form::text('last_name',null,['class'=>'form-control']) !!}
    @if ( $errors->has('last_name') )
        <span class="text-warning">
	        <strong> {{ $errors->first('last_name') }}</strong>
	    </span>
    @endif
</div>
{!! Form::label('phone_number', 'Phone Number') !!}
<div class="form-controls {{ $errors->has('phone_number') ? 'has-error' : '' }}">
    {!! Form::text('phone_number',null,['class'=>'form-control']) !!}
    @if ( $errors->has('phone_number') )
        <span class="text-warning">
	        <strong> {{ $errors->first('phone_number') }}</strong>
	    </span>
    @endif
</div>
{!! Form::label('address', 'Address') !!}
<div class="form-controls {{ $errors->has('address') ? 'has-error' : '' }}">
    {!! Form::text('address',null,['class'=>'form-control']) !!}
    @if ( $errors->has('address') )
        <span class="text-warning">
	        <strong> {{ $errors->first('address') }}</strong>
	    </span>
    @endif
</div>
<div class="form-gourp">
    {!! Form::label('role', 'Role') !!}
    {!! Form::select('role', array(
    '0'=>'Khach Hang',
    '1'=>'Admin',
    ), $user->role, ['class'=>'form-control']) !!}
</div>
<div class="form-gourp">
    {!! Form::label('active', 'Active') !!}
    {!! Form::select('active', array(
    '0'=>'Đang Hoạt Động',
    '1'=>'Khóa',
    ), $user->active, ['class'=>'form-control']) !!}
</div><br>
{!! Form::submit('Save User', ['class' => 'btn btn-primary']) !!}
