<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Data</title>
    {{-- link css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- link js --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <h2 style="text-align: center; margin-top: 20px;">Input Postingan Terbaru</h2>
    <hr>

    <form action="{{ url("post/$post->id") }}" method="POST" class="form-control">
        @csrf
        @method('PATCH')
        <div>
            <label for="title" class="form-label">Title :</label>
            <input type="text" class="form-control" name="title" id="title" required
                value="{{ $post->title }}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content :</label>
            <input type="text" class="form-control" name="content" id="content" required
                value="{{ $post->content }}">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
    </form>

</body>

</html>
