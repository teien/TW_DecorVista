<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<x-app-layout>
    @include('dashboard.homeowner.components.Topbar')
    @include('dashboard.homeowner.components.navbar')
</x-app-layout>

<main class="content mt-5">
    <div class="container p-0">
        <div class="row mt-4">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                <tr class="text-center">
                    <th>#</th>
                    <th>Name</th>
                    <th>Time</th>
                    <th>Notes</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($consultations as $consultation)
                    <tr class="text-center">
                        <td>{{ $consultation->id }}</td>
                        <td>{{ $consultation->user->name }}</td>
                        <td>{{ $consultation->start_time }} -> {{ $consultation->end_time }}</td>
                        <td>{{ $consultation->notes }}</td>
                        <td class="text-capitalize">{{ $consultation->status }}</td>
                        <td>
                            @if($consultation->status == 'pending')
                                <form action="{{ route('user.consultations.cancel', $consultation->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">Cancel</button>
                                </form>
                            @elseif($consultation->status == 'confirmed')
                                <p class="text-success font-weight-bold">Waiting for you</p>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</main>

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
</script>
</body>
</html>
