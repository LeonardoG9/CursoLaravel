@extends('dashboard.master')
@section('content')
    @include('dashboard.partials.validation')

    <form action="{{ route('category.store') }}" method="POST">
    @include('dashboard.category.form')
    </form>
@endsection
