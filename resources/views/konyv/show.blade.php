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
                <input type="hidden" value="{{$book->id}}" name="book_id">
                <button class="btn btn-primary">Törlés</button>
            </form>
            <form action="{{ route('kolcsonzes',$book->id)}}" method="POST">
                @csrf
                <input type="hidden" value="{{$book->id}}" name="book_id">
                <input type="hidden" value="{{$book->szerzo}}" name="book_szerzo">
                <input type="hidden" value="{{$book->cim}}" name="book_cim">
                <input type="hidden" value="{{$book->kiadas_eve}}" name="book_ev">
                <button class="btn btn-primary">kölcsönzés</button>
            </form>
        </li>
    @endforeach
</body>
</html>