


        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input  type="text" class="form-control" id="title" name="title" value="{{old('title',$category->title)}}" >
            
        </div>
        <div class="mb-3">
            <label for="url_clean" class="form-label">Clean Url</label>
            <input  type="text" class="form-control" name="url_clean" id="url_clean" value="{{old('url_clean',$category->url_clean)}}">
        </div>
       
        <input type="submit" value="Send" class="btn btn-success">


