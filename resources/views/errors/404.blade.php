@extends('errors::layout')

@section('code', '404')

@section('title', __('Page not found (404)'))

@section('message')

<link rel="stylesheet" href="/css/styles.css" />
<div id="content" class="text-content">
    <h3>Page not found (404)</h3>
    <a href="/">Index</a>

</div>
@endsection

@section('message', __('Page not found (404).'))