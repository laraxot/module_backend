@extends('adm_theme::layouts.app')
@section('page_heading','themes list')
@section('content')
@include('formx::includes.flash')



@foreach($rows as $row)
	@include($view.'.item')
	
@endforeach

@endsection