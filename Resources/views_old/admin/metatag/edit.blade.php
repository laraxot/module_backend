@extends('adm_theme::layouts.app')
@section('page_heading','metatag list')
@section('content')
@include('formx::includes.flash')


{!! Form::bsOpen([],'update') !!}
@foreach($rows as $k=>$v)
	@include($view.'.item')
@endforeach
{!! Form::bsSubmit() !!}
{!! Form::close() !!}


@endsection
