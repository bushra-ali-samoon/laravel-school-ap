<h1>All Classes</h1>
<a href="{{ route('classes.create') }}">+ Add Class</a>

<ul>
@foreach($classes as $class)
  <li>{{ $class->classname }}</li>
@endforeach
</ul>
