@extends('_layouts.default')

@section('main')
@if (Sentry::check())
    <div>Successfully Logged in</div
@else 
<div>You dont have access</div>
@endif
@stop