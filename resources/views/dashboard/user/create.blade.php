@extends('dashboard.master')
@section('content')
    @include('dashboard.partials.validation')

    <form action="{{ route('user.store') }}" method="POST">
        @include('dashboard.user.form',['passw'=>true])
    </form>
@endsection
