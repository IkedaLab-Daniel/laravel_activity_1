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

    <form action="/students" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div>
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" min="1" max="120" required>
        </div>

        <button type="submit">Add Student</button>
    </form>
</body>
</html>