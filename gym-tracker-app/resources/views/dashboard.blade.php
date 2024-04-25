@extends('layouts.dashboardLayout')

@section('main')
    @if (Request::url() === 'http://127.0.0.1:8000/staticDash')
        <x-dashboard-pages.static-dashboard />
    @elseif (Request::url() === 'http://127.0.0.1:8000/tableDash')
        <x-dashboard-pages.table-dashboard />
    @elseif (Request::url() === 'http://127.0.0.1:8000/profileDash')
        <x-dashboard-pages.profile-dashboard />
    @elseif (Request::url() === 'http://127.0.0.1:8000/categoryDash')
        <x-dashboard-pages.category-dashboard :categories="$categories"/>
    @elseif (Request::url() === 'http://127.0.0.1:8000/benefitDash')
        <x-dashboard-pages.benefits-dashboard :benefits="$benefits" />
    @else
        <x-dashboard-pages.classe-dashboard :message="$message" :coaches="$coaches" :classes="$classes" :categories="$categories" :benefits="$benefits" />
    @endif
@endsection
