@extends('adm_theme::layouts.app')
@section('page_heading','Blog')
@section('content')
@include('formx::includes.flash')


<table class="table table-hover table-bordered">
@foreach($rows as $row)
	<tr>
		<td>{{ $row->auth_user_id }}</td>
		<td>{{ $row->handle }}</td>
		<td>{!! Form::bsBtnCrud(['id'=>$row]) !!}</td>
	</tr>
@endforeach
</table>

@endsection