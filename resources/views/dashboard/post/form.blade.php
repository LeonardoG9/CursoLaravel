


        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input  type="text" class="form-control" id="title" name="title" value="{{old('title',$post->title)}}" >
            @error('title')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="url_clean" class="form-label">Clean Url</label>
            <input  type="text" class="form-control" name="url_clean" id="url_clean" value="{{old('title',$post->title)}}">
        </div>
        <div class="mb-3">
            <label for="categorie" class="form-label">Categorie</label>
            <select class="form-control" name="category_id">
                @foreach ($categories as $title => $id) 
                    <option {{$post->category_id==$id ? 'selected="selected"' : ''}} value="{{$id}}">{{$title}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="posted" class="form-label">Posted?</label>
            <select class="form-control" name="posted">
                @include('dashboard.partials.option-posted',['val'=>$post->posted])
            </select>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea id="editor"  name="content" class="form-control" rows="3" >{{old('content',$post->content)}}</textarea>
            @error('content')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <input type="submit" value="Send" class="btn btn-success">


