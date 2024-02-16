<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArtEgre - {{ $title }}</title>
{{--    <link rel="preconnect" href="https://fonts.googleapis.com">--}}
{{--    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>--}}
{{--    <link href="https://fonts.googleapis.com/css2?family=Almendra:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">--}}
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>

<div class="header">
    <h1>ArtEgre</h1>
    <h2>{{ $title }}</h2>
    <x-menu/>
</div>

<div class="main">
    {{ $slot }}
</div>

<div class="footer">
    <p>ArtEgre project 2024</p>
    <!-- Additional footer content here -->
</div>

<script>
    // JavaScript for dynamic behavior goes here
    // Example: fetching posts, handling user interactions, etc.
    document.addEventListener('DOMContentLoaded', function() {
    //     fetch('https://your-api-endpoint/posts')
    //         .then(response => response.json())
    //         .then(posts => {
    //             const postsContainer = document.querySelector('.main');
    //             posts.forEach(post => {
    //                 const postElement = document.createElement('div');
    //                 postElement.className = 'post';
    //                 postElement.innerHTML = `<h2>${post.title}</h2><p>${post.content}</p>`;
    //                 postsContainer.appendChild(postElement);
    //             });
    //         })
    //         .catch(error => console.error('Error fetching posts:', error));
    // });
</script>

</body>
</html>
