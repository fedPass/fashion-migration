<!DOCTYPE html>
<html lang="it" dir="ltr">
    <head>
        <title>Inserisci merce - Fashion Shop</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Inserisci nuova merce</h1>
        <div>
            <a href="{{ route('home') }}">Torna alla Home</a>
        </div>
        <form class="" action="{{ route('store-cloth') }}" method="post">
            @csrf
            <p><input type="text" name="name" placeholder="Nome"></p>
            <p><input type="text" name="description" placeholder="Descrizione"></p>
            <p><input type="text" name="price" placeholder="Prezzo"></p>
            <p><input type="submit" name="invia" value="Inserisci merce"></p>
        </form>
    </body>
</html>
