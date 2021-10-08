@extends('dashboard.master')
@section('content')
    @include('dashboard.partials.validation')

    <form action="{{ route('category.update',$category->id) }}" method="POST">
       
       @method('PUT') 
       @include('dashboard.category.form')
    </form>

@endsection
