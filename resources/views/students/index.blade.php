<h1>All Students</h1>
<a href="{{ route('students.create') }}">+ Add Student</a>

<ul>
@foreach($students as $student)
  <li>{{ $student->name }} (Class: {{ $student->class->classname }})</li>
@endforeach
</ul>
