<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Új könyv</title>
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

    <h1>Új könyv</h1>

    <form action="{{route('book.store')}}" method="POST">
        @csrf
        <label for="mufaj_id">Műfaj:</label>
        <select name="mufaj_id" id="mufaj_id">
            @foreach ($mufajs as $mufaj)
                <option value="{{$mufaj->id}}">{{$mufaj->nev}}</option>
            @endforeach
        </select><br><br>

        <label for="book_name">Cím: </label>
        <input type="text" name="book_name" id="book_name"></input><br><br>

        <label for="book_szerzo">Szerzo: </label>
        <input type="text" name="book_szerzo" id="book_szerzo"></input><br><br>

        <label for="book_ev">Kiadás éve: </label>
        <input type="number" name="book_ev" id="book_ev"></input><br><br>
        

        <button>Mentés</button>
    </form>
</body>
</html>
