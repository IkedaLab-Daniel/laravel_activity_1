<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities Log</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .activity-card {
            border: 1px solid #ddd;
            margin: 10px 0;
            padding: 15px;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .activity-action {
            font-weight: bold;
            color: #007bff;
        }
        .activity-time {
            color: #666;
            font-size: 0.9em;
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
                    <h1>Activities Log</h1>
                    
                    <p><a href="/students">Back to Students</a></p>
                    
                    @if($activities->count() > 0)
                        @foreach($activities as $activity)
                            <div class="activity-card">
                                <div class="activity-action">Action: {{ $activity->action }}</div>
                                <div>Description: {{ $activity->description }}</div>
                                <div class="activity-time">Time: {{ $activity->created_at->format('Y-m-d H:i:s') }}</div>
                            </div>
                        @endforeach
                    @else
                        <p>No activities logged yet.</p>
                    @endif
                </div>
            </div>
        </main>
    </div>
</body>
</html>