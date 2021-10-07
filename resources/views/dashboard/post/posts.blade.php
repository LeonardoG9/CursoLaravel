
@extends('dashboard.master')
@section('content')
@include('dashboard.partials.validation')

    <form action="{{ route('post.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title">
            @error('title')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="url_clean" class="form-label">Clean Url</label>
            <input type="text" class="form-control" name="url_clean" id="url_clean">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" class="form-control" id="content" rows="3"></textarea>
            @error('content')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
