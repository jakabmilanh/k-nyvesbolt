<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('new.genre') }}" method="post">
        @csrf
        <label for="brand">Műfaj neve: </label>
        <input type="text" name="brand" id="name" required><br><br>
        <button type="submit">Mentés</button>
    </form>
</body>
</html>