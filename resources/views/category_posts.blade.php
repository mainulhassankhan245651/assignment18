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
    <div class="container">
        <h1>Posts in {{ $category->name }}</h1>
        @if ($posts->isEmpty())
            <p>No posts found for this category.</p>
        @else
            <ul>
                @foreach ($posts as $post)
                    <li>{{ $post->title }}</li>
                    <p>{{ $post->short_des }}</p>
                @endforeach
            </ul>
        @endif
    </div>
    </div>


<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
