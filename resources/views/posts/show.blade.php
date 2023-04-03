<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post | Detail {{ $post->title }}</title>

    {{-- link css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- link js --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
            <small class="text-muted">{{ $total_comments }} komentar</small>

            @foreach ($comments as $row)
                <div class="card mb-3">
                    <div class="card-body">
                        <p style="font-size: 10pt">{{ $row->comment }}</p>
                    </div>
                </div>
            @endforeach
            <hr>
            <a href="{{ url('post') }}" class="btn btn-warning">Kembali</a>
            <form method="POST" action="{{ url("post/$post->id") }}">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </article>
    </div>
</body>

</html>
