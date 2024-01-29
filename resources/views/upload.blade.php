<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPLOAD</title>
</head>
<body>
    {{$errors}}
    <form action="upload" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file"><br>
        <input type="submit" value="POST">
    </form>
    <img src="{{url('public')}}" alt="loading file...">
</body>
</html> 