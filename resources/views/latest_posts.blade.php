<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <link rel="icon" type="image/x-icon" href="{{asset('/favicon.ico')}}" />
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />
    <script src="{{asset('js/axios.min.js')}}"></script>
</head>

<body class="d-flex flex-column h-100">



    <div class="container">
        <h1>Latest Posts</h1>

        @foreach ($categories as $category)
            <h2>{{ $category->name }}</h2>
            @if ($category->latestPost)
                <div class="card mb-3">
                    <div class="card-header">{{ $category->latestPost->title }}</div>
                    <div class="card-body">
                        <p>{{ $category->latestPost->short_des }}</p>
                    </div>
                </div>
            @else
                <p>No posts found for this category.</p>
            @endif
        @endforeach
    </div>


<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
