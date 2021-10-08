@extends('dashboard.master')
@section('content')

    <a href="{{ route('post.create') }}" class="btn btn-success btn-sm mb-1 me-1">Create</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">URL</th>
                <th scope="col">Content</th>
                <th scope="col">Posted</th>
                <th scope="col">Created</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->url_clean }}</td>
                    <td>{{ $post->content }}</td>
                    <td>{{ $post->posted }}</td>
                    <td>{{ $post->created_at->format('d-M-Y') }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('post.show', $post->id) }}">See</a>
                        <a class="btn btn-warning" href="{{ route('post.edit', $post->id) }}">Update</a>
                        <button data-id="{{ $post->id }}" type="button" class="btn btn-danger" data-toggle="modal"
                            data-target="#deleteModal">
                            Delete
                        </button>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $posts->links() }}



    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel"></h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want o delete it?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <form id="formDelete" method="POST" action="{{ route('post.destroy', 0) }}"
                        data-action="{{ route('post.destroy', 0) }}">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $('#deleteModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var id = button.data('id') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            action = $('#formDelete').attr('data-action').slice(0, -1)
            action += id
            $('#formDelete').attr('action', action)
            var modal = $(this)
            modal.find('.modal-title').text('You are going to delete Post N° ' + id)
        });
    </script>
@endsection
