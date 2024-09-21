<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt Lịch Hẹn</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Schedule</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('consultation.store') }}" method="POST">
        @csrf

        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

        <input type="hidden" name="designer_id" value="{{ $designer_id}}">
        <div class="form-group">
            <label for="start_time">Time Start:</label>
            <input type="datetime-local" class="form-control" id="start_time" name="start_time" required>
        </div>

        <div class="form-group">
            <label for="end_time">Time End:</label>
            <input type="datetime-local" class="form-control" id="end_time" name="end_time" required>
        </div>

        <div class="form-group">
            <label for="notes">Note:</label>
            <textarea class="form-control" id="notes" name="notes"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Make Appointment</button>
    </form>
</div>
</body>
</html>
