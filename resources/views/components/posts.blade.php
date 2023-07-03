<div class="container">
        <h1>All Posts</h1>
        @foreach ($posts as $post)
            <div class="card mb-3">
                <div class="card-header">{{ $post->title }}</div>
                <div class="card-body">
                    <p>{{ $post->short_des }}</p>
                    <p><strong>Category: </strong>{{ $post->category->name }}</p>
                </div>
            </div>
        @endforeach
</div>
