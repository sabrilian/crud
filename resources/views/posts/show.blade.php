<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IBUPEDIA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384">
</head>
<body style="background: rgb(247, 243, 243)">
    <div class="container mt-5 mb-5">

    <div class="mt-4 p-5 bg-primary text-white rounded">
        <img src="{{ asset('storage/posts/'.$post->image) }}" class="w-100 rounded">
        <hr>
        <h4>{{ $post->title }}</h4>
        <p class="tmt-3">
            {!! $post->content !!}
        </p>
        <a href="/posts" class="btn btn-dark">Back</a>
    </div>
    </div>
</body>
</html>