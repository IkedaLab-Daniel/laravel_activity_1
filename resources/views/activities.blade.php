<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities Log</title>
</head>
<body>
    <h1>Activities Log</h1>
    
    <p><a href="/students">Back to Students</a></p>
    
    @if($activities->count() > 0)
        @foreach($activities as $activity)
            <div style="border: 1px solid #ddd; padding: 10px; margin: 10px 0;">
                <strong>Action:</strong> {{ $activity->action }}<br>
                <strong>Description:</strong> {{ $activity->description }}<br>
                <strong>Time:</strong> {{ $activity->created_at->format('Y-m-d H:i:s') }}<br>
            </div>
        @endforeach
    @else
        <p>No activities logged yet.</p>
    @endif
</body>
</html>