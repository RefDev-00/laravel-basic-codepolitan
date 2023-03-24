<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post | Detail {{ $post->title }}</title>

    {{-- link css --}}
    <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet">
    {{-- link js --}}
    <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.js') }}"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <style>
        small {
            color: grey
        }

        .title {
            text-align: center;
        }

        .mydiv {
            border: 2px;
            background-color: lightcyan;
            text-align: justify;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="title"><u>Halaman Detail Blog</u></h2>
        <hr>
        <article class="blog-post">
            <h4 class="blog-post-title">{{ $post->title }}</h4>
            <p class="blog-post-meta">Last Update {{ date('d M Y H:i', strtotime($post->created_at)) }}</p>
            <p>{{ $post->content }}</p>
            <hr>
            <a href="{{ url('post') }}" class="btn btn-danger">Kembali</a>
        </article>
    </div>
</body>

</html>
