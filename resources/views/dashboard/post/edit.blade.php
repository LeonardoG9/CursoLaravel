@extends('dashboard.master')
@section('content')
    @include('dashboard.partials.validation')

    <form action="{{ route('post.update', $post->id) }}" method="POST">

        @method('PUT')
        @include('dashboard.post.form')
    </form>
    <br>
    <div class="container">
        <form action="{{route('post.image',$post)}}" method="POST" enctype="multipart/form-data">
            <div class="row">
                @csrf
                <input type="file" name="image" id="" class="form-control col-10">
                <input type="submit" class="btn btn-primary col-2" value="submit">
            </div>
        </form>
    </div>
@endsection
