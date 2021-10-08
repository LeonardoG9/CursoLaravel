@extends('dashboard.master')
@section('content')
    @include('dashboard.partials.validation')

    <form action="{{ route('post.store') }}" method="POST">
    @include('dashboard.post.form')
    </form>
@endsection
