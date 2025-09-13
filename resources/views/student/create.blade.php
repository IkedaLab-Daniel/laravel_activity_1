<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Student</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Content -->
        <main>
            <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                <div class="px-4 py-6 sm:px-0">
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
                </div>
            </div>
        </main>
    </div>
</body>
</html>