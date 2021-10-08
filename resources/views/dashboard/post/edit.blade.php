@extends('dashboard.master')
@section('content')
    @include('dashboard.partials.validation')

    <form action="{{ route('post.update',$post->id) }}" method="POST">
       
       @method('PUT') 
       @include('dashboard.post.form')
    </form>

@endsection
