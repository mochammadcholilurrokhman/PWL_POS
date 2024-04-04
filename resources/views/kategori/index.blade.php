@extends('layouts.app')

@section('subtitle', 'Kategori')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Kategori')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Manage Kategori</div>
            <div class="card-body">
                <a href="{{ route('/kategori/create') }}" class="btn btn-primary rounded-lg px-2 btn-xs mb-3">+ Tambah Kategori</a>
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
@endsection

@push('scripts') {{ $dataTable->scripts() }} @endpush