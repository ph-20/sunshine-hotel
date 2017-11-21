{{ csrf_field() }}
{{--<div class="form-group">--}}
{{--<label>Room Name</label>--}}
{{--<input class="form-control" name="email" value="{{$user->email}}"--}}
{{--placeholder="Please Enter Email"/>--}}
{{--</div>--}}
{{--<div class="form-group">--}}
{{--<label>Price</label>--}}
{{--<input class="form-control" name="first_name" value="{{$user->first_name}}"--}}
{{--placeholder="Please Enter Fist Name"/>--}}
{{--</div>--}}
{{--<div class="form-group">--}}
{{--<label>Amount People</label>--}}
{{--<input class="form-control" name="last_name" value="{{$user->last_name}}"--}}
{{--placeholder="Please Enter Last Name"/>--}}
{{--</div>--}}
{{--<div class="form-group">--}}
{{--<label>Amount People</label>--}}
{{--<input class="form-control" name="address" value="{{$user->address}}"--}}
{{--placeholder="Please Enter Last Name"/>--}}
{{--</div>--}}
{{--<div class="form-group">--}}
{{--<label>Amount People</label>--}}
{{--<input class="form-control" name="phone_number" value="{{$user->phone_number}}"--}}
{{--placeholder="Please Enter Phone Number"/>--}}
{{--</div>--}}
{{--<div class="form-group">--}}
{{--<label>Rooms Type</label>--}}
{{--<select class="form-control" name="role">--}}
{{--@foreach($user as $user)--}}
{{--@if($user->role ==1)--}}
{{--<option value="1">--}}
{{--Admin--}}
{{--</option>--}}
{{--@endif--}}
{{--<option value="0">--}}
{{--Thanh Vien--}}
{{--</option>--}}
{{--@endforeach--}}
{{--</select>--}}
{{--</div>--}}

<div class="forn-group">
    {{Form::label('email', 'Email')}}
    {{form::text('email',null,['class' =>'form-control'])}}
</div>
<div class="forn-group">
    {{Form::label('first_name', 'Fist Name')}}
    {{form::text('first_name',null,['class' =>'form-control'])}}
</div>
<div class="forn-group">
    {{Form::label('last_name', 'Last Name')}}
    {{form::text('last_name',null,['class' =>'form-control'])}}
</div>
<div class="forn-group">
    {{Form::label('phone_number', 'Phone Number')}}
    {{form::text('phone_number',null,['class' =>'form-control'])}}
</div>
<div class="forn-group">
    {{Form::label('address', 'Address')}}
    {{form::text('address',null,['class' =>'form-control'])}}
</div>
<div class="form-gourp">
    {{ Form::label('role', 'Role') }}
        {{ Form::select('role',[
        '0'=>'Khach Hang',
        '1'=>'Admin',]
        , 'null', ['class'=>'form-control'])}}
</div><br>
{!! Form::submit('Save User', ['class' => 'btn btn-primary']) !!}
