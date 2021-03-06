{{ csrf_field() }}
{{Form::label('code', 'Promotion Code: ')}}
<div class="form-controls {{ $errors->has('code') ? 'has-error' : '' }}">
    {!! Form::text('code',null,['class'=>'form-control']) !!}
    @if ( $errors->has('code') )
        <span class="text-warning">
	        <strong> {{ $errors->first('code') }}</strong>
	    </span>
    @endif
</div>
{!! Form::label('discount', 'DisCount: ') !!}
<div class="form-controls {{ $errors->has('discount') ? 'has-error' : '' }}">
    {!! Form::text('discount',null,['class'=>'form-control']) !!}
    @if ( $errors->has('discount') )
        <span class="text-warning">
	        <strong> {{ $errors->first('discount') }}</strong>
	    </span>
    @endif
</div>
{!! Form::label('start_date', 'Start Date: ') !!}
<div class="form-controls {{ $errors->has('start_date') ? 'has-error' : '' }}">
    {!! Form::date('start_date',null,['class'=>'form-control']) !!}
    @if ( $errors->has('start_date') )
        <span class="text-warning">
	        <strong> {{ $errors->first('start_date') }}</strong>
	    </span>
    @endif
</div>
{!! Form::label('end_date', 'End Date: ') !!}
<div class="form-controls {{ $errors->has('end_date') ? 'has-error' : '' }}">
    {!! Form::date('end_date',null,['class'=>'form-control']) !!}
    @if ( $errors->has('end_date') )
        <span class="text-warning">
	        <strong> {{ $errors->first('end_date') }}</strong>
	    </span>
    @endif
</div>
<br>
{!! Form::submit('Save Promotion', ['class' => 'btn btn-primary']) !!}
