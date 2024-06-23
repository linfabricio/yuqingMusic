@extends('layout.master')

@push('plugin-styles')
    <link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
@endpush

@push('plugin-styles')

@endpush
@section('content')
    @livewire('dashboard')
@endsection
