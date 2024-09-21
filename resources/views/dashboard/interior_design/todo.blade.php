


<main class="content">
    <div class="container p-0">
        <div class="row mt-4">

            <table class="table ">
                <thead>
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
                        <td>{{ $consultation->user->name}}</td>
                        <td>{{ $consultation->start_time }} -> {{ $consultation->end_time }}</td>
                        <td>{{ $consultation->notes}}</td>
                        <td >{{ ucfirst($consultation->status) }}</td>
                        <td>
                            @if($consultation->status == 'pending')
                                <form action="{{ route('designer.consultations.accept', $consultation->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-success">Accept</button>
                                </form>
                                <form action="{{ route('designer.consultations.reject', $consultation->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Reject</button>
                                </form>
                            @elseif($consultation->status == 'confirmed')
                                <form action="{{ route('designer.consultations.complete', $consultation->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-success">Complete</button>
                                </form>
                            @elseif($consultation->status == 'completed')
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
</main>
