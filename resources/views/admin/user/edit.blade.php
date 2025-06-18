<h2>Edit Lomba</h2>
<form method="POST" action="{{ route('admin.lomba.edit', $user->id) }}">
    @method('PUT')
    @include('admin.lomba.form')
</form>
