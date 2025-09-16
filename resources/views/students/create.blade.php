<h1>Add Student</h1>

<form action="{{ route('students.store') }}" method="POST">
  @csrf
  <input type="text" name="name" placeholder="Student name" required>

  <select name="class_id" required>
    <option value="">-- Select Class --</option>
    @foreach($classes as $class)
      <option value="{{ $class->id }}">{{ $class->classname }}</option>
    @endforeach
  </select>

  <button type="submit">Save</button>
</form>
