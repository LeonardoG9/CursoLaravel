@extends('dashboard.master')
@section('content')
    @include('dashboard.partials.validation')

    <form action="{{ route('category.store') }}" method="category">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input readonly type="text" class="form-control" id="title" name="title" value="{{$category->title}}" >
            @error('title')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="url_clean" class="form-label">Clean Url</label>
            <input readonly type="text" class="form-control" name="url_clean" id="url_clean" value="{{$category->url_clean}}">
        </div>
        
    </form>

@endsection
