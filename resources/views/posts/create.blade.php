<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Data</title>
    {{-- link css --}}
    <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- link js --}}
    <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.js') }}"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<body>
    <h2 style="text-align: center; margin-top: 20px;">Input Postingan Terbaru</h2>
    <hr>

    <form action="{{ url('post') }}" method="POST" class="form-control">
        @csrf
        <div>
            <label for="judul" class="form-label">Judul :</label>
            <input type="text" class="form-control" name="judul" id="judul" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content :</label>
            <input type="text" class="form-control" name="content" id="content" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
    </form>
</body>

</html>
