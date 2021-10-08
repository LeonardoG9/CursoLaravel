@csrf
<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}">

</div>
<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="email" value="{{ old('email', $user->email) }}">
</div>

@if ($passw == true)
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="password"
            value="{{ old('password', $user->password) }}">
    </div>
@endif

<input type="submit" value="Send" class="btn btn-success">
