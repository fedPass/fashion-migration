<!DOCTYPE html>
<html lang="it" dir="ltr">
    <head>
        <title>Lista Vestiti - Fashion Shop</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Inventario Vestiti</h1>
        <div>
            <a href="{{ route('create-cloth') }}">Inserisci merce</a>
        </div>
        @forelse ($vestiti as $vestito)
            <div>
                <p>ID:{{ $vestito->id }}</p>
                <p>Nome:{{ $vestito->name }}</p>
                <p>Prezzo:{{ $vestito->price }}</p>
                <hr>
            </div>
        @empty
            <p>Non c'è nulla da mostrare</p>
        @endforelse
        <div>
            <a href="{{ route('home') }}">Torna alla Home</a>
        </div>
    </body>
</html>
