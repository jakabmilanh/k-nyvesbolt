<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach ($books as $book)
        <li>
            <strong>Cím: </strong> {{$book->cim}} <br>
            <strong>Szerző: </strong> {{$book->szerzo}}<br>
            <strong>Kiadás éve: </strong> {{$book->kiadas_eve}} <br>
            <form action="{{ route('delete_book',$book->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-primary">Vásárlás</button>
            </form>
        </li>
    @endforeach
</body>
</html>