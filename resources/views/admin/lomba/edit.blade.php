<h2>Edit Lomba</h2>
<form method="POST" action="{{ route('admin.lomba.edit', $lomba->id) }}">
    @method('PUT')
    @include('admin.lomba.form')
</form>
