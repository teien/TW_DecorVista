
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body{
            background-color: #f8f9fa;
            margin-top: 80px ;
        }

        .card {
            margin-bottom: 1.5rem;
            box-shadow: 0 .25rem .5rem rgba(0, 0, 0, .025)
        }

        .card-border-primary {
            border-top: 4px solid #2979ff
        }

        .card-border-secondary {
            border-top: 4px solid #efefef
        }

        .card-border-success {
            border-top: 4px solid #00c853
        }

        .card-border-info {
            border-top: 4px solid #3d5afe
        }

        .card-border-warning {
            border-top: 4px solid #ff9100
        }

        .card-border-danger {
            border-top: 4px solid #ff1744
        }

        .card-border-light {
            border-top: 4px solid #f8f9fa
        }

        .card-border-dark {
            border-top: 4px solid #6c757d
        }

        .card-header {

            border-bottom-width: 1px
        }

        .card-actions a {
            color: #495057;
            text-decoration: none
        }

        .card-actions svg {
            width: 16px;
            height: 16px
        }

        .card-actions .dropdown {
            line-height: 1.4
        }

        .card-title {
            font-weight: 500;
            margin-top: .1rem
        }

        .card-subtitle {
            font-weight: 400
        }

        .card-table {
            margin-bottom: 0
        }

        .card-table tr td:first-child,
        .card-table tr th:first-child {
            padding-left: 1.25rem
        }

        .card-table tr td:last-child,
        .card-table tr th:last-child {
            padding-right: 1.25rem
        }

        .card-img-top {
            height: 100%
        }
        .card {
            margin-bottom: 1.5rem;
            box-shadow: 0 0.25rem 0.5rem rgba(0,0,0,.025);
        }

        .card {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;

            background-clip: border-box;
            border: 1px solid #e5e9f2;
            border-radius: .2rem;
        }

        .card-header:first-child {
            border-radius: calc(.2rem - 1px) calc(.2rem - 1px) 0 0;
        }

        .card-header {
            border-bottom-width: 1px;
        }
        .card-header {
            padding: .75rem 1.25rem;
            margin-bottom: 0;
            color: inherit;

            border-bottom: 1px solid #e5e9f2;
        }
    </style>
    <title></title>
</head>
<body>
<x-app-layout>
    @include('dashboard.homeowner.components.Topbar')
    @include('dashboard.homeowner.components.navbar')
</x-app-layout>
<main class="content mt-5">
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
                                <form action="{{ route('user.consultations.cancel', $consultation->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Cancel</button>
                                </form>
                            @elseif($consultation->status == 'confirmed')
                                    <p>Waiting for you</p>
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
