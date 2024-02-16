<x-main_layout>
    <x-slot:title>
        Home
    </x-slot:title>

    <div class="quote-box">
        "{{ $randomQuote->quote }}"
        <span class="quote-author">- {{ $randomQuote->author }}</span>
    </div>

    <div class="featured-posts">
        <h2>Featured Posts</h2>
        <div class="posts-grid">
            @foreach($featuredPosts as $post)
                <div class="post">
                    <img src="{{ $post->image }}" alt="Post image" class="post-image">
                    <h3 class="post-title">{{ $post->title }}</h3>
                    <p class="post-excerpt">{{ Str::limit($post->excerpt, 100) }}</p>
                    <a href="/posts/{{ $post->id }}" class="read-more">Read More</a>
                </div>
            @endforeach
        </div>
    </div>

</x-main_layout>
