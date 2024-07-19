<div>
        <h1>Blog Posts</h1>
        @foreach($blogPosts as $blogPost)
            <div style="margin-bottom: 20px; border: 1px solid #ccc; padding: 10px; border-radius: 5px;">
                <h2>{{ $blogPost->title }}</h2>
                <p>{{ $blogPost->description }}</p>
                <!-- You can add more details as needed -->
            </div>
        @endforeach
    </div>