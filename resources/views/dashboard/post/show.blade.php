@extends('dashboard.master')
@section('content')
    @include('dashboard.partials.validation')

    <form action="{{ route('post.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input readonly type="text" class="form-control" id="title" name="title" value="{{$post->title}}" >
            @error('title')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="url_clean" class="form-label">Clean Url</label>
            <input readonly type="text" class="form-control" name="url_clean" id="url_clean" value="{{$post->url_clean}}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea readonly name="content" class="form-control" id="content" rows="3" >{{$post->content}}</textarea>
            @error('content')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </form>

@endsection
