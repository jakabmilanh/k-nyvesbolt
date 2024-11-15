<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif
@if (@session('success'))
    <p>{{session('success')}}</p>
@endif

    <form action="{{ route('new.genre') }}" method="post">
        @csrf
        <label for="brand">Műfaj neve: </label>
        <input type="text" name="name" id="name" required><br><br>
        <button type="submit">Mentés</button>
    </form>
</body>
</html>