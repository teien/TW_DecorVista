<x-app-layout>
    @include('dashboard.homeowner.components.Topbar')
    @include('dashboard.homeowner.components.navbar')
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

    <div class="container my-5">
        <h2 class="text-center mb-4">List Designer</h2>
        <div class="row">
            @foreach ($designers as $designer)
                <div class="col-md-4 mb-4">
                    <div class="card shadow h-100">
                        <!-- Hình ảnh Designer -->
                        <div class="text-center">
                            <img src="{{ asset($designer->profile_image_url) }}" class="card-img-top w-50 rounded-circle mt-4" alt="Designer Image" style="height: 150px; object-fit: cover;">
                        </div>
                        <div class="card-body text-center">
                            <!-- Tên Designer -->
                            <h5 class="card-title font-weight-bold">{{ $designer->first_name }} {{$designer->last_name}}</h5>
                            <!-- Giới thiệu ngắn -->
                            <p class="card-text text-muted">{{$designer->bio}}</p>
                            <!-- Nút Detail -->
                            <a href="{{ route('dashboard.designer', $designer->designer_id) }}" class="btn btn-primary btn-block mt-3" style="border-radius: 20px;">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</x-app-layout>

