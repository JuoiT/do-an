<form action="{{ route('admin.login') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Email">
        <small id="helpId" class="form-text text-muted">Email you have been provided</small>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="Email">
    </div>
    <button type="submit">Login</button>
</form>
