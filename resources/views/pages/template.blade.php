@extends('layouts.app')

@section('pretitle')
    Template
@endsection

@section('title')
    Nama Modul
@endsection

@section('action_button')
    <div class="btn-list">
        <span class="d-none d-sm-inline">
            <a href="#" class="btn btn-white">
                Data Baru
            </a>
        </span>
        <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
            data-bs-target="#modal-report">
            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
            </svg>
            Tambah Data
        </a>
    </div>
@endsection

@section('content')
    <div class="row row-deck row-cards">
        <div class="col-12">
            Ini isi halaman modulnya
        </div>
    </div>
@endsection

@push('page_script')
@endpush
