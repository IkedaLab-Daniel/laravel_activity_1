<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
        .student-card {
            border: 1px solid #ddd;
            margin: 10px 0;
            padding: 15px;
            border-radius: 5px;
        }
        .student-name {
            font-weight: bold;
            font-size: 1.1em;
        }
        .student-info {
            margin: 5px 0;
            color: #666;
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
                    <h1>Students List</h1>
                    @if($students->count() > 0)
                        @foreach($students as $student)
                            <div class="student-card">
                                <div class="student-name">Name: {{ $student->name }}</div>
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
                    
                    <p><a href="/activities">View Activities Log</a></p>
                </div>
            </div>
        </main>
    </div>
</body>
</html>