{{ csrf_field() }}
<div class="forn-group">
    {{Form::label('email', 'Email')}}
    {{form::text('email',null,['class' =>'form-control'])}}
</div>
<div class="forn-group">
    {!! Form::label('first_name', 'Fist Name') !!}
    {!! Form::text('first_name',null,['class' =>'form-control']) !!}
</div>
<div class="forn-group">
    {!! Form::label('last_name', 'Last Name') !!}
    {!! Form::text('last_name',null,['class' =>'form-control']) !!}
</div>
<div class="forn-group">
    {!! Form::label('phone_number', 'Phone Number') !!}
    {!!form::text('phone_number',null,['class' =>'form-control'])!!}
</div>
<div class="forn-group">
    {!! Form::label('address', 'Address') !!}
    {!! Form::text('address',null,['class' =>'form-control']) !!}
</div>
<div class="form-gourp">
    {!! Form::label('role', 'Role') !!}
    {!! Form::select('role', array(
    '0'=>'Khach Hang',
    '1'=>'Admin',
    ), $user->role, ['class'=>'form-control']) !!}
</div><br>
{!! Form::submit('Save User', ['class' => 'btn btn-primary']) !!}
