<h1>Add Class</h1>

<form action="{{ route('classes.store') }}" method="POST">
  @csrf
  <input type="text" name="classname" placeholder="Class name" required>
  <button type="submit">Save</button>
</form>

<a href="{{ route('classes.index') }}">Back</a>
