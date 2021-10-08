@extends('dashboard.master')
@section('content')
    @include('dashboard.partials.validation')

    <form action="{{ route('user.update', $user->id) }}" method="POST">

        @method('PUT')
        @include('dashboard.user.form',['passw'=>false])
    </form>
  
@endsection
