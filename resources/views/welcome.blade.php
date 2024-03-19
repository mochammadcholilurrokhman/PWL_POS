@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Welcome')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Welcome')

{{-- Content body: man page content --}}

@section('content_body')
@stop

{{-- Push extra CSS --}}

@push('css')
    {{-- Add here extra stylesheet --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@endpush

{{-- Push extra scripts --}}

@push('js')
    <script> console.log("Hi, I'm using the laravel-AdminLTE package!"); </script>
@endpush