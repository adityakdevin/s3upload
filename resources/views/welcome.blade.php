<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>S3 File Upload</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    <style>
        html, body {
            height: 100%;
            padding: 0;
            margin: 0;
        }

        main {
            position: absolute;
            top: 50%;
            right: 0;
            bottom: 0;
            left: 40%;
        }

        .alert-danger {
            color: #FF0000FF;
        }
    </style>
</head>
<body>
<main>
    <form action="{{route('upload')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" id="file">
        <button type="submit" value="upload">Upload</button>
    </form>
    @if(!empty($path))
        <br>
        <a href="{{$path}}" target="_blank">View Uploaded file</a>
    @endif
    @if ($errors->any())
        <div class="alert-danger">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
</main>
</body>
</html>
