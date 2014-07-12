@extends('layouts.master')

@section('content')
{{Form::open(array('route'  =>'users.store')) }}

<div class="form-group">
{{Form::text('Names',null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
{{Form::text('gender' ,null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
{{Form::text('phone',null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
{{Form::text('Date of birth',null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
{{Form::text('countyr',null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
{{Form::text('marital status' ,null, array('class' => 'form-control')) }}

</div>

{{Form::submit('Create profile', array('class' => 'btn btn-primary')) }}


{{Form::close() }}
@stop
 
