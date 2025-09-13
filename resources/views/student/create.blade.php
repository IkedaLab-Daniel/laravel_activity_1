<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Student</title>
</head>
<body>
    <div>
        <a href="/students">Back to Students List</a>
    </div>

    <h1>Add New Student</h1>

    @if ($errors->any())
        <div style="color: red; margin-bottom: 20px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/students" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
            @error('name')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            @error('email')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" value="{{ old('age') }}" required>
            @error('age')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Add Student</button>
    </form>
</body>
</html>