@extends('dashboard.master')
@section('content')

    <a href="{{ route('user.create') }}" class="btn btn-success btn-sm mb-1 me-1">Create</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Rol</th>
                <th scope="col">Created</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->rol->key }}</td>
                    <td>{{ $user->created_at}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('user.show', $user->id) }}">See</a>
                        <a class="btn btn-warning" href="{{ route('user.edit', $user->id) }}">Update</a>
                        <button data-id="{{ $user->id }}" type="button" class="btn btn-danger" data-toggle="modal"
                            data-target="#deleteModal">
                            Delete
                        </button>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $users->links() }}



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
                    <form id="formDelete" method="POST" action="{{ route('user.destroy', 0) }}"
                        data-action="{{ route('user.destroy', 0) }}">
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
