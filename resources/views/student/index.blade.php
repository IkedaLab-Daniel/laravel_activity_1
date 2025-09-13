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
            <div>
                <p>Student Name: {{ $student->name }}</p>
                <p>Email: {{ $student->email }}</p>
            </div>
            <hr>
        @endforeach
    @else
        <p>No student yet</p>
    @endif
</body>
</html>