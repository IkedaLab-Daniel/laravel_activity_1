<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>
<body>
    <h1>Students List</h1>
    @if($students->count() > 0)
        @foreach($students as $student)
            <div class="student-card">
                <div class="student-name">{{ $student->name }}</div>
                <div class="student-info">Email: {{ $student->email }}</div>
                <div class="student-info">Age: {{ $student->age }}</div>
            </div>
        @endforeach
    @else
        <p>No student yet</p>
    @endif
    <p>Add student here:</p>
    <a href="students/create">
        <button>Add Student</button>
    </a>
</body>
</html>