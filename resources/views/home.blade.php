@extends('layouts.app')

@section('title', 'Laravel - Report Demo')

@section('content')
    <section>
        <h1 class="text-3xl text-blue-700 font-bold text-center p-4">รายงาน Departmental KPI &amp; Individual KPI ของหน่วยงาน</h1>
    </section>
@endsection

@push('js')
    @vite('resources/js/home.js')
@endpush
