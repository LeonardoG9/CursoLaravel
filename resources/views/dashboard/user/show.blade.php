@extends('dashboard.master')
@section('content')
    @include('dashboard.partials.validation')

    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Name</label>
            <input readonly type="text" class="form-control" id="name" name="name" value="{{$user->name}}" >
            @error('title')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="url_clean" class="form-label">Email</label>
            <input readonly type="text" class="form-control" name="email" id="email" value="{{$user->email}}">
        </div>
        
        
    </form>

@endsection
